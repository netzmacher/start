start {
    // for proper comments only
  lib {
  }
    // socialmedia
  lib =
  lib {				
			// social media links: facebook ... RSS
		socialmedia = COA
		socialmedia {
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
			20 = COA
			20 {
					// cloud
				10 = TEXT
				10 {
					if {
						isTrue {
							data = levelfield:-1, tx_start_social_cloud, slide
						}
					}
					value = <i class="fi-cloud"></i>
					typolink {
						parameter {
							cObject = COA
							cObject {
								10 = TEXT
								10 {
									data = levelfield:-1, tx_start_social_cloud, slide
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
									data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_cloud
									noTrimWrap = |"|"|
								}
							}
						}
					}
				}
				20 < .10
					// facebook
				20 = TEXT
				20 {
					if {
						isTrue {
							data = levelfield:-1, tx_start_social_facebook, slide
						}
					}
					value = <i class="fi-social-facebook"></i>
					typolink {
						parameter {
							cObject {
								10 {
    							data = levelfield:-1, tx_start_social_facebook, slide
								}
								40 {
									data = LLL:EXT:start/Configuration/TCA/Overrides/pages.xlf:tx_start_social_facebook
								}
							}
						}
					}
				}
				30 < .10
					// flickr
				30 = TEXT
				30 {
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
				40 < .10
					// github
				40 = TEXT
				40 {
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
				60 < .10
					// instagram
				60 = TEXT
				60 {
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
				70 < .10
					// linkedin
				70 = TEXT
				70 {
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
				80 < .10
					// picasa
				80 = TEXT
				80 {
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
				90 < .10
					// pinterest
				90 = TEXT
				90 {
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
				100 < .10
					// spotify
				100 = TEXT
				100 {
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
				110 < .10
					// twitter
				110 = TEXT
				110 {
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
				120 < .10
					// vimeo
				120 = TEXT
				120 {
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
				130 < .10
					// youtube
				130 = TEXT
				130 {
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
				wrap = <div class="icons socialmedia">|</div>
			}
		}
	}			
}