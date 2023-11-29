/*drag the button*/
$(document).ready(function () {
	$('.btn').draggable();
	$('.modal').draggable();
	$('#append_bucket').draggable();
	$('a').draggable();

});


new WOW().init();

function dynamic_append(page_name) {
	$("#append_bucket").load('asset/views/' + page_name + '.html');
	var all_data = $('a');
	$(all_data).each(function () {
		$(this).removeClass('active');
	});
	$('a#' + page_name).addClass('active');
	if (page_name == "photo_gallery") {
		// $("#block").css({"font-size": "200%"})
	}

}
