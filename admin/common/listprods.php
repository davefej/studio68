<?php 
require_once 'adminhelper.php';
$upoadtype = $_GET["type"];
$data = getJSON($upoadtype);
if(isset($_GET['admin']) && $_GET['admin'] == true){
	$admin=true;
	$currpath =  "../res/".$upoadtype."/";
	
	
}else{
	$admin=false;
	$currpath =  "res/".$upoadtype."/";
}

?>
<?php if($admin){?>
<button class="changebutton" onclick="imgchage('<?php  echo $upoadtype ?>')">Kép Csere</button>
<?php } ?>
	<div class='bbheader'><?php  echo $upoadtype ?></div>
	<div class='bbcontainer'>
		<table class='prodtable'>
		<?php 
		$i=0;
		foreach ($data as $jsonintem) { ?> 
			<?php if(($i % 4) == 0){ ?>		
				<tr>
			<?php } ?>
			<td class='prodtd'>
				<div class='proditem'>
				<?php if($admin){?>
					<button class="editprodbutton" onclick="deleteprodbutton('<?php echo $jsonintem['name'];?>','<?php echo $upoadtype;?>')">Töröl</button>
					<input type="checkbox" class="changecb" id="<?php echo $jsonintem['name'];?>" />
				<?php }?>
					<div class='prodtitle'><?php echo $jsonintem['txt']; ?> </div>
					<img class='prodimgbg' src='<?php echo $currpath.$jsonintem['name']; ?>'></img>
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
					<td class='prodtd'>
						<div class='proditem'><div class='prodtitle'></div><img class='prodimgbg'></img></div>
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
