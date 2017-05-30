function openprodlist(type){

	if(usemobileview){
		jQuery.ajax({
			type: 'GET',
			url: "admin/common/listprod_mobile.php?type="+type,
			success: function(data) {
				bootbox.alert(data);
				
			}
		});
	}else{
		jQuery.ajax({
			type: 'GET',
			url: "admin/common/listprods.php?type="+type,
			success: function(data) {
				bootbox.alert(data);				
				$( ".proddesc" ).hover(function() {
					$(this).children(".proddescdetails").show();
					$(this).children(".proddescdotdot").hide();
				},function() {
					$(this).children(".proddescdetails").hide();
					$(this).children(".proddescdotdot").show();
				});
				
				$( ".prodimgbg" ).click(function() {
					
					var desc = $(this).parent().next().html() || "";
					
					bootbox.alert("<div class='imgshow'><img class='imgshowimg' src="+$(this).attr("src")+"><br/></img><span class='imgshowtitle'>"+desc+"</span></div>")
				});
				
			}
		});
	}


}

