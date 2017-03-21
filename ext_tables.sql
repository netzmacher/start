CREATE TABLE pages (
  tx_start_addressline varchar(196) default NULL,
  tx_start_email varchar(128) default NULL,
  tx_start_foundation_topbar_name varchar(128) default NULL,
  tx_start_foundation_topbar_title varchar(128) default NULL,
  tx_start_social_facebook varchar(196) default NULL,
  tx_start_social_googleplus varchar(196) default NULL,
  tx_start_social_instagram varchar(196) default NULL,
  tx_start_social_twitter varchar(196) default NULL,
  tx_start_social_vimeo varchar(196) default NULL,
  tx_start_social_youtube varchar(196) default NULL,
);

CREATE TABLE tt_content (
  tx_start_additionalclass tinytext,
  tx_start_additionalclassdefined tinytext,
);