.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _upgrades_start_6000000_gridelements:


Grid Elements
=============

The configuration of Grid Elements by database records is obsolete.
You should update your database.

If you will have numbers as ids in the field tx_gridelements_backend_layout, 
you should replace these ids with the corresponding id-label.


Id-Labels
---------

* startAccordion

* startCol01

* startCol02

* startCol03

* startCol04

* startCol05

* startCol06

* startTab


Setup
-----

SELECT
^^^^^^

Find used grid elements:

.. code:: php

	-- For updating
	SELECT `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	GROUP BY `tx_gridelements_backend_layout`
	ORDER BY `tx_gridelements_backend_layout`

	-- For analysing
	SELECT `uid`, `pid`, `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	GROUP BY `tx_gridelements_backend_layout`
	ORDER BY `tx_gridelements_backend_layout`

If query from above will display the tx_gridelements_backend_layout uids 2, 3 and 5,
the query from below will be the one for get the corresponding grid elements.

.. code:: php

	-- For updating
	SELECT `uid`, `pid`, `title`
	FROM `tx_gridelements_backend_layout`
	WHERE `uid` IN (2,3,5)

	-- For analysing
	SELECT `uid`, `pid`, `title`
	FROM `tx_gridelements_backend_layout`

Possible result can be:

* 3: "Start: Columns 2"

* 5: "Start: Columns 4"

* 8: "Start: Accordion or Tab"


Update
^^^^^^

.. code:: php

  -- For columns
	UPDATE `tt_content` 
	SET `tx_gridelements_backend_layout` = 'startCol02'
	WHERE `tx_gridelements_backend_layout` = 3
	AND `CType` LIKE 'gridelements_pi1'
	-- AND `pid` = 5813

  -- For accordions and tabs
	UPDATE `tt_content` 
	SET `tx_gridelements_backend_layout` = 'startCol02'
	WHERE `tx_gridelements_backend_layout` = 3
	AND `CType` LIKE 'gridelements_pi1'
	-- AND `pid` = 5813