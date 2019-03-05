function emailView(){
	var subject = document.getElementById("subject").value;
	if(!subject){
		alert("Tárgy megadása kötelező!")
		return;
	}
	var txt =  window.HTMLEMAIL;
	if(txt.indexOf("#nev#") == -1){
		alert("Hiányzik a #nev# a szövegből! Ezt kell beírni a megnevezésben a szövegben, automatikusan felülírásra kerül az email törzsében a címzett nevére é sszemélyre szabott lesz az email");
		return;
	}
	
	if(txt.indexOf("#link#") == -1){
		alert("Hiányzik a #link# a szövegből! Ez a személlyre szabott leiratkozási linkre fog cserélődni (ez minden emailben kötelező)")
		return;
	}
	bootbox.alert("<iframe style='width:99%;height:99%;overflow:auto;' id='myframe'></iframe>");
	var iframe = document.getElementById('myframe');
    iframedoc = iframe.contentDocument || iframe.contentWindow.document;
	iframedoc.open();
	iframedoc.close();
    iframedoc.documentElement.innerHTML = txt;    
	window.preview = txt;
}

function sendNewsLetter(){
	var msg =   window.HTMLEMAIL;
	if(msg.indexOf("#nev#") == -1){
		alert("Hiányzik a #nev# a szövegből! Ezt kell beírni a megnevezésben a szövegben, automatikusan felülírásra kerül az email törzsében a címzett nevére é sszemélyre szabott lesz az email");
		return;
	}
	
	if(msg.indexOf("#link#") == -1){
		alert("Hiányzik a #link# a szövegből! Ez a személlyre szabott leiratkozási linkre fog cserélődni (ez minden emailben kötelező)")
		return;
	}
	
	
	var subject = document.getElementById("subject").value;
	if(!subject){
		alert("Tárgy megadása kötelező!")
		return;
	}
	if(!window.preview || msg != window.preview){
		alert("Először ellenőrizze az előlnézetet!")
		return;
	}else{
		window.preview = null;
	}
	if(confirm("Biztosan kiküldi a hírlevelet?!")){
		jQuery.ajax({
			type: 'POST',
			url: 'save_newsletter.php',
			data:JSON.stringify({
				msg:msg,
				subject:subject
			}),
			success: function(data) {
				if(data == "ok"){
					alert("Emailek kiküldése Folyamatban");
				}else{
					alert("Sikertelen hírlevélkiküldés: "+data);
					window.newserror = data;
				}			
			},
			error: function(){
				alert("Hiba, Sikertelen Hírlevél kiküldés");
			}
		});
	}
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
	var price = $("#new_price_"+iter_id).val();
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
			type:type,
			price:price
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

function deleteUser(id){
	
	if(!confirm("Biztosan törli?")){
		return;
	}
	
	var str;
	quest = window.location.href.indexOf("?");
	if(quest > -1){
		str = window.location.href.substring(0,quest);
	}else{
		str = window.location.href;
	}
	window.location.href = str+"?delete="+id;
}

function htmlupload(){
	var x = document.getElementById("hirlevelhtml");
	var txt = document.getElementById("uploadmsg");
	if ('files' in x) {
	    if (x.files.length == 0) {
	        console.log("nincs file");
	        txt.innerHTML = "Feltöltésre vár"
	    } else {
	    	txt.innerHTML = "feltöltés folyamatban!";	        
	        var fileReader = new FileReader();
	        fileReader.onload = function(fileLoadedEvent){
	            var textFromFileLoaded = fileLoadedEvent.target.result;
	            console.log("HTML CONTENT UPLOADED");
	            try{
	            	var str = html_beautify(textFromFileLoaded);
	            	str = str.replace(/<!--[\s\S]*?(?:-->)/g, '');
	            	lines = str.split("\n");
	            	var str2 = "";
	            	for(var i = 0; i < lines.length; i++){
	            		str2 += lines[i].trim() +"\n";
	            	}            	
	            	window.HTMLEMAIL = str2;
		            console.log(textFromFileLoaded);
		            console.log(window.HTMLEMAIL);		            
	            }catch(e){
	            	alert("Sikertelen formázás!");
	            	return;
	            }
	            txt.innerHTML = "feltöltés Kész!"
	            	 document.getElementById("preview").style.display ="block";
	            document.getElementById("send").style.display ="block";
	        };
	        fileReader.readAsText(x.files[0], "UTF-8");
	        
	    }
	} 
	
}


function attuploadfunc(){
	document.getElementById("uploadbtnatt").style.display = "block";	
}



