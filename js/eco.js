function opengreenEnergy(){

	jQuery.ajax({
		type: 'GET',
		url: "admin/common/listprods.php?type=eco",
		success: function(data) {
			bootbox.alert(data);
		}
	});

}