$ = jQuery;
$( document ).ready(function() {
	$('.news-item, .community-event').removeClass('open');
	$('.news-item, .community-event').click(function (el) {
		$(this).toggleClass('open');
	});
	$('.news-item, .community-event').first().click();
});