.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-create-sql:


Extend SQL-Tables
=================

Each table need the column tx_launch_uid.

You must extend the needed tables of the database.

This is needed while launching only.

After the launch you can remove the added fields.


Sample
------

See ext_tables.sql of Launch TYPO3 GRÜNE! (launchstartgreen).

https://gitlab.die-netzmacher.de/typo3/launchstartgreen/tree/master/ext_tables.sql


Code
^^^^

.. code:: php

	CREATE TABLE pages (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE sys_file (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE sys_file_metadata (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE sys_file_reference (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE sys_file_storage (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE sys_template (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tt_content (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_gridelements_backend_layout (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_org_cal (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_org_caltype (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_org_mm_all (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_org_news (
		tx_launch_uid varchar(100) default NULL,
	);

	CREATE TABLE tx_org_newscat (
		tx_launch_uid varchar(100) default NULL,
	);