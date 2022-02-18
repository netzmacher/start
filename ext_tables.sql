CREATE TABLE pages (
  tx_start_addressline tinytext,
  tx_start_email tinytext,
  tx_start_foundation_topbar_name tinytext,
  tx_start_foundation_topbar_title tinytext,
  tx_start_megamenu tinytext,
  tx_start_pages_calendar tinytext,
  tx_start_pages_gdpr tinytext,
  tx_start_pages_news tinytext,
  tx_start_pages_newsletter tinytext,
  tx_start_pages_root tinytext,
  tx_start_pages_rss tinytext,
  tx_start_phone tinytext,
  tx_start_phonelabel tinytext,
  tx_start_social_cloud tinytext,
  tx_start_social_facebook tinytext,
  tx_start_social_flickr tinytext,
  tx_start_social_github tinytext,
  tx_start_social_instagram tinytext,
  tx_start_social_linkedin tinytext,
  tx_start_social_picasa tinytext,
  tx_start_social_pinterest tinytext,
  tx_start_social_spotify tinytext,
  tx_start_social_twitter tinytext,
  tx_start_social_vimeo tinytext,
  tx_start_social_youtube tinytext,
);

-- #t1578, 171001, dwildt
CREATE TABLE tt_content (
	menu_type varchar(30) NOT NULL default '0', 
  tx_start_additionalclass tinytext,
  tx_start_additionalclassdefined tinytext,
  tx_start_classbackground tinytext,
  tx_start_classcontainer tinytext,
  tx_start_classeffect tinytext,
  tx_start_classform tinytext,
  tx_start_classimage tinytext,
  tx_start_classmargin tinytext,
  tx_start_classmargingrid tinytext,
  tx_start_classpanel tinytext,
  tx_start_classshadow tinytext,
  tx_start_classtext tinytext,
  tx_start_csscolor tinytext,
  tx_start_csscolorbe tinytext,
  tx_start_csscolorhref tinytext,
  tx_start_csscolorhrefhover tinytext,
);

-- #i0185, 180719, dwildt
CREATE TABLE sys_dmail_group (
	uid int(11) unsigned NOT NULL auto_increment,
  sys_dmail_category tinyblob NULL,
	PRIMARY KEY (uid)
);
