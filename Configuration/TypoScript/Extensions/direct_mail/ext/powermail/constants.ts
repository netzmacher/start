plugin.tx_powermail {
  settings.misc.ajaxSubmit = 1
}

start {
	extensions {
		powermail {
			# cat=START - DIRECT_MAIL - POWERMAIL //100;      type=string; label= Delete all data: Name of the powermail checkbox for deleteing all data
			field.deleteAllData		= deletealldata
			# cat=START - DIRECT_MAIL - POWERMAIL //101;      type=string; label= Direct mail categories: Name of the powermail checkbox for select available newsleters. TAKE ACCOUNT of the category: START - DIRECT_MAIL - CATEGORIES
			field.dmailCategories = dmailcategories
		}
	}
}