
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
	<hr/>
		<?php 
		$i=0;
		$mycount = 0;
		foreach ($data as $jsonintem) { 
			if(!isset($jsonintem['desc'])){
				$jsonintem['desc'] = "";
			}
			
			?> 
			
			<div class="bookpagediv">
				<h1 class="articletitle"><?php echo $jsonintem['txt']; ?></h1>
				<img style="width:300px" src="<?php echo $currpath.$jsonintem['name']; ?>" alt=""/><br/><br/>
				
				<?php echo $jsonintem['desc']; ?>
			</div>
			<hr/>
			

		<?php 
			}
		?>
	
	</div>
