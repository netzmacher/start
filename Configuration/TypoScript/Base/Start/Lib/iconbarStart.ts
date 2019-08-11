start {
    // for proper comments only
  lib {
  }
    // iconbarStart
  lib =
  lib {
      // iconBar, modals
    iconbarStart = COA
    iconbarStart {
        // iconbar: 10, 20, 30, 40, 50, 60, 70, 80
      10 = COA
      10 {
          // isn't modal, is modal,
        10 = COA
        10 {
          if {
            isTrue = {$start.foundation.iconbarStart.10.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.10.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.10.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.10.pid}
              title       = {$start.foundation.iconbarStart.10.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.10.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.10.modal}
            }
            value = {$start.foundation.iconbarStart.10.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.10.aria-label}" href="#" title="|" data-reveal-id="modal10">
                <i class="{$start.foundation.iconbarStart.10.fi-class}"></i>
              </a>
  )
          }
        }
          // isn't modal, is modal,
        20 = COA
        20 {
          if {
            isTrue = {$start.foundation.iconbarStart.20.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.20.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.20.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.20.pid}
              title       = {$start.foundation.iconbarStart.20.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.20.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.20.modal}
            }
            value = {$start.foundation.iconbarStart.20.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.20.aria-label}" href="#" title="|" data-reveal-id="modal20">
                <i class="{$start.foundation.iconbarStart.20.fi-class}"></i>
              </a>
  )
          }
        }
          // isn't modal, is modal,
        30 = COA
        30 {
          if {
            isTrue = {$start.foundation.iconbarStart.30.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.30.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.30.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.30.pid}
              title       = {$start.foundation.iconbarStart.30.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.30.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.30.modal}
            }
            value = {$start.foundation.iconbarStart.30.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.30.aria-label}" href="#" title="|" data-reveal-id="modal30">
                <i class="{$start.foundation.iconbarStart.30.fi-class}"></i>
              </a>
  )
          }
        }
          // isn't modal, is modal,
        40 = COA
        40 {
          if {
            isTrue = {$start.foundation.iconbarStart.40.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.40.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.40.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.40.pid}
              title       = {$start.foundation.iconbarStart.40.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.40.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.40.modal}
            }
            value = {$start.foundation.iconbarStart.40.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.40.aria-label}" href="#" title="|" data-reveal-id="modal40">
                <i class="{$start.foundation.iconbarStart.40.fi-class}"></i>
              </a>
  )
          }
        }
          // isn't modal, is modal,
        50 = COA
        50 {
          if {
            isTrue = {$start.foundation.iconbarStart.50.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.50.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.50.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.50.pid}
              title       = {$start.foundation.iconbarStart.50.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.50.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.50.modal}
            }
            value = {$start.foundation.iconbarStart.50.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.50.aria-label}" href="#" title="|" data-reveal-id="modal50">
                <i class="{$start.foundation.iconbarStart.50.fi-class}"></i>
              </a>
  )
          }
        }
          // isn't modal, is modal,
        60 = COA
        60 {
          if {
            isTrue = {$start.foundation.iconbarStart.60.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.60.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.60.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.60.pid}
              title       = {$start.foundation.iconbarStart.60.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.60.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.60.modal}
            }
            value = {$start.foundation.iconbarStart.60.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.60.aria-label}" href="#" title="|" data-reveal-id="modal60">
                <i class="{$start.foundation.iconbarStart.60.fi-class}"></i>
              </a>
)
          }
        }
          // isn't modal, is modal,
        70 = COA
        70 {
          if {
            isTrue = {$start.foundation.iconbarStart.70.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.70.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.70.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.70.pid}
              title       = {$start.foundation.iconbarStart.70.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.70.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.70.modal}
            }
            value = {$start.foundation.iconbarStart.70.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.70.aria-label}" href="#" title="|" data-reveal-id="modal70">
                <i class="{$start.foundation.iconbarStart.70.fi-class}"></i>
              </a>
)
          }
        }
          // isn't modal, is modal,
        80 = COA
        80 {
          if {
            isTrue = {$start.foundation.iconbarStart.80.pid}
          }
            // isn't modal
          10 = TEXT
          10 {
            if {
              isFalse = {$start.foundation.iconbarStart.80.modal}
            }
            value = <i class="{$start.foundation.iconbarStart.80.fi-class}"></i>
            typolink {
              parameter   = {$start.foundation.iconbarStart.80.pid}
              title       = {$start.foundation.iconbarStart.80.title}
              ATagParams  = class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.80.aria-label}"
            }
          }
            // is modal
          20 = TEXT
          20 {
            if {
              isTrue = {$start.foundation.iconbarStart.80.modal}
            }
            value = {$start.foundation.iconbarStart.80.title}
            wrap (
              <a class="item" role="button" tabindex="0" aria-label="{$start.foundation.iconbarStart.80.aria-label}" href="#" title="|" data-reveal-id="modal80">
                <i class="{$start.foundation.iconbarStart.80.fi-class}"></i>
              </a>
)
          }
        }
				// #i0253, 190811, ftrojahn, 1-/+
        //wrap = <div class="{$start.foundation.iconbarStart.class}" role="navigation">|</div>
        wrap = <div class="{$start.foundation.iconbarStart.class}" role="menu">|</div>
      }
        // modals: 10, 20, 30, 40, 50, 60, 70, 80
      20 = COA
      20 {
        10 = COA
        10 {
          if {
            isTrue = {$start.foundation.iconbarStart.10.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.10.pid}">{$start.foundation.iconbarStart.10.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.10.pid}
                }
              }
            }
            wrap (
              <div id="modal10" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        20 = COA
        20 {
          if {
            isTrue = {$start.foundation.iconbarStart.20.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.20.pid}">{$start.foundation.iconbarStart.20.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.20.pid}
                }
              }
            }
            wrap (
              <div id="modal20" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        30 = COA
        30 {
          if {
            isTrue = {$start.foundation.iconbarStart.30.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.30.pid}">{$start.foundation.iconbarStart.30.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.30.pid}
                }
              }
            }
            wrap (
              <div id="modal30" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        40 = COA
        40 {
          if {
            isTrue = {$start.foundation.iconbarStart.40.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.40.pid}">{$start.foundation.iconbarStart.40.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.40.pid}
                }
              }
            }
            wrap (
              <div id="modal40" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        50 = COA
        50 {
          if {
            isTrue = {$start.foundation.iconbarStart.50.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.50.pid}">{$start.foundation.iconbarStart.50.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.50.pid}
                }
              }
            }
            wrap (
              <div id="modal50" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        60 = COA
        60 {
          if {
            isTrue = {$start.foundation.iconbarStart.60.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.60.pid}">{$start.foundation.iconbarStart.60.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.60.pid}
                }
              }
            }
            wrap (
              <div id="modal60" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        70 = COA
        70 {
          if {
            isTrue = {$start.foundation.iconbarStart.70.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.70.pid}">{$start.foundation.iconbarStart.70.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.70.pid}
                }
              }
            }
            wrap (
              <div id="modal70" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
        80 = COA
        80 {
          if {
            isTrue = {$start.foundation.iconbarStart.80.modal}
          }
          10 = TEXT
          10 {
            value (
              <h1>
                Missing content
              </h1>
              <p>
                There isn't any proper id for this page.<br />
                Or page doesn't have any content in the default column (colPos: 0).<br />
                The used page id is #<a href="index.php?id={$start.foundation.iconbarStart.80.pid}">{$start.foundation.iconbarStart.80.pid}</a>.<br />
                Please configure [START - FOUNDATION - ICONBAR START].<br />
                Please take the TypoScript Constant Editor.
              </p>
              <p>
                This is a prompt by the TYPO3 extension Start.<br />
                Sorry for the trouble.
              </p>
)
          }
          stdWrap {
            override {
              cObject < styles.content.get
              cObject {
                select {
                  pidInList = {$start.foundation.iconbarStart.80.pid}
                }
              }
            }
            wrap (
              <div id="modal80" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                |
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>
)
          }
        }
      }
    }
  }
}

tt_content.menu.20 {
  startFoundationIconbarStart < start.lib.iconbarStart
}