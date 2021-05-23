start {
    // for proper comments only
  lib {
  }
    // footer
  lib =
  lib {				
			// for proper comments only
		footer {
		}
			// main
		footer =
		footer {				
				// for proper comments only
			main {
			}
				// 10: register. 20: 3x2 columns. 30: CONTENT where = colPos=21. 40: tx_start_addressline, tx_start_email
      main = COA
      main {
					// register: footeruids, footertitles
				10 = LOAD_REGISTER
				10 {
					footeruids.cObject = CONTENT
					footeruids.cObject {
						 table = pages
						 select {
								pidInList = {$start.pages.footer}
								selectFields = uid, title
								orderBy = sorting
								begin = 0
								max = 6
						 }
						renderObj = TEXT
						renderObj {
							field = uid
							wrap = |,
						}
					}
					footertitles.cObject = CONTENT
					footertitles.cObject {
						 table = pages
						 select {
								pidInList = {$start.pages.footer}
								selectFields = uid, title
								orderBy = sorting
								begin = 0
								max = 6
						 }
						renderObj = TEXT
						renderObj {
							field = title
							wrap = |,
						}
					}
				}
					// 2 columns, 2 columns, 2 columns
				20 = COA
				20 {
						// if isTrue.data = register:footeruids AND listNum = 0
					if =
					if {
						isTrue {
							data = register:footeruids
							listNum = 0
						}
					}
						// 2 columns with directories (0, 1)
					10 = COA
					10 {
							// title, sidenav
						10 = COA
						10 {
								// if isTrue.data = register:footeruids AND listNum = 0
							if =
							if {
								isTrue {
									data = register:footeruids
									listNum = 0
								}
							}
							10 = TEXT
							10 {
								data = register:footertitles
								listNum = 0
								wrap = <h3>|</h3>
							}
							20 < start.lib.sidenavFromDirs
							20 {
								special {
									value >
									value {
										data = register:footeruids
										listNum = 0
									}
								}
							}
							wrap = {$start.foundation.footer.innerWrap}
						}
						20 < .10
						20 {
								// if isTrue.data = register:footeruids AND listNum = 1
							if =
							if.isTrue.listNum = 1
							10.listNum = 1
							20.special.value.listNum = 1
						}
						wrap = {$start.foundation.footer.outerWrap}
					}
					20 < .10
						// 2 columns with directories (2, 3)
					20 = COA
					20 {
						10 {
								// if isTrue.data = register:footeruids AND listNum = 2
							if =
							if.isTrue.listNum = 2
							10.listNum = 2
							20.special.value.listNum = 2
						}
						20 {
								// if isTrue.data = register:footeruids AND listNum = 3
							if =
							if.isTrue.listNum = 3
							10.listNum = 3
							20.special.value.listNum = 3
						}
					}
					30 < .10
						// 2 columns with directories (4, 5)
					30 = COA
					30 {
						10 {
								// if isTrue.data = register:footeruids AND listNum = 4
							if =
							if.isTrue.listNum = 4
							10.listNum = 4
							20.special.value.listNum = 4
						}
						20 {
								// if isTrue.data = register:footeruids AND listNum = 5
							if =
							if.isTrue.listNum = 5
							10.listNum = 5
							20.special.value.listNum = 5
						}
					}
					wrap = <div class="{$start.foundation.grid.class.row}"><!-- start.structure.footer.main.30 //-->|</div>
				}
					// where = colPos=21
				30 < styles.content.get
				30 {
					select {
						where = colPos=21
					}
					slide = -1
				}
					// tx_start_addressline, tx_start_email
				40 = COA
				40 {
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
								data = levelfield:-1, tx_start_phonelabel, slide
									// ifEmpty.data = levelfield:-1, tx_start_addressline, slide OR levelfield:-1, tx_start_email, slide
								ifEmpty =
								ifEmpty {
									data = levelfield:-1, tx_start_email, slide
								}
							}
						}
					}
					wrap = <div class="align-center"><p class="addressline">|</p></div>
						// tx_start_addressline
					10 = TEXT
					10 {
						data = levelfield:-1, tx_start_addressline, slide
					}
						// tx_start_addressline
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
													data = levelfield:-1, tx_start_phonelabel, slide
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
						// <a href="tel:{field:tx_start_phone}">{field:tx_start_phonelabel}</a>
					30 = COA
					30 {
						if =
						if {
							isTrue =
							isTrue {
								data = levelfield:-1, tx_start_phonelabel, slide
							}
						}
#							// p:
#						10 = TEXT
#						10 {
#							value = phone
#							lang {
#								de = Tel.
#								en = phone
#							}
#							noTrimWrap = ||: |
#						}
							// <a href="tel:{field:tx_start_phone}">
						20 = TEXT
						20 {
							if =
							if {
								isTrue =
								isTrue {
									data = levelfield:-1, tx_start_phone, slide
								}
							}
							data = levelfield:-1, tx_start_phone, slide
							wrap = <a href="tel:|">
						}
							// field: tx_start_phonelabel
						40 = TEXT
						40 {
							data = levelfield:-1, tx_start_phonelabel, slide
						}
							// </a>
						50 = TEXT
						50 {
							if =
							if {
								isTrue =
								isTrue {
									data = levelfield:-1, tx_start_phone, slide
								}
							}
							value = </a>
						}

					}
						// tx_start_addressline
					40 = TEXT
					40 {
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
													ifEmpty =
													ifEmpty {
														data = levelfield:-1, tx_start_phone, slide
													}
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
					50 = TEXT
					50 {
						data = levelfield:-1, tx_start_email, slide
						typolink {
							parameter {
								data = levelfield:-1, tx_start_email, slide
							}
						}
					}
				}
			}
    }
  }
}