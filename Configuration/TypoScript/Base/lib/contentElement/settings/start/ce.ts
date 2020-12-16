lib {
	contentElement {
			// empty statement for proper comments only
		settings {
		}
			// EXT:start
		settings =
		settings {
				// empty statement for proper comments only
			start {
			}
				// ce
			start =
			start {
					// empty statement for proper comments only
				ce {
				}
					// headlineimage, jumboteaser, teasercard
				ce =
				ce {
						// empty statement for proper comments only
					headlineimage {
					}
						// css, html
					headlineimage =
					headlineimage {
							// empty statement for proper comments only
						css {
						}
							// plusouterwrap, subtitle, title
						css =
						css {
							plusouterwrap	= {$start.ce.headlineimage.css.plusouterwrap}
							subtitle			= {$start.ce.headlineimage.css.subtitle}
							title					= {$start.ce.headlineimage.css.title}
						}
							// empty statement for proper comments only
						html {
						}
							// tagsubtitle, tagtitle
						html =
						html {
							tagsubtitle		= {$start.ce.headlineimage.html.tagsubtitle}
							tagtitle			= {$start.ce.headlineimage.html.tagtitle}
						}
					}
						// empty statement for proper comments only
					jumboteaser {
					}
						// css
					jumboteaser =
					jumboteaser {
							// empty statement for proper comments only
						css {
						}
							// button, plusouterwrap, subtitle, title
						css =
						css {
							button				= {$start.ce.jumboteaser.css.button}
							plusouterwrap	= {$start.ce.jumboteaser.css.plusouterwrap}
							subtitle			= {$start.ce.jumboteaser.css.subtitle}
							title					= {$start.ce.jumboteaser.css.title}
						}
							// empty statement for proper comments only
						html {
						}
							// tagsubtitle, tagtitle
						html =
						html {
							tagsubtitle		= {$start.ce.jumboteaser.html.tagsubtitle}
							tagtitle			= {$start.ce.jumboteaser.html.tagtitle}
						}
					}
						// empty statement for proper comments only
					teasercard {
					}
						// css
					teasercard =
					teasercard {
							// empty statement for proper comments only
						css {
						}
							// button, panel, panelbutton, panelsubtitle, paneltitle, plusouterwrap, subtitle, title
						css =
						css {
							button				= {$start.ce.teasercard.css.button}
							divbutton			= {$start.ce.teasercard.css.divbutton}
							panel					= {$start.ce.teasercard.css.panel}
							panelbutton		= {$start.ce.teasercard.css.panelbutton}
							panelsubtitle	= {$start.ce.teasercard.css.panelsubtitle}
							paneltitle		= {$start.ce.teasercard.css.paneltitle}
							plusouterwrap	= {$start.ce.teasercard.css.plusouterwrap}
							subtitle			= {$start.ce.teasercard.css.subtitle}
							title					= {$start.ce.teasercard.css.title}
						}
							// empty statement for proper comments only
						html {
						}
							// paneltagsubtitle, paneltagtitle, tagsubtitle, tagtitle
						html =
						html {
							paneltagsubtitle	= {$start.ce.teasercard.html.paneltagsubtitle}
							paneltagtitle			= {$start.ce.teasercard.html.paneltagtitle}
							tagsubtitle				= {$start.ce.teasercard.html.tagsubtitle}
							tagtitle					= {$start.ce.teasercard.html.tagtitle}
						}
					}
				}
			}
		}
	}
}