start {
    // for proper comments only
  gridelements {
  }
    // startCol02
  gridelements =
  gridelements {
    startCol02 < lib.gridelements.defaultGridSetup
      // for proper comments only
    startCol02 {
    }
      // 2 columns: wrap, columns
    startCol02 =
    startCol02 {
			wrap < start.gridelements.startCol01.wrap
      columns {
        default {
          wrap {
            stdWrap {
              cObject = COA
              cObject {
								10 = COA
								10 {
										// class
									10 = TEXT
									10 {
										field       = flexform_class
										noTrimWrap  = | |-0|
										required    = 1
									}
										// small
									20 = TEXT
									20 {
										field = flexform_columnssmall
										listNum = 0
										listNum {
											splitChar = /
										}
										noTrimWrap = | small-||
										required = 1
									}
										// medium
									30 = TEXT
									30 {
										field = flexform_columnsmedium
										listNum = 0
										listNum {
											splitChar = /
										}
										noTrimWrap = | medium-||
										required = 1
									}
										// large
									40 = TEXT
									40 {
										field = flexform_columnslarge
										listNum = 0
										listNum {
											splitChar = /
										}
										noTrimWrap = | large-||
										required = 1
									}
										// first
									99 = TEXT
									99 {
										value       = first
										noTrimWrap  = | ||
									}
									wrap = <div class="columns|
								}
								20 = COA
								20 {
									10 = COA
									10 {
											// isTrue.field = flexform_classCol00
										if =
										if.isTrue.field = flexform_classCol00
											// flexform_classCol00
										10 = TEXT
										10 {
											field = flexform_classCol00
											noTrimWrap = |"><div class="||
										}
											// data-equalizer-watch="c{field:uid}" if.isTrue.field = flexform_samecolumnheight
										20 = TEXT
										20 {
												// isTrue.field = flexform_samecolumnheight
											if =
											if.isTrue.field = flexform_samecolumnheight
											value				= data-equalizer-watch="c{field:uid}"
											insertData	= 1
											noTrimWrap	= | ||
										}
									}
									20 = COA
									20 {
											// isFalse.field = flexform_classCol00
										if =
										if.isFalse.field = flexform_classCol00
											// data-equalizer-watch="c{field:uid}" if.isTrue.field = flexform_samecolumnheight
										10 = TEXT
										10 {
												// isTrue.field = flexform_samecolumnheight
											if =
											if.isTrue.field = flexform_samecolumnheight
											value				= data-equalizer-watch="c{field:uid}"
											insertData	= 1
//											// #i0322, dwildt, 200423, 1-/+ 
											noTrimWrap	= | ||
											//noTrimWrap	= |" ||
										}
									}
										// #i0322, dwildt, 200423, 1-/
									//wrap = "
										// #i0322, dwildt, 200423, 1+ 
										wrap = |"
								}
									// value = >
								30 = TEXT
								30 {
									value = >
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject = COA
              cObject {
								10 = TEXT
								10 {
										// isTrue.field = flexform_classCol00
									if =
									if.isTrue.field = flexform_classCol00
				          value = |</div></div>
								}
								20 = TEXT
								20 {
										// isFalse.field = flexform_classCol00
									if =
									if.isFalse.field = flexform_classCol00
				          value = |</div>
								}
							}
						}
					}
        }
        1 < .default
        1 {
          wrap {
            stdWrap {
              cObject {
                10 {
									10 {
										noTrimWrap  = | |-1|
									}
									20 {
										listNum = 1
									}
									30 {
										listNum = 1
									}
									40 {
										listNum = 1
									}
										// last
									99 = TEXT
									99 {
										value       = last
										noTrimWrap  = | ||
									}
								}
								20 {
									10 {
										if.isTrue.field = flexform_classCol01
										10 {
											field = flexform_classCol01
										}
									}
									20 {
											// isFalse.field = flexform_classCol01
										if =
										if.isFalse.field = flexform_classCol01
									}
								}
							}
            }
          }
					wrap2 {
            stdWrap {
              cObject {
								10 {
									if.isTrue.field = flexform_classCol01
								}
								20 {
									if.isFalse.field = flexform_classCol01
								}
							}
						}
					}
        }
      }
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.startCol02 < start.gridelements.startCol02