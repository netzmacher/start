start {
	piwik {
		# cat=start - piwik*//100;		type=boolean; label= enabled:If enabled, piwik javascript code will included.
		enabled		= 
		# cat=start - piwik*//201;		type=options[http,https];	label= Protocol:http or https
		protocol	=	https 
		# cat=start - piwik*//202;		type=string;	label= URL*:*OBLIGATE! URL of the piwik server without any protocol and without any ending slash. Something like my-server.com/piwik or piwik.my-server.com.
		url				= 
		# cat=start - piwik*//203;		type=int+;		label= Site Id*:*OBLIGATE! The piwik id for this website. Given by piwik.
		siteId		= 
	}
}