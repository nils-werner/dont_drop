jQuery(document).ready(function () {

	jQuery("ul#nav li ul li:only-child").each(function(index) {
		jQuery(this).parents("li").addClass("singlenavgroup");
		jQuery(this).parents("li").html(jQuery(this).html());
	});

});