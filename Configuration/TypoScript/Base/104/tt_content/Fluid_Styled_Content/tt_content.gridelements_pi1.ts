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
          // <div id="cUid" class="..."> internal: #i0265
        10 = COA
        10 {
						//  <div id="c|"
					10 = TEXT
					10 {
						field = uid
						noTrimWrap = |<div id="c|" |
					}
						// class="..."
					20 = COA
					20 {
							// fields: layout, frame_class, space_before_class, space_after_class
						20 = COA
						20 {
								// isTrue.field = frame_class // space_before_class // space_after_class // layout
							if =
							if {
									// field = frame_class // space_before_class // space_after_class // layout
								isTrue = 
								isTrue {
									field = frame_class // space_before_class // space_after_class // layout
								}
							}
								// layout
							10 = TEXT
							10 {
								field = layout
								noTrimWrap = | frame-layout-||>
								required = 1
							}
								// frame_class
							20 = TEXT
							20 {
								field = frame_class
								noTrimWrap = | frame-||>
								required = 1
							}
								// space_before_class
							30 = TEXT
							30 {
								field = space_before_class
								noTrimWrap = | frame-space-before-||>
								required = 1
							}
								// space_after_class
							40 = TEXT
							40 {
								field = space_after_class
								noTrimWrap = | frame-space-after-||>
								required = 1
							}
							wrap = class="|"
						}
					}
						// >
					30 = TEXT
					30 {
						value = >
					}
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