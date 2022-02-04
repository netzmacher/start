[request.getQueryParams()['L'] == "{$start.config.language1.sys_language_uid}"]
	config {
		htmlTag_langKey   = {$start.config.language1.htmlTag_langKey}
		htmlTag_setParams	= {$start.config.language1.htmlTag_setParams}
		language          = {$start.config.language1.language}
		locale_all        = {$start.config.language1.locale_all}
		sys_language_uid	= {$start.config.language1.sys_language_uid}
	}
[global]

[request.getQueryParams()['L'] == "{$start.config.language2.sys_language_uid}"]
	config {
		htmlTag_langKey   = {$start.config.language2.htmlTag_langKey}
		htmlTag_setParams	= {$start.config.language2.htmlTag_setParams}
		language          = {$start.config.language2.language}
		locale_all        = {$start.config.language2.locale_all}
		sys_language_uid	= {$start.config.language2.sys_language_uid}
	}
[global]

