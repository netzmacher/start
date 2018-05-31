/*!
 * Newsletter Modal v4.0.17
 *
 * (c) Dirk Wildt, http://wildt.at.die-netzmacher.de
 */

jQuery(document).ready(function ($) {
	var newsletterModal_expires = $("#newsletterModal").data("expires");
	var newsletterModal_delay = $("#newsletterModal").data("delay") * 1000;

	$('.newsletterModal_close').on('click', function (e) {
		$.cookie('newsletterModal', 'closed', {expires: newsletterModal_expires, path: '/'});
		$('#newsletterModal').foundation('reveal', 'close');
		// e.preventDefault();
	});

	if ($.cookie('newsletterModal') !== 'closed') {
		setTimeout(open_newsletterModal, newsletterModal_delay);
	}

	function open_newsletterModal() {
		$('#newsletterModal').foundation('reveal', 'open');
	}

});