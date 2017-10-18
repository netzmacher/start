  // for proper comments only
start {
}
  // structure
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
      // content
    e-mail =
    e-mail {
        // main (0)
      content =
      content {
          // CONTENT, stdWrap
        main = COA
        main {
					20 = COA
					20 {
						10 = TEXT
						10 {
							value = Newsletter |
							noTrimWrap = || |
						}
						20 = TEXT
						20 {
							data = date : U
							strftime = %A, %e. %B %Y
						}
						wrap = <p class="newsletter">|</p>
					}
						// table, select, stdWrap
          30 < styles.content.get
          30 {
            select {
              where = colPos=0
            }
            stdWrap {
              required  = 1
              wrap      (
                <table class="row">
                  <tr>
                    <td class="wrapper last">
                      <table class="twelve columns">
                        <tr>
                          <td>
                            |
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
)
            }
          }
        }
      }
    }
  }
}