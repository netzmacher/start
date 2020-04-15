.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_6000000_gridelements_cleanup:


Clean Up
========

You should remove all records from the table tx_gridelements_backend_layout. 
**Otherwise, users can still select the outdated grid elements.**


Backup
------

Before you start: **backup your tables**:

* pages

* tx_gridelements_backend_layout


List configured grid elements
-----------------------------

.. code:: php

	-- Get all folders
	SELECT * 
	FROM  pages
	WHERE doktype = 254 
	AND uid IN (
		SELECT `pid`
		FROM `tx_gridelements_backend_layout`
		GROUP BY `pid`
		ORDER BY `pid`
	);

	-- Get all configuration records
	SELECT `uid`, `pid`, `title`
	FROM `tx_gridelements_backend_layout`;



Remove configured grid elements
-----------------------------

.. code:: php

	-- First: delete pages
	DELETE FROM  pages
	WHERE doktype = 254
	AND uid IN (
		SELECT `pid`
		FROM `tx_gridelements_backend_layout`
		GROUP BY `pid`
		ORDER BY `pid`
	);

	-- Second: delete records
	DELETE FROM `tx_gridelements_backend_layout`;