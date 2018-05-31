jQuery(document).ready(function ($) {
	var wd1_nlpopup_expires = $("#wd1_nlpopup").data("expires");
	var wd1_nlpopup_delay = $("#wd1_nlpopup").data("delay") * 1000;

	$('#wd1_nlpopup_close').on('click', function (e) {
		$.cookie('wd1_nlpopup', 'closed', {expires: wd1_nlpopup_expires, path: '/'});
		$('#wd1_nlpopup,#wd1_nlpopup_overlay').fadeOut(200);
		e.preventDefault();
	});

	if ($.cookie('wd1_nlpopup') !== 'closed') {
		setTimeout(wd1_open_nlpopup, wd1_nlpopup_delay);
	}

	function wd1_open_nlpopup() {
		var topoffset = $(document).scrollTop(),
						viewportHeight = $(window).height(),
						$popup = $('#wd1_nlpopup');
		var calculatedOffset = (topoffset + (Math.round(viewportHeight / 2))) - (Math.round($popup.outerHeight() / 2));

		if (calculatedOffset <= 40) {
			calculatedOffset = 40;
		}

		$popup.css('top', calculatedOffset);
		$('#wd1_nlpopup,#wd1_nlpopup_overlay').fadeIn(500);
	}

});

jQuery(document).ready(function ($) {
	var myModal_expires = $("#myModal").data("expires");
	var myModal_delay = $("#myModal").data("delay") * 1000;

	$('#myModal_close').on('click', function (e) {
		$.cookie('myModal', 'closed', {expires: myModal_expires, path: '/'});
		$('#myModal').foundation('reveal', 'close');
		e.preventDefault();
	});

	if ($.cookie('myModal') !== 'closed') {
		setTimeout(open_myModal, myModal_delay);
	}

	function open_myModal() {
		$('#myModal').foundation('reveal', 'open');
	}

});