.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_6000000_gridelements_upgrade:


Upgrade
=======


Backup tt_content
-----------------

Before you start: **backup your table tt_content**.


List configured grid elements
-----------------------------

.. code:: php

  SELECT `uid`, `pid`, `title`
  FROM `tx_gridelements_backend_layout`


Create the SQL UPDATE-queries
-----------------------------

Assign the uids form the query above to the uid-lables like in the table below.

If you would like to receive the UPDATE queries automatically, please use this file:

* https://gitlab.die-netzmacher.de/typo3/start/-/blob/master/Resources/Private/Scripts/gridelements-bridge.ods


=======================  ===  ==============  ===============================================================================================================================================================
Grid Element             Uid  Uid-Label        SQL Statement
=======================  ===  ==============  ===============================================================================================================================================================
Start: Columns 1         1    startCol01      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol01' WHERE `tx_gridelements_backend_layout` = '1';
Start: Columns 2         2    startCol02      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol02' WHERE `tx_gridelements_backend_layout` = '2';
Start: Columns 3         3    startCol03      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol03' WHERE `tx_gridelements_backend_layout` = '3';
Start: Columns 4         4    startCol04      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol04' WHERE `tx_gridelements_backend_layout` = '4';
Start: Columns 5         5    startCol05      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol05' WHERE `tx_gridelements_backend_layout` = '5';
Start: Columns 6         6    startCol06      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol06' WHERE `tx_gridelements_backend_layout` = '6';
Start: Accordion & Tabs  11   startAccordion  UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startAccordion' WHERE `tx_gridelements_backend_layout` = '11' AND `pi_flexform` LIKE '%accordion%';
Start: Accordion & Tabs  11   startTab        UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startTab' WHERE `tx_gridelements_backend_layout` = '11' AND `pi_flexform` NOT LIKE '%accordion%';
=======================  ===  ==============  ===============================================================================================================================================================

Copy the SQL statements and paste it into your PhpMyAdmin application or into your SQL CLI.


Hide Headers
------------

Headings and titles of elements within the grid are shown as labels in the accordions,
tabs and also in the content. This is a new behavior.

If you don't like to display headers in the content, you can set the headers to hidden by
executing the UPDATE-query from below.

.. code:: php

	-- Display all elements, which are part of an accordion or a tab
	SELECT t1.uid, t1.pid, t1.header, t1.header_layout
	FROM  tt_content t1
	INNER JOIN tt_content t2 
	ON t1.tx_gridelements_container = t2.uid
	AND t2.CType LIKE 'gridelements_pi1'
	AND (t2.tx_gridelements_backend_layout = 'startTab' OR t2.tx_gridelements_backend_layout = 'startAccordion')
	-- AND t1.pid = 11710

	-- Set header to hidden by all elements, which are part of an accordion or a tab
	UPDATE tt_content t1
	INNER JOIN tt_content t2 
	ON t1.tx_gridelements_container = t2.uid
	AND t2.CType LIKE 'gridelements_pi1'
	AND (t2.tx_gridelements_backend_layout = 'startTab' OR t2.tx_gridelements_backend_layout = 'startAccordion')
	-- AND t1.pid = 11710
	SET t1.header_layout = 100