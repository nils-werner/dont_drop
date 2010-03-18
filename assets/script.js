jQuery(document).ready(function () {
	
	// Find elements with only a single li-child.
	jQuery("ul#nav li ul li:only-child").each(function(index) {
		// Add a class for styling.
		jQuery(this).parents("li").addClass("dontdrop");
		// Move this content up to parent. This also deletes the child.
		jQuery(this).parents("li").html(jQuery(this).html());
	});

});