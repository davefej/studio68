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

function imgchage(type){
	var list = $('.changecb:checkbox:checked');
	if(list.length == 2){
		var name1 = $(list[0]).attr('id');
		var name2 = $(list[1]).attr('id');
		
		jQuery.ajax({
			type: 'GET',
			url: "common/changeprod.php?type="+type+"&id1="+name1+"&id2="+name2,
			success: function(data) {
				alert("cserélve "+data);
				location.reload();
			}
		});
	}else{
		alert("Két képet válasszon ki a checkboxxal jelenleg "+list.length+" van kiválasztva")
	}
}