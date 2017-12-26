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

SQL Statement
-------------

SELECT
^^^^^^

.. code:: php

	SELECT `uid`, `pid`, `header`, `CType` FROM `tt_content` WHERE `CType` LIKE 'menu_start%'

UPDATE
^^^^^^

.. code:: php

	UPDATE `tt_content` SET `CType` = 'menu' WHERE `tt_content`.`CType` LIKE 'menu_start%'


Manually
--------

Sample for [ INVALID VALUE ("menu_startFoundationSideNavFromDirs") ]

Edit the Content Element

* Move Type 

  * from: [ INVALID VALUE ("menu_startFoundationSideNavFromDirs") ] 

  * to: [Start: Menus]