import './app.js'
import $ from "jquery";

$(function() {
	flatpickr('.flatpickr', {
		locale: 'ja',
		maxDate: 'today'
	});

	$('.js-addInput').on('click', function() {
		$('.js-inputUrl-item').fadeIn(1000);
		// $(this).fadeOut(1000).queue(function() {
		// 	console.log($(this));
		// 	$(this).prop('disabled', 'true');
		// });
		$(this).prop('disabled', 'true');
	});
});