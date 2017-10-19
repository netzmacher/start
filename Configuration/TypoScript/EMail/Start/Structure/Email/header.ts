  // for proper comments only
start {
}
start =
start {
    // for proper comments only
  structure {
  }
    // e-mail
  structure =
  structure {
      // for proper comments only
    e-mail {
    }
      // header
    e-mail =
    e-mail {
      // main (11)
      header =
      header {
          // table, select, stdWrap
        //main < start.structure.header.bottom
        main = COA
        main {
            // header link
          10 = COA
          10 {
						10 = TEXT
						10 {
							value = Click here
							lang {
								de = klick' hier
								en = Click here
							}
							typolink {
								parameter {
									data = page:uid
								}
								#ATagParams = style="color:#2131AD;"
								extTarget = _blank
								target = _blank
							}
							noTrimWrap {
								stdWrap {
									cObject = TEXT
									cObject {
										value = |<p class="webversion">Trouble with this newsletter? | for the web view.</p>|
										lang {
											de = |<p class="webversion">Probleme mit diesem Newsletter? Dann | für die Webansicht.</p>|
											en = |<p class="webversion">Trouble with this newsletter? | for the web view.</p>|
										}
									}
								}
							}
						}
					}
          // table, select, stdWrap
          20 < styles.content.get
          20 {
            select {
              where = colPos=11
            }
            slide = -1
          }
        }
      }
    }
  }
}