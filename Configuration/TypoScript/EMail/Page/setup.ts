page >
  // empty statement for a proper comment only
page {
}
  // OVERRIDEN by: Start [8] +e-mail
page = PAGE
page {
  cssInline {
      // typo3.css, newsletter_01.css, start.css
    10 = COA
    10 {
        // typo3.css
      10 = FILE
      10 {
        file = typo3conf/ext/start/Resources/Public/Css/EMail/typo3.css
      }
        // newsletter_01.css
      20 = FILE
      20 {
        //file = typo3conf/ext/start/Resources/Public/Css/EMail/newsletter_01.css
        file = typo3conf/ext/start/Resources/Public/Css/EMail/foundation-emails.css
      }
        // start.css
      30 = FILE
      30 {
        file = typo3conf/ext/start/Resources/Public/Css/EMail/start.css
      }
    }
  }
  includeCSS >
	meta {
    viewport = width=device-width
  }
	typeNum = 0

  63148 >
    // Empty statement for a proper comment only
  63148 {
  }
    // start FLUIDTEMPLATES - overriden by Start [8] +e-mail
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
            value = |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">The current backend layout "|" can't handled. You have included the static template "Start [8] +e-mail". The backend layout "start__newsletter_01" runs proper only. If you like to use another backend layout, please remove the static template "Start [8] +e-mail". This is a prompt of the extension Start TYPO3 Responsive! (start). </div>|
            lang {
              de = |<div style="background:white;border:red solid 1em;color:red;font-weight:bold;margin:2em;padding:1em;text-align:center;">Das aktuelle Backend-Layout "|" kann nicht verarbeitet werden. Du hast das Static-Template "Start [8] +E-Mail" eingebunden. Damit steht nur das Backend-Layout "start__newsletter_01" zur Verfügung. Wenn Du ein anderes Backend-Layout verwenden möchtest, entferne das Static-Template "Start [8] +E-Mail". Das ist eine Meldung der Erweiterung Start TYPO3 Responsive! (start). </div>|
            }
          }
        }
      }
    }
      // One column: content
    start__newsletter_01 = FLUIDTEMPLATE
    start__newsletter_01 {
				// TYPO3 6.2 compatibillity. Will be ignored from TYPO3 7.6 
      file = {$start.fluid.path.templates}newsletter_62.html
				// Will be respected from TYPO3 7.6 and takes precedence over file
			templateName = Newsletter
      templateRootPaths {
        10 = {$start.fluid.path.templates}
      }
      layoutRootPaths {
        10 = {$start.fluid.path.layouts}
      }
      partialRootPaths {
        10 = {$start.fluid.path.partials}
      }
    }
  }
}