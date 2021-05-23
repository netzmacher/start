start {

	# cat=start - library - language*//101; type=string; label= Enabled:Uids of enabled languages. For example: 0,1,2
	lib.language.uids = 0,1,2
	# cat=start - library - language*//101; type=string; label= items:For example: EN || DE || FR
	lib.language.items = EN || DE || FR
	# cat=start - library - language*//101; type=string; label= Additional parameter:For example: &L=0 || &L=1 || &L=2
	lib.language.additionalParams = &L=0 || &L=1 || &L=2
	# cat=start - library - language*//101; type=string; label= Tag parameter:For example: hreflang="en-GB" || hreflang="de-DE" || hreflang="fr-FR"
	lib.language.ATagParams = hreflang="en-GB" || hreflang="de-DE" || hreflang="fr-FR"
	# cat=start - library - language*//101; type=string; label= Wrap:HTML wrap. For example: <ul id="language_menu" class="language-menu">|</ul>
	lib.language.wrap = <ul id="language_menu" class="language-menu">|</ul>

}