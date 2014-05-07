jQuery(document).ready(function(){
	jQuery(".img-barrio").hover(function() {
		jQuery(this).attr("src", jQuery(this).attr("src").replace('.png','_o.png'));
			}, function() {
		jQuery(this).attr("src", jQuery(this).attr("src").replace('_o.png','.png'));
	});
});