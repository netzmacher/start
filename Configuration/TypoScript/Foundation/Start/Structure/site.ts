start {
  structure {
    site {
				// empty statement for proper comments only
      lineTop {
			}
      lineTop >
				// 20: Content from page $start.pages.siteLineTop (here: {$start.pages.siteLineTop}). 30: social media links, searchform, start: foundation sidenav
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
					// social media links, searchform, start: foundation sidenav
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
									// if.isTrue.data = levelfield:-1, tx_start_social_googleplus, slide
								20 = TEXT
								20 {
									if.isTrue.data = levelfield:-1, tx_start_social_googleplus, slide
									value = 1
								}
									// if.isTrue.data = levelfield:-1, tx_start_social_instagram, slide
								30 = TEXT
								30 {
									if.isTrue.data = levelfield:-1, tx_start_social_instagram, slide
									value = 1
								}
									// if.isTrue.data = levelfield:-1, tx_start_social_twitter, slide
								40 = TEXT
								40 {
									if.isTrue.data = levelfield:-1, tx_start_social_twitter, slide
									value = 1
								}
									// if.isTrue.data = levelfield:-1, tx_start_social_vimeo, slide
								50 = TEXT
								50 {
									if.isTrue.data = levelfield:-1, tx_start_social_vimeo, slide
									value = 1
								}
									// if.isTrue.data = levelfield:-1, tx_start_social_youtube, slide
								60 = TEXT
								60 {
									if.isTrue.data = levelfield:-1, tx_start_social_youtube, slide
									value = 1
								}
									// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
								70 = TEXT
								70 {
									if.isTrue = {$start.pages.siteLineTop}
									value = 1
								}
							}
						}
					}
						// social media links
					20 = COA
					20 {
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
						20 {
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
						30 < .10
						30 {
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
						40 < .10
						40 {
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
						50 < .10
						50 {
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
						60 < .10
						60 {
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