start {
    // for proper comments only
  lib {
  }
    // sitelineTop
  lib =
  lib {				
			// social media links: facebook ... RSS
		sitelineTop = COA
		sitelineTop {
				// Content from page $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
			20 = COA
			20 {
					// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
				if =
				if {
					isTrue = {$start.pages.siteLineTop}
				}
				20 < styles.content.get
				20 {
					select {
						pidInList = {$start.pages.siteLineTop}
						//where     = colPos=21
					}
						// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
					stdWrap =
					stdWrap {
							// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
						if =
						if {
							isTrue = {$start.pages.siteLineTop}
						}
					}
				}
				stdWrap {
					required  = 1
					wrap      = <div class="siteLineTop siteLineTopContent hide-for-small-only"><div class="row siteLine"><div class="columns">|</div></div></div>
				}
			}
				// social media links, searchform, start: foundation sidenav, pages.rss
			30 = COA
			30 {
					// if.isTrue.cObject: an icon or $start.pages.siteLineTop is set (here: {$start.pages.siteLineTop})
				if =
				if {
					isTrue {
						cObject = COA
						cObject {
								// if.isTrue.data = levelfield:-1, tx_start_social_facebook, slide
							10 = TEXT
							10 {
								if.isTrue.data = levelfield:-1, tx_start_social_facebook, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_flickr, slide
							20 = TEXT
							20 {
								if.isTrue.data = levelfield:-1, tx_start_social_flickr, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_github, slide
							30 = TEXT
							30 {
								if.isTrue.data = levelfield:-1, tx_start_social_github, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_googleplus, slide
							40 = TEXT
							40 {
								if.isTrue.data = levelfield:-1, tx_start_social_googleplus, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_instagram, slide
							50 = TEXT
							50 {
								if.isTrue.data = levelfield:-1, tx_start_social_instagram, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_linkedin, slide
							60 = TEXT
							60 {
								if.isTrue.data = levelfield:-1, tx_start_social_linkedin, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_picasa, slide
							70 = TEXT
							70 {
								if.isTrue.data = levelfield:-1, tx_start_social_picasa, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_pinterest, slide
							80 = TEXT
							80 {
								if.isTrue.data = levelfield:-1, tx_start_social_pinterest, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_spotify, slide
							90 = TEXT
							90 {
								if.isTrue.data = levelfield:-1, tx_start_social_spotify, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_twitter, slide
							100 = TEXT
							100 {
								if.isTrue.data = levelfield:-1, tx_start_social_twitter, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_vimeo, slide
							110 = TEXT
							110 {
								if.isTrue.data = levelfield:-1, tx_start_social_vimeo, slide
								value = 1
							}
								// if.isTrue.data = levelfield:-1, tx_start_social_youtube, slide
							120 = TEXT
							120 {
								if.isTrue.data = levelfield:-1, tx_start_social_youtube, slide
								value = 1
							}
								// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
							130 = TEXT
							130 {
								if.isTrue = {$start.pages.siteLineTop}
								value = 1
							}
								// if.isTrue = $start.pages.rss (here: {$start.pages.rss})
							140 = TEXT
							140 {
								if.isTrue = {$start.pages.rss}
								value = 1
							}
						}
					}
				}
					// social media links
				20 < start.lib.socialmedia
					// Searchform
				30 = FLUIDTEMPLATE
				30 {
					templateName = Searchbox
						// 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Navigation/
					templateRootPaths =
					templateRootPaths {
						10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Templates/Navigation/
					}
						// 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Navigation/
					layoutRootPaths =
					layoutRootPaths {
						10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Layouts/Navigation/
					}
						// 10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Navigation/
					partialRootPaths =
					partialRootPaths {
						10 = EXT:start/Resources/Private/Templates/foundation-5.5.3/Partials/Navigation/
					}
						// action, controller, form, input
					settings =
					settings {
							// param, value
						action =
						action {
							param				= {$start.foundation.sitelinetop.searchform.action.param}
							value				= {$start.foundation.sitelinetop.searchform.action.value}
						}
							// param, value
						controller =
						controller {
							param				= {$start.foundation.sitelinetop.searchform.controller.param}
							value				= {$start.foundation.sitelinetop.searchform.controller.value}
						}
							// name, placeholder
						form =
						form {
							method			= {$start.foundation.sitelinetop.searchform.method}
							pid					= {$start.foundation.sitelinetop.searchform.pid}
						}
							// name, placeholder
						input =
						input {
							name				= {$start.foundation.sitelinetop.searchform.param}
							placeholder = {$start.foundation.sitelinetop.searchform.placeholder}
						}
					}
					// currentPid, isEnabled
					variables =
					variables {
							// data = page:uid
						currentPid = TEXT
						currentPid {
							data = page:uid
						}
							// data = page:uid
						isEnabled = TEXT
						isEnabled {
							value = {$start.foundation.sitelinetop.searchform.enabled}
						}
					}
				}
					// start: foundation sidenav
				40 = COA
				40 {
					if.isTrue = {$start.pages.siteLineTop}
					20 < start.lib.sidenav
					20 {
						special >
						special = directory
						special.value = {$start.pages.siteLineTop}
						stdWrap {
							outerWrap = <ul class="side-nav vertical right" role="menu">|</ul>
						}
					}
				}
			}
			stdWrap {
				required  = 1
				wrap      = <div class="{$start.foundation.sitelinetop.outerwrapclass}"><div class="row siteLine"><div class="columns">|</div></div></div>
			}
		}			
	}
}	