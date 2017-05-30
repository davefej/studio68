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
function showedit(name){
	$("#prod_"+name).show();
	
}
function editprodbutton(iter_id){
	var name = $("#new_name_"+iter_id).val();
	var desc = $("#new_desc_"+iter_id).val();
	var id = $("#id_"+iter_id).val();
	var type = $("#type_"+iter_id).val();
	jQuery.ajax({
		type: 'POST',
		url: "common/editprod.php",
		cache:false,
		data:JSON.stringify({
			name:name,
			desc:desc,
			id:id,
			type:type
		}),
		success: function(data) {
			alert("szerkesztve "+data);
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

function loadProdList(){
	quest = window.location.href.indexOf("?");
	if(quest > -1){
		str = window.location.href.substring(0,quest);
	}else{
		str = window.location.href;
	}	
	type = $("#editorselect").val()
	if(type == ""){
		window.location.href = str;
		return
	}else if( window.location.toString().indexOf(type) > -1){
		return;
	}

	window.location.href = str+"?type="+$("#editorselect").val();
}


function upload(){
	var str = "<div class='blogtestcontainer'><h1>Megfelel így? </h1>Ha kilóg a szöveg akkor két cikkben kell feltölteni! Ha jó kattints az OK gombra<div  class='blogtest'>"+
	"<img class='blogtestimg' src='imgsrc'><h1>title</h1>description</img></div></div>";
	
	str = str.replace("imgsrc",imgsrc)
	str = str.replace("title",$("#name").val())
	str = str.replace("description",$("#desc").val())
	bootbox.confirm(str,function(result){ 
		
		if(result == true){
			$("#blogform").submit();
		}
		
	});
	$(".modal-body").css("height", "650px");
	$(".modal-content").css("height", "700px");
	
	$(".modal-footer").show();
	
	
	
}

var imgsrc = "Nincs feltöltve";

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
        	imgsrc = e.target.result;
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgupload").change(function(){
    readURL(this);
});