page {
		// empty statement for proper comments only
  63148 {
  }
    // start FLUIDTEMPLATES
  63148 = CASE
  63148 {
    key {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
    }
    default = TEXT
    default {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
      noTrimWrap {
        stdWrap {
          cObject = TEXT
          cObject {
            value (
              <div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                The current backend layout "|" can't handled.<br />
                Please empty the TYPO3-frontend-cache.<br />
								If the current backend layout is part of a different extension, may be a corresponding TypoScript template is missing.<br />
                If you can't solve the bug, please choose a proper backend layout. <br />
                This is a prompt of the extension Start TYPO3 Responsive! (EXT:start). 
              </div>
)
            lang {
              de (
                <div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                  Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden.<br />
                  Bitte leere den TYPO-Frontend-Cache.<br />
                  Ist das aktuelle Backend Layout eines einer anderen Erweiterung, fehlt eventuell ein entsprechendes TypoScript-Template.<br />
                  Wenn Du das Problem nicht beheben kann, w&auml;hle bitte ein g&uuml;ltiges Backend-Layout.<br />
                  Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (EXT:start). 
                </div>
)
              en (
								<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
									The current backend layout "|" can't handled.<br />
									Please empty the TYPO3-frontend-cache.<br />
									If the current backend layout is part of a different extension, may be a corresponding TypoScript template is missing.<br />
									If you can't solve the bug, please choose a proper backend layout. <br />
									This is a prompt of the extension Start TYPO3 Responsive! (EXT:start). 
								</div>
)
            }
          }
        }
      }
    }
  }
}