<?php require_once 'common/header.php';?>
<?php require_once '../common_helper.php';?>

<?php 
$news = get_ujdonsag();
$new_header_text = "";
$new_header_link = "";

if($news != null){	
	$new_header_text = $news["new_header_text"];
	$new_header_link = $news["new_header_link"];	
}
?>

<div align="center">
	<h1>Tartalom szerkesztő</h1>
	
	<h2>Fejléc - újdonság</h2>
	<div class="container">
	 	<table>
	 		<tr>
	 			<td>Újdonság Szöveg</td>
	 			<td><input type="text" id="new_header_text" name="new_header_text" value="<?php echo $new_header_text?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Újdonság link</td>
	 			<td><input type="text" id="new_header_link" name="new_header_link" value="<?php echo $new_header_link?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Mentés</td>
	 			<td><input type="button" onclick="save_new_header()" id="new_header_link" value="Ment"></td>
	 		</tr>
	 	
	 	</table>
	</div>

</div>



<?php require_once 'common/footer.php';?>

<script>

function save_new_header(){
	var body = {};
	body.type = "save_new_header";
	body.data = {};
	body.data.new_header_text = $("#new_header_text").val();
	body.data.new_header_link = $("#new_header_link").val();
	jQuery.ajax({
		type: 'POST',
		url: 'save_content.php',
		data:JSON.stringify(body),
		contentType: "application/json",
		success: function(resp) {
			if(resp == "ok"){
				alert("Sikeres módosítás");
			}else{
				alert("Hiba, Sikertelen mentés");
			}			
		},
		error: function(){
			alert("Hiba, Sikertelen mentés");
		}
	});
	
}

</script>
