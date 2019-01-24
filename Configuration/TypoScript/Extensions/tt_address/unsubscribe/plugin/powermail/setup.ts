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
        10 {
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
					_ifUniqueWhereClause = AND pid = {$plugin.org.extensions.tt_address.unsubscribe.pid}

          #deleted = TEXT
          #deleted.value = 1

          # Fill tt_address.description with the current formatted time (like "Date: 20.01.2013")
          description = COA
          description {
            10 = TEXT
            10.value = Unsubscribed by online form at
            10.lang.de = Abgemeldet mit Online-Formular am
            10.lang.en = unsubscribed by online form at
            10.noTrimWrap = ||: |
            20 = TEXT
            20.data = date:U
            20.strftime = %d.%m.%Y %H:%M
          }

          email = TEXT
          email.field = e-mail

          hidden = TEXT
          hidden.value = 1
          
          name = TEXT
          name.field = e-mail

          pid = TEXT
          pid.value = {$start.extensions.tt_address.unsubscribe.pid}
          
          # Fill tt_address.tstamp with the current time as timestamp (like 123456789)
          tstamp = TEXT
          tstamp.data = date:U

        }
      }
    }
  }
}