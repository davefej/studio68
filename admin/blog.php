
<?php require_once 'common/header.php';?>
	
<h1 align="center">Blog</h1>

<form action="common/upload.php" method="POST" id="blogform" enctype="multipart/form-data">
			
			<table class="blogtable" align="center">
			
				<tr>
					<td colspan="2">Új blogbejegyzés kép feltöltése
					</td>
				</tr>
				<tr>	
					<td><input type="file" name="img" id="imgupload">
		  				<br/>
		  			</td>
		  			<td><input type="text" name="name" placeholder="Név" id="name">
		  				<br/>
		  			</td>
		  		</tr>
		  		<tr>	
					
		  			<td colspan="2">
		  				<textarea  class="blogtexytarea" name="desc" placeholder="Leírás" id="desc"></textarea>		  			
		  			</td>
		  		</tr>
				<tr>
					<td colspan="2">
					<input type="hidden" name="type" value="blog">
					<input type="button" onclick="upload()" value="feltölt">
					<span class="imguploadresp"><?php if(isset($_GET["success"]) && $_GET["success"]=="true"){ echo "SIKERES FELTÖLTÉS";}?></span>
					</td>
				</tr>	
			</table>
		</form>

<div class="adminblogcontainter" id="adminblogcontainter">
	
</div>

	
<?php require_once 'common/footer.php';?>

<script>
	var mychange  = true;
	$("#editorselect").val("<?php echo $_GET['type'];?>").change();
	var mychange  = false;
	</script>
	<script>
	jQuery.ajax({
		type: 'GET',
		url: "common/renderblog.php?type=blog&admin=true",
		success: function(data) {
			$("#adminblogcontainter").html(data);
		}
	});
	</script>