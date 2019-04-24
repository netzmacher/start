plugin.tx_powermail {
    // empty statement for proper comments only
  settings {      
  }
    // setup.dbEntry.10._table = tt_address
  settings =
  settings {
      // empty statement for proper comments only
    setup {      
    }
      // dbEntry.10._table = tt_address
    setup =
    setup {
        // empty statement for proper comments only
      dbEntry {      
      }
        // 10._table = tt_address
      dbEntry =
      dbEntry {
        1 {
          # Enable or disable db entry for table tt_address
          _enable = TEXT
          _enable.value = 1
					_enable.if.value = optinConfirm
					_enable.if.equals.data = GP:tx_powermail_pi1|action

          # Set tableName to "tt_address"
          _table = TEXT
          _table.value = tt_address

          # Write only if any field is not yet filled with current value (e.g. test if an email is already in database)
                  # default: always add new records (don't care about existing values)
                  # update: update record if there is an existing entry (e.g. if email is already there)
                  # none: no entry if field is filled (do nothing if record already exists)
          _ifUnique.email = update
					# optional: add additional where clause (only in mode "update") for search if a record still exists. 
					# You could use a plain string (see example below) or a cObject if needed
					_ifUniqueWhereClause = AND pid = {$start.extensions.tt_address.subscribe.pid}

          # Fill tt_address.crdate with the current time as timestamp (like 123456789)
          crdate = TEXT
          crdate.data = date:U
          
          # Fill tt_address.description with the current formatted time (like "Date: 20.01.2013")
          description = COA
          description {
            9 = TEXT
            9 {
							field = gruppe
	            noTrimWrap = || --- |
						}
            10 = TEXT
            10 {
							value = Subscribed by online form at
							lang {
								de = Angemeldet mit Online-Formular am
								en = Subscribed by online form at
							}
	            noTrimWrap = ||: |
						}
            20 = TEXT
            20 {
							data = date:U
							strftime = %d.%m.%Y %H:%M
						}
          }

          email = TEXT
          email.field = e-mail
          
          hidden = TEXT
          hidden.value = 0          

          # One (1) relation. See dbEntry 2 below
          module_sys_dmail_category = TEXT
          module_sys_dmail_category.value = 1

          module_sys_dmail_html = TEXT
          module_sys_dmail_html.value = 1

          name = TEXT
          name.field = e-mail

          pid = TEXT
          pid.value = {$start.extensions.tt_address.subscribe.pid}

          # Fill tt_address.tstamp with the current time as timestamp (like 123456789)
          tstamp = TEXT
          tstamp.data = date:U

        }
        2 {
          # Enable or disable db entry for table sys_dmail_ttaddress_category_mm
          _enable = TEXT
          _enable.value = 1

          # Set tableName to "sys_dmail_ttaddress_category_mm"
          _table = TEXT
          _table.value = sys_dmail_ttaddress_category_mm

          # Fill sys_dmail_ttaddress_category_mm.uid_local with uid of tt_address record from above configuration 1. (usage .field=uid_[key])
          uid_local = TEXT
          uid_local.field = uid_1

          # Fill new record of table "sys_dmail_ttaddress_category_mm" with field "uid_foreign" with uid 123
          uid_foreign = TEXT
          uid_foreign.value = {$start.extensions.tt_address.subscribe.directmailcatuid}
        }
      }
    }
  }
}