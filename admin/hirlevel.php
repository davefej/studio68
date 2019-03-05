<?php 
require_once'common/header.php';
$adminnews = true;
require "common/newsletter_common.php";
$msg = "frissítheted a címlistát";
$msg2 = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	if(isset($_POST["attype"])){	

		$target_file = "../resources/" . basename($_FILES["attachment"]["name"]);
		move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file);
		$msg2 = "Sikeres feltöltés";
	}else{
		if ( isset($_POST["name"]) && isset($_POST["email"])) {
		
			if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$msg = "Hibás Email formátum!";
			}else{
				$ret = subscribe(array(
						"name" => $_POST["name"],
						"email" => $_POST["email"]
				));
				if($ret){
					$msg = "Sikeres Feltöltés!";
				}else{
					$msg = "Sikertelen Feltöltés! Email már létezik";
				}
			}
		
		} else {
			$msg =  "Adja meg a nevet és az emailcímet!";
		}
	}
	
}else if($_SERVER['REQUEST_METHOD'] === 'GET'){
	if ( isset($_GET["delete"]) ) {
		
		if(unsubscribeByParam($_GET["delete"],"id")){
			$msg =  "Sikeres törlés";
		}else{
			$msg =  "Sikertelen törlés";
		}
		
	}
}
?>






<script src="res/tinymce/tinymce.min.js"></script>

<!-- 
<script>tinymce.init({
	  selector: 'textarea',
	  height: 500,
	  theme: 'modern',
	  plugins: [
	    'advlist autolink lists link  hr anchor pagebreak',
	    'searchreplace wordcount visualblocks visualchars code fullscreen',
	    'insertdatetime nonbreaking save table contextmenu directionality',
	    'emoticons template paste textcolor colorpicker textpattern  image toc'
	  ],
	  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  toolbar2: 'print preview media | forecolor backcolor emoticons',
	  
	  content_css: [
	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
	 });</script>
 -->
<div class="hirleveldiv">
	<div class="hirleveltitle">
	Hírlevél
	
	</div>
	<span><?php 
	
	$path = "nlcounter".date('Ym').".txt";
	$count = "0";
	if(file_exists($path)){
		$count = file_get_contents($path);
	}	
	if(intval($count) > 0){
		echo "Eddigi kattintások: ".$count;
	}
	
	?></span>
	<div class="hirlevel2">
		<div class="hirlevelleft">
		<span class='hirlevelh2'>Új EmailCím hozzáadása </span> 
		<form action="hirlevel.php" method="POST" enctype="multipart/form-data">
			
			<table class="hirleveltable" align="center">
			
				
				<tr>	
					<td><input type="text" name="name" placeholder="name">
					
					<input type="text" name="email" placeholder="email">
		  				<br/><br/><input type="submit" value="feltölt">
		  			</td>
				<tr>
					<td><span class='hirleveluploadmsg'><?php echo $msg; ?></span></td>
				</tr>	
			</table>
		</form>
		
		</div>
		<div class="hirleveltigth">
		<span class='hirlevelh2'>Jelenlegi címlista:</span> 
		<table class="hirleveltable" align="center">
			<tr>
				<th></th>
				<th>Név</th>
				<th>E-mail</th>
				<th>Törlés</th>
			</tr>
			
			<?php 
			$path = "";
			$jsonstr ="";
			if($_SERVER['SERVER_NAME'] == "localhost"){
				$path = "res/testnewsletter.json";
			}else{
				$path = "res/newsletter.json";
			}
			if(file_exists($path)){
				if ($file = fopen($path, "r")) {
					while(!feof($file)) {
						$line = fgets($file);
						$jsonstr .= $line."\n";
					}
					fclose($file);
				}else{
					$jsonstr = "[]";
				}
			}else{
				$jsonstr = "[]";
			}
			
			$json = json_decode($jsonstr,3);
			$i = 0;
			foreach($json as $key => $value){
				echo "<tr><td>".++$i."</td><td>".$value["name"]."</td><td>".$value["email"]."</td><td><img style='width:1em;cursor:pointer;' onclick='deleteUser(\"".$value["id"]."\")' src='res/redcross.png'/></td></tr>";
			}
			?>
		</table>
		</div>
	</div>
	<br/>
	<br/>
	<div class="upload-container">
	<span class='hirlevelh2'>Hírlevél Kiküldés:</span> <br/>
	<span id="uploadmsg">A hírlevélt HTML formátumban kell elkészíteni majd itt feltölteni! A hírlevél kötelezően kell 1x tartalmaznia a #nev# és a #link# szövegeket. Ezek automatikusan lecserélődnek az adott ügyfél nevére valamint egy hírlevél leiratkozási linkre! A #nev#-ot érdemes a megszólításba rakni. A #link#-ot pedig az email aljára.</span>
	<input type="text" class="subject" placeholder="Tárgy" id="subject"/>
	<br/><br/>Hírlevél Template (html file)<input class="mailuploaditem" id="hirlevelhtml" onchange="htmlupload()" type="file" >
	<div class="mailuploaditem" >
	 <button style=" margin:0.5em;display:none;" id="preview" onclick="emailView()">Előlnézet</button>
	  <button  style=" margin:0.5em;display:none;"   id="send" onclick="sendNewsLetter()">Elküld</button>
	
	</div>
	<div class="attcontainer">
	<span class='hirlevelh2'>Hírlevél Csatolmány feltöltése</span> <br/>
	
		<form action="hirlevel.php" method="POST" enctype="multipart/form-data">
		<br/>
		<br/>
			Kép/pdf feltöltés<input class="mailuploaditem" name="attachment" type="file" onchange="attuploadfunc()">	
			<input class="mailuploaditem" name="attype" type="hidden" value="1" >				
			<span class='mailuploaditem hirleveluploadmsg '><?php echo $msg2; ?></span>
			<input type="submit" class="mailuploaditem" value="feltölt" id="uploadbtnatt"  style="display:none;">
		</form>
		
		
		<br/>
		<br/>
		<span class='hirlevelh2'>Csatolmányok:</span> <br/>
		<ul>
		<?php 
			$directory = '../resources';
			$scanned_directory = array_diff(scandir($directory), array('..', '.'));
			foreach ($scanned_directory as $key => $value)
			{
				echo "<li><a href='https://studio68.hu/site/resources/".$value."'>https://studio68.hu/site/resources/".$value."</a></li>";
			}
		?>
		</ul>
	</div>
	
	</div>
	
	<br/>
	<br/>


<?php require_once'common/footer.php';?>