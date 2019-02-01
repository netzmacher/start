  // for proper comments only
start {
}
  // structure
start =
start {
    // for proper comments only
  structure {
  }
    // content
  structure =
  structure {
      // bottomLeft (4), bottomCenter (6), bottomRight (5), left (1), main (0), right (2), topLeft (1), topCenter (3), topRight (2)
    content =
    content {
        // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=3
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--contentbottom--><section class="content contentbottom"><div class="row"><div class="columns"> |</div></div></section><!--/contentbottom-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomLeft = COA
      bottomLeft {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=4
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--bottomLeft-->|<!--TYPO3SEARCH_end--><!--/bottomLeft-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomCenter < start.structure.content.bottomLeft
      bottomCenter {
        20 {
          select {
            where = colPos=6
          }
          stdWrap {
            wrap      = <!--bottomCenter-->|<!--TYPO3SEARCH_end--><!--/bottomCenter-->
          }
        }
      }
        // CONTENT, stdWrap
      bottomRight < start.structure.content.bottomLeft
      bottomRight {
        20 {
          select {
            where = colPos=5
          }
          stdWrap {
            wrap      = <!--bottomRight-->|<!--TYPO3SEARCH_end--><!--/bottomRight-->
          }
        }
      }
        // CONTENT, stdWrap
      left = COA
      left {
        20 < styles.content.get
        20 {
          select {
            where = colPos=1
          }
          slide = -1
					wrap {
						stdWrap {
							cObject = COA
							cObject {
								10 = TEXT
								10 {
									if.isTrue = {$start.structure.content.left.class}
									value = <div class="{$start.structure.content.left.class}"><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--></div>
								}
								20 = TEXT
								20 {
									if.isFalse = {$start.structure.content.left.class}
									value = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
								}
							}
						}
					}	
        }
      }
        // CONTENT, stdWrap
      main = COA
      main {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=0
          }
					wrap {
						stdWrap {
							cObject = TEXT
							cObject {
								value = <article><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--></article>
							}
						}
					}	
        }
				90 = COA
				90 {
					if < start.rules.newsletterModal 
						// True, if page newslettersubscription is set (here: {$start.pages.newslettersubscription}) AND if newsletter popup (modal) is enabled (here: {$start.foundation.newsletter.modalEnabled})
					if = 
						// wrap modal: div ...
					wrap (

						<div id="newsletterModal" class="reveal-modal" data-expires="30" data-delay="10" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
							|
							<a class="close-reveal-modal newsletterModal_close" aria-label="Close">&#215;</a>
						</div>

)
						// row columns: {$start.foundation.newsletter.modalHeaderTag}
					10 = COA
					10 {
						wrap = <div class="row"><div class="columns">|</div></div>
							// {$start.foundation.newsletter.modalHeaderTag}
						20 = TEXT
						20 {
							wrap = <{$start.foundation.newsletter.modalHeaderTag}>|</{$start.foundation.newsletter.modalHeaderTag}>
							value = Don't miss neither events nor latest news?
							lang {
								de = Keine Neuigkeit und Veranstaltung versäumen?
								en = Don't miss neither events nor latest news?
							}
						}
					}
						// row columns: buttons
					30 = COA
					30 {
						wrap (

							<div class="row">
								|
							</div>

)
							// columns medium-6: newsletter subcription
						10 = COA
						10 {
							wrap (

									<div class="columns medium-6">
										|
									</div>

)
							20 = TEXT
							20 {
								value = Subscribe to our newsletter :)
								lang {
									de = Newsletter abonnieren :)
									en = Subscribe to our newsletter :)
								}
								typolink {
									ATagParams	= class="button expand newsletterModal_close"
									parameter		= {$start.pages.newslettersubscription}
								}
							}
						}
							// columns medium-6: no thanks
						20 = TEXT
						20 {
							wrap (

								<div class="columns medium-6">
									<span class="button expand secondary newsletterModal_close">|</span>
								</div>

)
							value = No thanks, I'm not interested :(
							lang {
								de = Nein danke, ich bin nicht interessiert :(
								en = No thanks, I'm not interested :(
							}
						}
					}
						// row columns: p, if.isTrue demo enabled (here: {$start.demo.enabled})
					50 = COA
					50 {
						wrap = <div class="row"><div class="columns">|</div></div>
							// p, if.isTrue demo enabled (here: {$start.demo.enabled})
						10 = TEXT
						10 {
							if =
							if {
								isTrue = {$start.demo.enabled}
							}
							wrap = <p style="background: orange;color: white;font-weight: bold;margin:2em 0 0 0;padding: 1em;text-align: center;">|</p>
							value = This is a demo only: no newsleter won't send.
							lang {
								de = Dies ist eine Demo: Es werden kein Newsletter versendet.
								en = This is a demo only: no newsleter won't send.
							}
						}
					}
				}
      }
        // CONTENT, stdWrap
      right = COA
      right {
        20 < styles.content.get
        20 {
          select {
            where = colPos=2
          }
          slide = -1
					wrap {
						stdWrap {
							cObject = COA
							cObject {
								10 = TEXT
								10 {
									if.isTrue = {$start.structure.content.right.class}
									value = <div class="{$start.structure.content.right.class}"><!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end--></div>
								}
								20 = TEXT
								20 {
									if.isFalse = {$start.structure.content.right.class}
									value = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
								}
							}
						}
					}	
        }
      }
        // CONTENT, stdWrap
      topLeft = COA
      topLeft {
        // table, select, stdWrap
        20 < styles.content.get
        20 {
          select {
            where = colPos=1
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--topLeft-->|<!--TYPO3SEARCH_end--><!--/topLeft-->
          }
        }
      }
        // CONTENT, stdWrap
      topCenter < start.structure.content.topLeft
      topCenter {
        20 {
          select {
            where = colPos=3
          }
          stdWrap {
            wrap      = <!--topCenter-->|<!--TYPO3SEARCH_end--><!--/topCenter-->
          }
        }
      }
        // CONTENT, stdWrap
      topRight < start.structure.content.topLeft
      topRight {
        20 {
          select {
            where = colPos=2
          }
          stdWrap {
            wrap      = <!--topRight-->|<!--TYPO3SEARCH_end--><!--/topRight-->
          }
        }
      }
    }
  }
}