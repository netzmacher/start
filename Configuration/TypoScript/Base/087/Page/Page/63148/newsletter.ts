page {
		// empty statement for proper comments only
  63148 {
  }
    // start__newsletter_01
  63148 = CASE
  63148 {
    start__newsletter_01 = TEXT
    start__newsletter_01 {
      data = levelfield:-2,backend_layout_next_level,slide
      override {
        field = backend_layout
      }
      noTrimWrap {
        stdWrap {
          cObject = TEXT
          cObject {
            value (
              |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                The current backend layout "|" can't handled. 
                If you like to use it, please include the static template "Start [8] +e-mail". 
                This is a prompt of the extension Start TYPO3 Responsive! (start). 
              </div>|
)
            lang {
              de (
                |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">
                  Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden. 
                  Wenn Du es verwenden möchtest, binde bitte das Static-Template "Start [8] +E-Mail" ein. 
                  Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (start).
                </div>|
)
            }
          }
        }
      }
    }
  }
}