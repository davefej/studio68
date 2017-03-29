function emailView(){

	var txt = tinyMCE.activeEditor.getContent();
	bootbox.alert(txt)
	
}

function deleteprodbutton(name,type){
	jQuery.ajax({
		type: 'GET',
		url: "common/deleteprod.php?type="+type+"&id="+name,
		success: function(data) {
			alert("torolve "+data);
			location.reload();
		}
	});
}