.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_menus:

Menus
=====

Update
------

Some menu types are lost in TYPO3 8.7.

You must update these content elements by a SQL statement or manually.


SELECT
------

.. code:: php

	-- Sitemap
	SELECT `uid`, `pid`, `header`, `CType`, `menu_type` FROM `tt_content` WHERE `CType` = 'menu' AND `menu_type` = 2;
	-- Menu Pages
	SELECT `uid`, `pid`, `header`, `CType`, `menu_type` FROM `tt_content` WHERE `CType` = 'menu' AND `menu_type` = '0';
	-- Menu Subpages
	SELECT `uid`, `pid`, `header`, `CType`, `menu_type` FROM `tt_content` WHERE `CType` = 'menu' AND `menu_type` = 1;
	SELECT `uid`, `pid`, `header`, `CType`, `menu_type` FROM `tt_content` WHERE `CType` = 'menu' AND `menu_type` = 4;
	-- Section Index
	SELECT `uid`, `pid`, `header`, `CType`, `menu_type` FROM `tt_content` WHERE `CType` = 'menu' AND `menu_type` = 3;
	-- Menu Start
	SELECT `uid`, `pid`, `header`, `CType` FROM `tt_content` WHERE `CType` LIKE 'menu_start%';


UPDATE
------

.. code:: php

	-- Sitemap
	UPDATE `tt_content` SET `CType` = 'menu_sitemap', `menu_type` = NULL WHERE `tt_content`.`CType` = 'menu' AND `menu_type` = 2;
	-- Menu Pages
	UPDATE `tt_content` SET `CType` = 'menu_pages', `menu_type` = NULL WHERE `tt_content`.`CType` = 'menu' AND `menu_type` = '0';
	-- Menu Subpages
	UPDATE `tt_content` SET `CType` = 'menu_subpages', `menu_type` = NULL WHERE `tt_content`.`CType` = 'menu' AND `menu_type` = 1;
	UPDATE `tt_content` SET `CType` = 'menu_subpages', `menu_type` = NULL WHERE `tt_content`.`CType` = 'menu' AND `menu_type` = 4;
	-- Section Index
	UPDATE `tt_content` SET `CType` = 'menu_section', `menu_type` = NULL WHERE `tt_content`.`CType` = 'menu' AND `menu_type` = 3;
	-- Menu Start
	UPDATE `tt_content` SET `CType` = 'menu' WHERE `tt_content`.`CType` LIKE 'menu_start%';


Manually
--------

Sample for [ INVALID VALUE ("menu_startFoundationSideNavFromDirs") ]

Edit the Content Element

* Move Type 

  * from: [ INVALID VALUE ("menu_startFoundationSideNavFromDirs") ] 

  * to: [Start: Menus]