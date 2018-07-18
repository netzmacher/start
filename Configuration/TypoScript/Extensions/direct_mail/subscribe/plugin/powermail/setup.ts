	// empty statement for proper comments only
plugin {
}
	// tx_powermail by EXT:start
plugin =
plugin.tx_powermail {
}
	// tx_powermail.setup.dbEntry.1._table = tt_address, 2._table = sys_dmail_ttaddress_category_mm
plugin.tx_powermail =
plugin.tx_powermail {
    // empty statement for proper comments only
  settings {      
  }
    // setup.dbEntry.1._table = tt_address, 2._table = sys_dmail_ttaddress_category_mm
  settings =
  settings {
      // empty statement for proper comments only
    setup {      
    }
      // dbEntry.1._table = tt_address, 2._table = sys_dmail_ttaddress_category_mm
    setup =
    setup {
        // empty statement for proper comments only
      dbEntry {      
      }
        // 1._table = tt_address, 2._table = sys_dmail_ttaddress_category_mm
      dbEntry =
      dbEntry {
				1 >
				2 >
        10 {
						// Enable db entry for table tt_address, if tx_powermail_pi1[action] is optinConfirm
          _enable = TEXT
          _enable {
						value = 1
						if {
							value = optinConfirm
							equals.data = GP:tx_powermail_pi1|action
						}
					}

	          // value = tt_address
          _table = TEXT
          _table.value = tt_address

						// email = update
          # Write only if any field is not yet filled with current value (e.g. test if an email is already in database)
                  # default: always add new records (don't care about existing values)
                  # update: update record if there is an existing entry (e.g. if email is already there)
                  # none: no entry if field is filled (do nothing if record already exists)
          _ifUnique =
          _ifUnique.email = update

#						// data = date:U
#          crdate = TEXT
#          crdate.data = date:U
          
						// value = 1
          deleted = TEXT
          deleted.value = 1         

						// value = Unsubscribed by online form at %d.%m.%Y %H:%M - {$start.extensions.powermail.field.dmailCategories}
          description = COA
          description {
							// value = Subscribed by online form at
            10 = TEXT
            10 {
							value = Unsubscribed by online form at
							lang {
								de = Abgemeldet mit Online-Formular am
								en = Unsubscribed by online form at
							}
	            noTrimWrap = ||: |
						}
							// data = date:U (%d.%m.%Y %H:%M)
            20 = TEXT
            20 {
							data = date:U
							strftime = %d.%m.%Y %H:%M
						}
          }

	          // field = e-mail
          email = TEXT
          email.field = e-mail
          
						// field = e-mail
          name = TEXT
          name.field = e-mail

						// pid = {$start.extensions.tt_address.pid}
          pid = TEXT
          pid.value = {$start.extensions.tt_address.pid}

						// data = date:U
          tstamp = TEXT
          tstamp.data = date:U

        }
        20 {
						// Enable db entry for table tt_address, if tx_powermail_pi1[action] is optinConfirm
          _enable = TEXT
          _enable {
						value = 1
						if {
							value = optinConfirm
							equals.data = GP:tx_powermail_pi1|action
						}
					}

	          // value = tt_address
          _table = TEXT
          _table.value = tt_address

						// email = update
          # Write only if any field is not yet filled with current value (e.g. test if an email is already in database)
                  # default: always add new records (don't care about existing values)
                  # update: update record if there is an existing entry (e.g. if email is already there)
                  # none: no entry if field is filled (do nothing if record already exists)
          _ifUnique =
          _ifUnique.email = default

						// data = date:U
          crdate = TEXT
          crdate.data = date:U
          
						// value = Subscribed by online form at %d.%m.%Y %H:%M - {$start.extensions.powermail.field.dmailCategories}
          description = COA
          description {
							// value = Subscribed by online form at
            10 = TEXT
            10 {
							value = Subscribed by online form at
							lang {
								de = Angemeldet mit Online-Formular am
								en = Subscribed by online form at
							}
	            noTrimWrap = ||: |
						}
							// data = date:U (%d.%m.%Y %H:%M)
            20 = TEXT
            20 {
							data = date:U
							strftime = %d.%m.%Y %H:%M
	            noTrimWrap = || - |
						}
							// field = {$start.extensions.powermail.field.dmailCategories}
            30 = TEXT
            30 {
							field = {$start.extensions.powermail.field.dmailCategories}
	            noTrimWrap = |{$start.extensions.powermail.field.dmailCategories}: ||
						}
          }

	          // field = e-mail
          email = TEXT
          email.field = e-mail
          
						// value = 0
          hidden = TEXT
          hidden.value = 0          

						// amount of members of csvList in {$start.extensions.powermail.field.dmailCategories}. 1 at least.
          module_sys_dmail_category = TEXT
          module_sys_dmail_category {
						field = {$start.extensions.powermail.field.dmailCategories}
						split {
							token = ,
							returnCount = 1
						}
						ifEmpty = 1
					}

						// value = 1
          module_sys_dmail_html = TEXT
          module_sys_dmail_html.value = 1

						// field = e-mail
          name = TEXT
          name.field = e-mail

						// pid = {$start.extensions.tt_address.pid}
          pid = TEXT
          pid.value = {$start.extensions.tt_address.pid}

						// data = date:U
          tstamp = TEXT
          tstamp.data = date:U

        }
        21 {
						// true if "{$start.extensions.direct_mail.categories.01.value}" isInList of '{$start.extensions.powermail.field.dmailCategories}' or $start.extensions.powermail.field.dmailCategories is empty (here: '{$start.extensions.powermail.field.dmailCategories}')
          _enable = TEXT
          _enable {
						value = 1
							// true, if "{$start.extensions.direct_mail.categories.01.value}" isInList of $start.extensions.powermail.field.dmailCategories (here: '{$start.extensions.powermail.field.dmailCategories}')
						if =
						if {
								// field = {$start.extensions.powermail.field.dmailCategories}
							isFalse {
								field = {$start.extensions.powermail.field.dmailCategories}
							}
						}
					}

						// value = sys_dmail_ttaddress_category_mm
          _table = TEXT
          _table.value = sys_dmail_ttaddress_category_mm

						// sys_dmail_ttaddress_category_mm.uid_local = tt_address.uid from above
          uid_local = TEXT
						// usage: field=uid_[key]
          uid_local.field = uid_20

						// sys_dmail_ttaddress_category_mm.uid_foreign = {$start.extensions.direct_mail.categories.01.uid}
          uid_foreign = TEXT
          uid_foreign.value = {$start.extensions.direct_mail.categories.01.uid}
        }
        22 {
						// true if "{$start.extensions.direct_mail.categories.02.value}" isInList of '{$start.extensions.powermail.field.dmailCategories}' or $start.extensions.powermail.field.dmailCategories is empty (here: '{$start.extensions.powermail.field.dmailCategories}')
          _enable = COA
          _enable {
							// true, if $start.extensions.powermail.field.dmailCategories is false (here: '{$start.extensions.powermail.field.dmailCategories}')
						10 = TEXT
						10 {
							value = 1
								// true, if $start.extensions.powermail.field.dmailCategories is false (here: '{$start.extensions.powermail.field.dmailCategories}')
							if =
							if {
								isFalse = {$start.extensions.powermail.field.dmailCategories}
							}
						}
							// true, if "{$start.extensions.direct_mail.categories.02.value}" isInList of $start.extensions.powermail.field.dmailCategories (here: '{$start.extensions.powermail.field.dmailCategories}')
						20 = TEXT
						20 {
							value = 1
								// true, if "{$start.extensions.direct_mail.categories.02.value}" isInList of $start.extensions.powermail.field.dmailCategories (here: '{$start.extensions.powermail.field.dmailCategories}')
							if =
							if {
								isInList = {$start.extensions.direct_mail.categories.02.value}
									// field = {$start.extensions.powermail.field.dmailCategories}
								value {
									field = {$start.extensions.powermail.field.dmailCategories}
										// replacement: ", " -> ","
									stdWrap =
									stdWrap {
										replacement {
											10 {
												search		= #, #i
												replace		= ,
												useRegExp = 1
											}
										}
									}
								}
							}
						}
					}

						// value = sys_dmail_ttaddress_category_mm
          _table = TEXT
          _table.value = sys_dmail_ttaddress_category_mm

						// sys_dmail_ttaddress_category_mm.uid_local = tt_address.uid from above
          uid_local = TEXT
						// usage: field=uid_[key]
          uid_local.field = uid_20

						// sys_dmail_ttaddress_category_mm.uid_foreign = {$start.extensions.direct_mail.categories.02.uid}
          uid_foreign = TEXT
          uid_foreign.value = {$start.extensions.direct_mail.categories.02.uid}
        }
        23 {
						// true if "{$start.extensions.direct_mail.categories.03.value}" isInList of {$start.extensions.powermail.field.dmailCategories}
          _enable = TEXT
          _enable {
						value = 1
							// true, if "{$start.extensions.direct_mail.categories.03.value}" isInList of $start.extensions.powermail.field.dmailCategories (here: '{$start.extensions.powermail.field.dmailCategories}')
						if =
						if {
							isInList		= {$start.extensions.direct_mail.categories.03.value}
								// field = {$start.extensions.powermail.field.dmailCategories}
							value {
								field = {$start.extensions.powermail.field.dmailCategories}
									// replacement: ", " -> ","
								stdWrap =
								stdWrap {
									replacement {
										10 {
											search		= #, #i
											replace		= ,
											useRegExp = 1
										}
									}
								}
							}
						}
					}

						// value = sys_dmail_ttaddress_category_mm
          _table = TEXT
          _table.value = sys_dmail_ttaddress_category_mm

						// sys_dmail_ttaddress_category_mm.uid_local = tt_address.uid from above
          uid_local = TEXT
						// usage: field=uid_[key]
          uid_local.field = uid_20

						// sys_dmail_ttaddress_category_mm.uid_foreign = {$start.extensions.direct_mail.categories.03.uid}
          uid_foreign = TEXT
          uid_foreign.value = {$start.extensions.direct_mail.categories.03.uid}
        }
        24 {
						// true if "{$start.extensions.direct_mail.categories.04.value}" isInList of {$start.extensions.powermail.field.dmailCategories}
          _enable = TEXT
          _enable {
						value = 1
							// true, if "{$start.extensions.direct_mail.categories.04.value}" isInList of $start.extensions.powermail.field.dmailCategories (here: '{$start.extensions.powermail.field.dmailCategories}')
						if =
						if {
							isInList		= {$start.extensions.direct_mail.categories.04.value}
								// field = {$start.extensions.powermail.field.dmailCategories}
							value {
								field = {$start.extensions.powermail.field.dmailCategories}
									// replacement: ", " -> ","
								stdWrap =
								stdWrap {
									replacement {
										10 {
											search		= #, #i
											replace		= ,
											useRegExp = 1
										}
									}
								}
							}
						}
					}

						// value = sys_dmail_ttaddress_category_mm
          _table = TEXT
          _table.value = sys_dmail_ttaddress_category_mm

						// sys_dmail_ttaddress_category_mm.uid_local = tt_address.uid from above
          uid_local = TEXT
						// usage: field=uid_[key]
          uid_local.field = uid_20

						// sys_dmail_ttaddress_category_mm.uid_foreign = {$start.extensions.direct_mail.categories.04.uid}
          uid_foreign = TEXT
          uid_foreign.value = {$start.extensions.direct_mail.categories.04.uid}
        }
	    }
		}
  }
}