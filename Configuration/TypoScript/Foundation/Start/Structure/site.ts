start {
  structure {
    site {
				// empty statement for proper comments only
      lineTop {
			}
      lineTop >
				// lineTop > // 20: Content from page $start.pages.siteLineTop (here: {$start.pages.siteLineTop}). 30: social media links, searchform, start: foundation sidenav
      lineTop = COA
      lineTop {
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
					x20 = COA
					x20 {
							// facebook
						10 = TEXT
						10 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_facebook, slide
								}
							}
							value = <i class="fi-social-facebook"></i>
							typolink {
								parameter {
									cObject = COA
									cObject {
										10 = TEXT
										10 {
											data = levelfield:-1, tx_start_social_facebook, slide
											noTrimWrap = || |
										}
										20 = TEXT
										20 {
											value = _blank
											noTrimWrap = || |
										}
										30 = TEXT
										30 {
											value = -
											noTrimWrap = || |
										}
										40 = TEXT
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_facebook
											noTrimWrap = |"|"|
										}
									}
								}
							}
						}
						20 < .10
							// flickr
						20 = TEXT
						20 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_flickr, slide
								}
							}
							value = <i class="fi-social-flickr"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_flickr, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_flickr
										}
									}
								}
							}
						}
						30 < .10
							// github
						30 = TEXT
						30 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_github, slide
								}
							}
							value = <i class="fi-social-github"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_github, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_github
										}
									}
								}
							}
						}
						40 < .10
							// googleplus
						40 = TEXT
						40 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_googleplus, slide
								}
							}
							value = <i class="fi-social-google-plus"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_googleplus, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_googleplus
										}
									}
								}
							}
						}
						50 < .10
							// instagram
						50 = TEXT
						50 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_instagram, slide
								}
							}
							value = <i class="fi-social-instagram"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_instagram, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_instagram
										}
									}
								}
							}
						}
						60 < .10
							// linkedin
						60 = TEXT
						60 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_linkedin, slide
								}
							}
							value = <i class="fi-social-linkedin"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_linkedin, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_linkedin
										}
									}
								}
							}
						}
						70 < .10
							// picasa
						70 = TEXT
						70 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_picasa, slide
								}
							}
							value = <i class="fi-social-picasa"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_picasa, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_picasa
										}
									}
								}
							}
						}
						80 < .10
							// pinterest
						80 = TEXT
						80 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_pinterest, slide
								}
							}
							value = <i class="fi-social-pinterest"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_pinterest, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_pinterest
										}
									}
								}
							}
						}
						90 < .10
							// spotify
						90 = TEXT
						90 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_spotify, slide
								}
							}
							value = <i class="fi-social-spotify"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_spotify, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_spotify
										}
									}
								}
							}
						}
						100 < .10
							// twitter
						100 = TEXT
						100 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_twitter, slide
								}
							}
							value = <i class="fi-social-twitter"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_twitter, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_twitter
										}
									}
								}
							}
						}
						110 < .10
							// vimeo
						110 = TEXT
						110 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_vimeo, slide
								}
							}
							value = <i class="fi-social-vimeo"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_vimeo, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_vimeo
										}
									}
								}
							}
						}
						120 < .10
							// youtube
						120 = TEXT
						120 {
							if {
								isTrue {
									data = levelfield:-1, tx_start_social_youtube, slide
								}
							}
							value = <i class="fi-social-youtube"></i>
							typolink {
								parameter {
									cObject {
										10 {
											data = levelfield:-1, tx_start_social_youtube, slide
										}
										40 {
											data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_youtube
										}
									}
								}
							}
						}
							// RSS feed for news, if.isTrue = $start.pages.rss (here: {$start.pages.rss})
						200 = TEXT
						200 {
								// isTrue = $start.pages.rss (here: {$start.pages.rss})
							if =
							if {
								isTrue = {$start.pages.rss}
							}
							value = <i class="fi-rss"></i>
							typolink {
								parameter {
									cObject = COA
									cObject {
										10 = TEXT
										10 {
											value = {$start.pages.rss}
											noTrimWrap = || |
										}
										20 = TEXT
										20 {
											value = -
											noTrimWrap = || |
										}
										30 = TEXT
										30 {
											value = -
											noTrimWrap = || |
										}
										40 = TEXT
										40 {
											value = News feed
											lang {
												de = Nachrichten-Feed
												en = News feed
											}
											noTrimWrap = |"|"|
										}
									}
								}
							}
						}
						wrap = <div class="icons">|</div>
					}
						// Searchform
					30 = TEXT
					30 {
						if.isTrue = {$start.foundation.sitelinetop.searchform.enabled}
						value (

								<form id="siteLineTopSearch" action="index.php?id={$start.foundation.sitelinetop.searchform.pid}&amp;no_cache=1" method="{$start.foundation.sitelinetop.searchform.method}">
									<input type="hidden" name="no_cache" value="1">
										<input type="text" name="{$start.foundation.sitelinetop.searchform.param}" placeholder="{$start.foundation.sitelinetop.searchform.placeholder}">
											<input type="hidden" name="{$start.foundation.sitelinetop.searchform.action.param}" value="{$start.foundation.sitelinetop.searchform.action.value}">
											<input type="hidden" name="{$start.foundation.sitelinetop.searchform.controller.param}" value="{$start.foundation.sitelinetop.searchform.controller.value}">
										<a href="#" onclick="$(this).closest('form').submit()">
											<i class="fi-magnifying-glass"></i>
										</a>
								</form>

)						
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
						}
					}
				}
        stdWrap {
          required  = 1
          wrap      = <div class="siteLineTop siteLineTopNavigation hide-for-small-only"><div class="row siteLine"><div class="columns">|</div></div></div>
        }
      }			
    }
  }
}