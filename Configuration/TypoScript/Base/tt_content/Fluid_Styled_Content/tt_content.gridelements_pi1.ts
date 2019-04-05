tt_content.gridelements_pi1 {
    // <div id="cUid">|</div>
  wrap =
  wrap {  
      // <div id="cUid">|</div>
    stdWrap =
    stdWrap {
        // <div id="cUid">|</div>
      cObject = COA
      cObject {
          // <div id="cUid">
        10 = TEXT
        10 {
          field = uid
          wrap = <div id="c|">
        }
          // |</div>
        20 = TEXT
        20 {
          value = |</div>
        }
      }
    }
  }
		// FILES tt_content.media > background-image:url(###SRC###);	
  30 = COA
  30 {
			// tt_content.media > background-image:url(###SRC###);
    10 = FILES
    10 {
      references {
        table     = tt_content
        uid.field = tt_content.uid
        fieldName = media
      }
				// data = file:current:publicUrl > background-image:url(###SRC###);
      renderObj = COA
      renderObj {
        10 = LOAD_REGISTER
        10 {
					startGridelementsBackground =
					startGridelementsBackground {
						cObject = IMAGE
						cObject {
							file {
								import {
									data = file:current:publicUrl
								}
								width	= {$start.gridelement.background.width}
							}
							begin = 0
							maxItems = 1
								//styles: element = background-image:url(###SRC###);
							layoutKey = styles
							layout {
								styles {
									element = background-image:url(###SRC###);
								}
							}
						}
					}
        }
				20 = TEXT
				20 {
					data = register:startGridelementsBackground
				}
      }
    }
      // <style type="text/css">#cUid {|}</style>
    wrap =
    wrap {  
        // <style type="text/css">#cUid {|}</style>
      stdWrap =
      stdWrap {
          // <style type="text/css">#cUid {|}</style>
        cObject = COA
        cObject {
					if =
					if.isTrue.data = register:startGridelementsBackground
            // <style type="text/css">#cUid {
          10 = TEXT
          10 {
            field = uid
            noTrimWrap = |<style type="text/css">#c| {|
          }
          20 = TEXT
          20 {
            value = {$start.gridelement.background.class}
          }
            // |}</style>
          30 = TEXT
          30 {
            value = |}</style>
          }
        }
      }
    }
  }
}