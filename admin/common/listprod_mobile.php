<?php 
require_once 'adminhelper.php';
$uploadtype = $_GET["type"];
$typename = getCategoories($uploadtype);
$data = getJSON($uploadtype);
if(isset($_GET['admin']) && $_GET['admin'] == true){
	$admin=true;
	$currpath =  "../dinamic/".$uploadtype."/";
	
	
}else{
	$admin=false;
	$currpath =  "dinamic/".$uploadtype."/";
}

?>
<?php if($admin){?>
<button class="changebutton" onclick="imgchage('<?php  echo $uploadtype ?>')">Kép Csere</button>
<?php } ?>
	<div class='bbheader'><?php  echo $typename; ?></div>
	<div class='bbcontainer'>
		<table class='prodtable'>
		<?php 
		$i=0;
		foreach ($data as $jsonintem) { 
			if(!isset($jsonintem['desc'])){
				$jsonintem['desc'] = "";
			}
			
			?> 
			<tr>
			<td class='prodtd'>
			<div class="prodtddiv">
				<div class='prodtitle'><?php echo $jsonintem['txt']; ?> </div>
					<div class='proditem'>
						<img class='prodimgbg' src='<?php echo $currpath.$jsonintem['name']; ?>'></img>					
					</div>
				<div class='proddesc'><?php echo $jsonintem['desc']; ?> </div>
			</div>
			</td>
			
			</tr>
			 

		<?php 
			}
		?>
		</table>
	<br/>
	</div>
