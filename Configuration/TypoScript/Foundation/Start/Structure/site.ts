start {
  structure {
    site {
				// empty statement for proper comments only
      lineTop {
			}
      lineTop >
        // 20 >, 20.30: start.lib.sidenav
      lineTop = COA
      lineTop {
				20 = COA
				20 {
						// if.isTrue = $start.pages.siteLineTop (here: {$start.pages.siteLineTop})
					if =
					if {
						isTrue {
							cObject = COA
							cObject {
								10 = TEXT
								10 {
									if.isTrue.data = levelfield:-1, tx_start_social_facebook, slide
									value = 1
								}
								20 < .10
								20.if.isTrue.data = levelfield:-1, tx_start_social_googleplus, slide
								30 < .10
								30.if.isTrue.data = levelfield:-1, tx_start_social_instagram, slide
								40 < .10
								40.if.isTrue.data = levelfield:-1, tx_start_social_twitter, slide
								50 < .10
								50.if.isTrue.data = levelfield:-1, tx_start_social_vimeo, slide
								60 < .10
								60.if.isTrue.data = levelfield:-1, tx_start_social_youtube, slide
								70 = TEXT
								70 {
									if.isTrue = {$start.pages.siteLineTop}
									value = 1
								}
							}
						}
					}
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
						// startgreen: foundation sidenav
					30 = COA
					30 {
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
          wrap      = <div class="row"><div class="columns"><div class="siteLine siteLineTop startWoMarginLeftRight">|</div></div></div>
        }
      }
    }
  }
}