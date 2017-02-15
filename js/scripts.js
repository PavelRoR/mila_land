$(".l_box").click(function() {
    $(".layout").slideDown(900)
});
$("#close").click(function() {
    $(".layout").slideUp(900)
});

	$(function () {
		$('#slides').slides({
			preload: true,
			preloadImage: 'img/loading.gif',
			play: 5000,
			pause: 2500,
			hoverPause: true,
			animationStart: function () {
				$('.caption').animate({
					bottom: -40
				}, 100);
			},
			animationComplete: function (current) {
				$('.caption').animate({
					bottom: 0
				}, 200);
				if (window.console && console.log) {
				// example return of current slide number
				console.log(current);
			};
		}
	});
	});