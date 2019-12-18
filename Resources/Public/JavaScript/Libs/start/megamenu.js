$('li.has-dropdown.megaMenu a').mouseover(function () {
	var selectedMegaMenuElement = $(this).attr('data-dropdown');
	//$('#' + selectedMegaMenuElement).removeClass('hide').addClass('show');
	$('#' + selectedMegaMenuElement).show(0);
	//var topBarPosition = $('nav.top-bar').position();
	//var topBarWidth = $('nav.top-bar').width();
	//alert("TOP: " + topBarPosition.top + "   Left: " + topBarPosition.left + "   Width: " + topBarWidth);
	return;
});
$('li.has-dropdown.megaMenu a').mouseleave(function () {
	//$('.mega-menu-content').removeClass('show').addClass('hide');
	$('.mega-menu-content').hide(0);
});
$('.mega-menu-content').mouseenter(function () {
	//$(this).removeClass('hide').addClass('show');
	$(this).show(0);
});
$('.mega-menu-content').mouseleave(function () {
	//$('.mega-menu-content').removeClass('show').addClass('hide');
	$('.mega-menu-content').hide(0);
});
// Position the Mega dropdowns
$(window).on("load resize scroll", function (e) {
	var topBarPosition = $('nav.top-bar').position();
	var topBarHeight = $('nav.top-bar').height();
	var topBarMarginLeft = parseInt($('nav.top-bar').css('margin-left'));
	$('.mega-menu-content').css('top', topBarPosition.top + topBarHeight);
	$('.mega-menu-content').css('left', topBarPosition.left + topBarMarginLeft);
	// 191217, dwildt, 2+
	var topBarWidth = $('nav.top-bar').width();
	$('.mega-menu-content').css('width', topBarWidth);
	//$('.mega-menu-content').css('position', 'absolute');
	if ($('.nav-container').hasClass('fixed')) {
		$('.mega-menu-content').css('position', 'fixed');
	} else {
		$('.mega-menu-content').css('position', 'absolute');
	}
	return;
});