<?php 
require_once 'adminhelper.php';
$uploadtype = $_GET["type"];
$typename = getCategoories($uploadtype);
$data = getJSON($uploadtype);
$css = getDivisionFromCategory($uploadtype);

$mycount=0;
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
		$empty = true;
		foreach ($data as $jsonintem) { 
			if(!isset($jsonintem['desc'])){
				$jsonintem['desc'] = "";
			}
			$empty = false;
			?> 
			<?php if(($i % 4) == 0){ ?>		
				<tr>
			<?php } ?>
			<td class='prodtd <?php  echo $css."prodtdcolor" ?>'>
			<div class="prodtddiv">
			
				<div class='proditem'>
					<img class='prodimgbg' src='<?php echo $currpath.$jsonintem['name']; ?>'></img>					
				</div>
				<div id='prodtitle_<?php echo $i;?>' class='prodtitle <?php  echo $css."prodtitlecolor" ?>'><?php echo $jsonintem['txt']; ?> </div>
				<div class='proddesc <?php  echo $css."proddesccolor" ?>'>
				<div class="offer" onclick='offer(<?php echo $i;?>)'><button id="offerbutton_<?php echo $i?>">Ajánlatkérés</button></div>
				<div class="proddescdotdot">...</div>
				<div id='proddesc_<?php echo $i;?>' class="proddescdetails"><?php echo $jsonintem['desc']; ?></div> 
				</div>
				
				<?php if($admin){?>
					<button class="editprodbutton" onclick="deleteprodbutton('<?php echo $jsonintem['name'];?>','<?php echo $uploadtype;?>')">Töröl</button>
					<button class="editprodbutton" onclick="showedit('<?php echo $mycount;?>')">Szerkeszt</button>
					<input type="checkbox" class="changecb" id="<?php echo $jsonintem['name'];?>" />
					<div class="myhidden" id="prod_<?php echo $mycount;?>" >
						<input id="new_name_<?php echo $mycount;?>" type="text" name="new_name" value="<?php echo $jsonintem['txt']; ?>"/>
						<textarea id="new_desc_<?php echo $mycount;?>" name="newdesc"><?php echo $jsonintem['desc']; ?></textarea><br/>
						<input type="hidden" id="id_<?php echo $mycount;?>" value="<?php echo $jsonintem['name'];?>">
						<input type="hidden" id="type_<?php echo $mycount;?>" value="<?php echo $uploadtype;?>">
						<button type="button" onclick="editprodbutton('<?php echo $mycount;?>')" >Save</button>
					</div>
					
				<?php $mycount++; }?>
				</div>
			</td>
			<?php if(($i % 4) == 3){ ?>		
				</tr>
			<?php 
				}
				$i++;
			} 

			$num = count($data);
			$num = $num % 4;
			if($num <= 3){
				while($num <= 3){
					?>
					<td class='prodtd_empty'>
						
					</td>
					<?php 
					$num = $num+1;
				}
				?>
				</tr>
				<?php 
			}
			
			if($empty){
				echo "<tr><td><h1 style='color:black'>Hamarosan...</h1></td></tr>";
			}
		?>
		</table>
	<br/>
	</div>
