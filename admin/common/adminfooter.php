		
	</body>
</html>

<script src="res/jquery1.12.4.js"></script>
<script src="res/bootstrap.js"></script>
<script src="res/bootbox.js"></script>
<script src="res/admin.js"></script>
<?php 
if(isset($upoadtype)){
	
	?>
	<script>
	jQuery.ajax({
		type: 'GET',
		url: "common/listprods.php?type=<?php echo $upoadtype;?>&admin=true",
		success: function(data) {
			$("#prodlist").html(data);
		}
	});
	</script>
	<?php 
}

?>