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
			}
		});
	}
	

}