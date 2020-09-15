start {
		// empty statement for proper comments only
	lib {
	}
		// bootstrap.divAdditionalClassBegin
	lib =
	lib {
			// divAdditionalClassBegin
		bootstrap {
				// #i0300, 200213, dwildt, -. Reverted by #t5780
			divAdditionalClass {
				begin = COA								
				begin {
					if {
						isTrue {
							field = tx_start_additionalclass // tx_start_additionalclassdefined
						}
					}
						// field = tx_start_additionalclass
					10 = TEXT
					10 {
						field = tx_start_additionalclass
						required = 1
						noTrimWrap = | ||
					}
						// field = tx_start_additionalclassdefined
					20 = TEXT
					20 {
						field = tx_start_additionalclassdefined
						required = 1
						split {
							token = ,
							cObjNum = 1
							1.current = 1
							1.noTrimWrap = | ||
							required = 1
						}
					}
					wrap = <!-- start.lib.bootstrap.divAdditionalClass.begin //--><div class="|"> 
				}
				end = TEXT					
				end {
					if {
						isTrue {
							field = tx_start_additionalclass // tx_start_additionalclassdefined
						}
					}
					value = </div><!-- start.lib.bootstrap.divAdditionalClass.end //--> 
				}
			}
		}
	}
}
