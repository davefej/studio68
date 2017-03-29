
<div class="produpload">
	<form action="common/upload.php" method="POST" enctype="multipart/form-data">
			
			<table class="hirleveltable" align="center">
			
				<tr>
					<td colspan="2">Új <?php echo $upoadtype;?> kép feltöltése
					</td>
				</tr>
				<tr>	
					<td><input type="file" name="img">
		  				<br/>
		  			</td>
		  			<td><input type="text" name="name" placeholder="Név">
		  				<br/>
		  			</td>
				<tr>
					<td colspan="2">
					<input type="hidden" name="type" value=<?php echo '"'.$upoadtype.'"';?>>
					<input type="submit" value="feltölt">
					<span class="imguploadresp"><?php if(isset($_GET["success"]) && $_GET["success"]=="true"){ echo "SIKERES FELTÖLTÉS";}?></span>
					</td>
				</tr>	
			</table>
		</form>
</div>

<div class="prodlist" id="prodlist">
list
</div>