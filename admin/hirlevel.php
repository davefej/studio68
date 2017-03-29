
<?php 

$msg = "frissítheted a címlistát";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	if ( isset($_FILES["csv"])) {
	
		//if there was an error uploading the file
		if ($_FILES["csv"]["error"] > 0) {
			$msg =  "Hibás feltöltés Hiba kód: " . $_FILES["csv"]["error"];
	
		}
		else {
			//Print file details

				//Store file in directory "upload" with the name of "uploaded_file.txt"
				$storagename = "cimlista.csv";
				move_uploaded_file($_FILES["csv"]["tmp_name"], "res/" . $storagename);
				$msg =  "Sikeres feltöltés";
			
		}
	} else {
		$msg =  "Nem volt file kiválasztva :(";
	}
}
?>


<script src="//cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="res/jquery1.12.4.js"></script>
<script src="res/bootstrap.js"></script>
<script src="res/bootbox.js"></script>
<script src="res/admin.js"></script>



<script>tinymce.init({
	  selector: 'textarea',
	  height: 500,
	  theme: 'modern',
	  plugins: [
	    'advlist autolink lists link  hr anchor pagebreak',
	    'searchreplace wordcount visualblocks visualchars code fullscreen',
	    'insertdatetime nonbreaking save table contextmenu directionality',
	    'emoticons template paste textcolor colorpicker textpattern imagetools toc'
	  ],
	  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
	  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
	  
	  content_css: [
	    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
	    '//www.tinymce.com/css/codepen.min.css'
	  ]
	 });</script>

<?php require_once'common/adminheader.php';?>



<div class="hirleveldiv">
	<div class="hirleveltitle">
	Hírlevél
	
	</div>
	Feltölteni csv formátumban lehet a címlistát <br/>
		(excellből menthető így a táblázat (save as UTF-8 csv format) <br/>
		Két oszlop elsőben a nevek másodikban a hozzá tartozó email címek...<br/>
	<div class="hirlevel2">
		<div class="hirlevelleft">
		<span class='hirlevelh2'>Új Cím lista</span> 
		<form action="hirlevel.php" method="POST" enctype="multipart/form-data">
			
			<table class="hirleveltable" align="center">
			
				<tr>
					<td>Új Cím lista feltöltése (Név;email) formátumú csv file
					</td>
				</tr>
				<tr>	
					<td><input type="file" name="csv">
		  				<br/><input type="submit" value="feltölt">
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
				<th>Név</th>
				<th>E-mail</th>
			</tr>
			
			<?php 
			
			if ($file = fopen("res/cimlista.csv", "r")) {
				while(!feof($file)) {
					$line = fgets($file);
					if($line != false){
						$data = explode(";", $line);
					
						echo "<tr><td>".$data[0]."</td><td>".$data[1]."</td></tr>";
					}
				}
				fclose($file);
			}
			
			?>
		</table>
		</div>
	</div>
	<br/>
	<br/>
	<span class='hirlevelh2'>Hírlevél szerkesztése:</span> 
	
	<div class="hirleveltextarea">
	 <textarea >Kedves #nev#!
	 <br/><br/><br/><br/>
	 	<b>Studió<font style="color:red">68</font></b><br/>
	 	1119 Budapest, Boglárka utca 32.<br/>
	 	info@studio68.hu<br/><br/>&nbsp;
	 </textarea>
	 </div>
	 <br/><br/>
	 <button onclick="emailView()">Előlnézet</button>
	  <button>Elküld</button>
</div>
 	
	<br/>
	<br/>


<?php require_once'common/adminfooter.php';?>