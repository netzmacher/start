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
        1 >
        2 >
        3 >
        4 >
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

	          // value = 1
          deleted = TEXT
          deleted.value = 1

						// value = Unsubscribed by online form at %d.%m.%Y %H:%M
          description = COA
          description {
							// value = Unsubscribed by online form at
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

	          // value = 1
          hidden = TEXT
          hidden.value = 1
          
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
      }
    }
  }
}