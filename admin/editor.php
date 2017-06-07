<?php require_once 'common/header.php';?>
<div class="editorcontainer">
	<div class="editor_top">
	<!-- <select>
	<option value="eco">ÖKO</option>
	<option value="sweet">Édesség</option>
	<option value="gift">Ajándék</option>
	<option value="fan">Szurkolói</option>
	</select> -->
	
	<select id="editorselect" onchange="loadProdList()">
	<option value="">kategória</option>
	<option value="eco1">Zöld Energia</option>
	<option value="eco2">Újrahasznosított Termékek</option>
	<option value="eco3">Környezetbarát Ötletek</option>
	<option value="sweet1">Csokoládék</option>
	<option value="sweet2">Nassolnivalók</option>
	<option value="sweet3">Promóciós Édességek</option>
	<option value="sweet4">Cukorkák, nyalókák</option>
	<option value="gift1">Webshop termékek</option>
	<option value="gift2">Egyedi gyártások</option>
	<option value="gift3">Textilek & Munkaruhák</option>
	<option value="gift4">Lakossági Webshop</option>
	<option value="fan1">Szurkolói kellékek</option>
	<option value="fan2">Egyedi gyártások</option>
	<option value="fan3">Textilek </option>
	<option value="fan4">Serlegek, kupák</option>
	</select>
	</div>
</div>

<?php if(isset($_GET['type']) &&$_GET['type'] != ""){?>

<div class="produpload">
	<form action="common/upload.php" method="POST" enctype="multipart/form-data">
			
			<table class="hirleveltable" align="center">
			
				<tr>
					<td colspan="2">Új <?php echo $_GET['type'];?> kép feltöltése
					</td>
				</tr>
				<tr>	
					<td><input type="file" name="img">
		  				<br/>
		  			</td>
		  			<td><input type="text" name="name" placeholder="Név">
		  				<br/>
		  			</td>
		  		</tr>
		  		<tr>	
					
		  			<td colspan="2">
		  				<textarea  name="desc" placeholder="Leírás" ></textarea>		  			
		  			</td>
		  		</tr>
				<tr>
					<td colspan="2">
					<input type="hidden" name="type" value=<?php echo '"'.$_GET['type'].'"';?>>
					<input type="submit" value="feltölt">
					<span class="imguploadresp"><?php if(isset($_GET["success"]) && $_GET["success"]=="true"){ echo "SIKERES FELTÖLTÉS";}?></span>
					</td>
				</tr>	
			</table>
		</form>
</div>

<div class="prodlist" id="prodlist">

</div>

<?php }
require_once 'common/footer.php';

if(isset($_GET['type'])){
	if($_GET['type'] == "blog"){
		header("Location: blog.php");
		exit;
	}
	?>
	<script>
	var mychange  = true;
	$("#editorselect").val("<?php echo $_GET['type'];?>").change();
	var mychange  = false;
	</script>
	<script>
	jQuery.ajax({
		type: 'GET',
		url: "common/listprods.php?type=<?php echo $_GET['type'];?>&admin=true",
		success: function(data) {
			$("#prodlist").html(data);
		}
	});
	</script>
	<?php 
}

?>