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
      // bottom (3), bottomLeft (4), bottomMain (6), bottomRight (5), left (1), main (0), right (2), topLeft (1), topMain (3), topRight (2)
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
      bottomMain < start.structure.content.bottomLeft
      bottomMain {
        20 {
          select {
            where = colPos=6
          }
          stdWrap {
            wrap      = <!--bottomMain-->|<!--TYPO3SEARCH_end--><!--/bottomMain-->
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
        // 20 = COA, 110 = TEXT
      left = COA
      left {
					// 10 = LOAD_REGISTER, 20 = TEXT
				20 = COA
				20 {
						// startContentLeft = CONTENT
					10 = LOAD_REGISTER
					10 {
						startContentLeft =
						startContentLeft {
							cObject < styles.content.get
							cObject {
								select {
									where = colPos=1
								}
								slide = -1
							}	
						}
					}
						// if.isTrue.data = register:startContentLeft wrap
					20 = TEXT
					20 {
						if.isTrue.data = register:startContentLeft
						data = register:startContentLeft
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
					// if.isFalse.data = register:startContentLeft div
				xx110 = TEXT
				xx110 {
					if.isFalse.data = register:startContentLeft
					//data = register:startContentLeft
					value = <div class="startVisHiddenHeight1"></div>
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
								value = <!--TYPO3SEARCH_begin-->|<!--TYPO3SEARCH_end-->
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
					// 10 = LOAD_REGISTER, 20 = TEXT
				20 = COA
				20 {
						// startContentRight = CONTENT
					10 = LOAD_REGISTER
					10 {
						startContentRight =
						startContentRight {
							cObject < styles.content.get
							cObject {
								select {
									where = colPos=2
								}
								slide = -1
							}	
						}
					}
						// if.isTrue.data = register:startContentRight wrap
					20 = TEXT
					20 {
						if.isTrue.data = register:startContentRight
						data = register:startContentRight
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
					// if.isFalse.data = register:startContentRight div
				xx110 = TEXT
				xx110 {
					if.isFalse.data = register:startContentRight
					//data = register:startContentLeft
					value = <div class="startVisHiddenHeight1"></div>
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
      topMain < start.structure.content.topLeft
      topMain {
        20 {
          select {
            where = colPos=3
          }
          stdWrap {
            wrap      = <!--topMain-->|<!--TYPO3SEARCH_end--><!--/topMain-->
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