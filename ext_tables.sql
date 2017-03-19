CREATE TABLE pages (
  tx_start_addressline varchar(196) default NULL,
  tx_start_email varchar(128) default NULL,
  tx_start_foundation_topbar_name varchar(128) default NULL,
  tx_start_foundation_topbar_title varchar(128) default NULL,
);

CREATE TABLE tt_content (
  tx_start_additionalclass tinytext,
  tx_start_additionalclassdefined tinytext,
);