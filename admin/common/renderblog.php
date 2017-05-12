
<?php 
require_once 'adminhelper.php';
$uploadtype = "blog";

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
<button class="changebutton" onclick="imgchage('<?php  echo $uploadtype ?>')">Kép Csere</button><br/><br/>
<?php } ?>
	<div class="b-load">
		<?php 
		$i=0;
		$mycount = 0;
		foreach ($data as $jsonintem) { 
			if(!isset($jsonintem['desc'])){
				$jsonintem['desc'] = "";
			}
			
			?> 
			
			<div class="bookpagediv">
				<img style="width:300px" src="<?php echo $currpath.$jsonintem['name']; ?>" alt=""/>
				<h1><?php echo $jsonintem['txt']; ?></h1>
				<?php echo $jsonintem['desc']; ?>
			</div>
			<?php if($admin){?>
			
				<button class="editprodbutton" onclick="deleteprodbutton('<?php echo $jsonintem['name'];?>','<?php echo $uploadtype;?>')">Töröl</button>
				<button class="editprodbutton" onclick="showedit('<?php echo $mycount;?>')">Szerkeszt</button>
						
				<div class="myhidden" id="prod_<?php echo $mycount;?>" >
					<input id="new_name_<?php echo $mycount;?>" type="text" name="new_name" value="<?php echo $jsonintem['txt']; ?>"/>
					<textarea id="new_desc_<?php echo $mycount;?>" name="newdesc"><?php echo $jsonintem['desc']; ?></textarea><br/>
					<input type="hidden" id="id_<?php echo $mycount;?>" value="<?php echo $jsonintem['name'];?>">
					<input type="hidden" id="type_<?php echo $mycount;?>" value="<?php echo $uploadtype;?>">
					<button type="button" onclick="editprodbutton('<?php echo $mycount;?>')" >Save</button>
				</div>
			<?php $mycount++; } ?>	

		<?php 
			}
		?>
	
	</div>
