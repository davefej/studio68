<?php 
require_once 'adminhelper.php';
$uploadtype = $_GET["type"];
$typename = getCategoories($uploadtype);
$data = getJSON($uploadtype);
$css = getDivisionFromCategory($uploadtype);
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
	<div class='bbheader <?php  echo $css."bbheadercolor" ?>'><?php  echo $typename; ?></div>
	<div class='bbcontainer'>
		<table class='prodtable'>
		<?php 
		$i=0;
		foreach ($data as $jsonintem) { 
			if(!isset($jsonintem['desc'])){
				$jsonintem['desc'] = "";
			}
			$i++;
			?> 
			<tr>
			<td class='prodtd <?php  echo $css."prodtdcolor" ?>'>
			<div class="prodtddiv">	
					<div class='proditem'>
						<img class='prodimgbg' src='<?php echo $currpath.$jsonintem['name']; ?>'></img>					
					</div>
				<div id='prodtitle_<?php echo $i;?>' class='prodtitle <?php  echo $css."prodtitlecolor" ?>'><?php echo $jsonintem['txt']; ?> </div>
				<div class="offer" onclick='offer(<?php echo $i;?>)'><button style="color:black" id="offerbutton_<?php echo $i?>">Ajánlatkérés</button></div>				
				<div id='proddesc_<?php echo $i;?>' class='proddesc <?php  echo $css."proddesccolor" ?>'><?php echo $jsonintem['desc']; ?> </div>
			</div>
			</td>
			
			</tr>
			 

		<?php 
			}
			
			if($i == 0){
				echo "<tr><td>Hamarosan...</td></tr>";
			}
		?>
		</table>
	<br/>
	</div>
