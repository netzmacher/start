  // for proper comments only
start {
}
start =
start {
    // for proper comments only
  structure {
  }
    // footer
  structure =
  structure {
    // bottom (22), main (21), top (20)
    footer =
    footer {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        30 < styles.content.get
        30 {
          select {
            where = colPos=22
          }
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--footerbottom--><section class="footer footerbottom"><div class="row"><div class="columns"> |</div></div></section><!--/footerbottom-->
          }
        }
      }
      // CONTENT, stdWrap
      library = COA
      library {
        // table, select, stdWrap
        30 < styles.content.get
        30 {
          select {
            pidInList = {$start.pages.footer.library}
            where     = colPos=0
          }
          stdWrap {
            required  = 1
            wrap      = <!--footerlibrary--><section class="footerlibrary"><div class="row"><div class="columns no-pad-left no-pad-right"> |</div></div></section><!--/footerlibrary-->
          }
        }
      }
      // CONTENT, stdWrap
      main = COA
      main {
        30 < styles.content.get
        30 {
          select {
            where = colPos=21
          }
          slide = -1
        }
					// tx_start_addressline, tx_start_email
				31 = COA
				31 {
						// if.isTrue.data = levelfield:-1, tx_start_addressline, slide OR levelfield:-1, tx_start_email, slide
					if =
					if {
							// isTrue.data = levelfield:-1, tx_start_addressline, slide OR levelfield:-1, tx_start_email, slide
						isTrue =
						isTrue {
							data = levelfield:-1, tx_start_addressline, slide
								// ifEmpty.data = levelfield:-1, tx_start_addressline, slide OR levelfield:-1, tx_start_email, slide
							ifEmpty =
							ifEmpty {
								data = levelfield:-1, tx_start_email, slide
							}
						}
					}
					wrap = <div class="align-center"><p class="addressline">|</p></div>
						// tx_start_addressline
					10 = TEXT
					10 {
						data = levelfield:-1, tx_start_addressline, slide
					}
						// Devider
					20 = TEXT
					20 {
							// if is true: levelfield:-1, tx_start_addressline, slide AND levelfield:-1, tx_start_email, slide
						if =
						if {
							value = 11
							equals {
								stdWrap {
									cObject = COA
									cObject {
										10 = TEXT
										10 {
											if =
											if {
												isTrue =
												isTrue {
													data = levelfield:-1, tx_start_addressline, slide
												}
											}
											value = 1
										}
										20 = TEXT
										20 {
											if =
											if {
												isTrue =
												isTrue {
													data = levelfield:-1, tx_start_email, slide
												}
											}
											value = 1
										}
									}
								}
							}
						}
						value = |
						noTrimWrap = | | |
					}
						// tx_start_email
					30 = TEXT
					30 {
						data = levelfield:-1, tx_start_email, slide
						typolink {
							parameter {
								data = levelfield:-1, tx_start_email, slide
							}
						}
					}
				}
      }
      top < start.structure.content.bottom
      // CONTENT, stdWrap
      top = COA
      top {
        30 {
          select {
            where = colPos=20
          }
          stdWrap {
            wrap      = <!--footertop--><section class="footer footertop"><div class="row"><div class="columns"> |</div></div></section><!--/footertop-->
          }
        }
      }
    }
  }
}