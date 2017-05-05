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
			<?php if(($i % 4) == 0){ ?>		
				<tr>
			<?php } ?>
			<td class='prodtd'>
			<div class="prodtddiv">
			
				<div class='proditem'>
				<?php if($admin){?>
					<button class="editprodbutton" onclick="deleteprodbutton('<?php echo $jsonintem['name'];?>','<?php echo $uploadtype;?>')">Töröl</button>
					<input type="checkbox" class="changecb" id="<?php echo $jsonintem['name'];?>" />
				<?php }?>
					
					<img class='prodimgbg' src='<?php echo $currpath.$jsonintem['name']; ?>'></img>					
				</div>
				<div class='prodtitle'><?php echo $jsonintem['txt']; ?> </div>
				<div class='proddesc'><?php echo $jsonintem['desc']; ?> </div>
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
		?>
		</table>
	<br/>
	</div>
