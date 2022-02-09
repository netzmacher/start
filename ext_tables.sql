CREATE TABLE pages (
  tx_start_addressline varchar(196) default NULL,
  tx_start_email varchar(128) default NULL,
  tx_start_foundation_topbar_name varchar(128) default NULL,
  tx_start_foundation_topbar_title varchar(128) default NULL,
  tx_start_megamenu varchar(128) default NULL,
  tx_start_pages_calendar varchar(128) default NULL,
  tx_start_pages_gdpr varchar(128) default NULL,
  tx_start_pages_news varchar(128) default NULL,
  tx_start_pages_newsletter varchar(128) default NULL,
  tx_start_pages_root varchar(128) default NULL,
  tx_start_pages_rss varchar(128) default NULL,
  tx_start_phone varchar(128) default NULL,
  tx_start_phonelabel varchar(128) default NULL,
  tx_start_social_cloud varchar(196) default NULL,
  tx_start_social_facebook varchar(196) default NULL,
  tx_start_social_flickr varchar(196) default NULL,
  tx_start_social_github varchar(196) default NULL,
  tx_start_social_instagram varchar(196) default NULL,
  tx_start_social_linkedin varchar(196) default NULL,
  tx_start_social_picasa varchar(196) default NULL,
  tx_start_social_pinterest varchar(196) default NULL,
  tx_start_social_spotify varchar(196) default NULL,
  tx_start_social_twitter varchar(196) default NULL,
  tx_start_social_vimeo varchar(196) default NULL,
  tx_start_social_youtube varchar(196) default NULL,
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
