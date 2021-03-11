$('li.has-dropdown.megaMenu a').mouseover(function () {
	var selectedMegaMenuElement = $(this).attr('data-dropdown');
	updateMegaMenu();
	$('#' + selectedMegaMenuElement).removeClass('hide').addClass('show');
	return;
});
$('li.has-dropdown.megaMenu a').mouseleave(function () {
	$('.mega-menu-content').removeClass('show').addClass('hide');
});
$('li.has-dropdown.megaMenu a').click(function (event) {
	event.preventDefault();
	var a = document.createElement('a');
	a.href = $(this).get(0).href;
	a.target = $(this).get(0).target;
	document.body.appendChild(a);
	updateMegaMenu();
	a.click();
	$('.mega-menu-content').removeClass('show').addClass('hide');
});

$('.mega-menu-content').mouseenter(function () {
	updateMegaMenu();
	$(this).removeClass('hide').addClass('show');
});
$('.mega-menu-content').mouseleave(function () {
	$(this).removeClass('show').addClass('hide');
});
// Position the Mega dropdowns
$(window).on('load resize scroll', function (e) {
	updateMegaMenu();
	return;
});

function updateMegaMenu() {
	var topBarPosition = $('nav.top-bar').position();
	if (topBarPosition === undefined) {
		return;
	}
	var topBarHeight = $('nav.top-bar').height();
	var topBarMarginLeft = parseInt($('nav.top-bar').css('margin-left'));
	$('.mega-menu-content').css('top', topBarPosition.top + topBarHeight);
	//$('.mega-menu-content').css('top', topBarHeight);
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
}
