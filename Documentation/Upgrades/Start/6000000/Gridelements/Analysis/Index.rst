.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_6000000_gridelements_analysis:


Analysis
========


Count all used grid elements
----------------------------

.. code:: php

	-- Count all used grid elements: accordions, columns and tabs
	SELECT count(`uid`) AS '#', `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	GROUP BY `tx_gridelements_backend_layout`
	ORDER BY `tx_gridelements_backend_layout`

	-- Count all accordions
	-- Uid for element 'accordion and tab' is 11 in the code below
	SELECT count(`uid`) AS '#', `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	AND `tx_gridelements_backend_layout` = '11'
	AND `pi_flexform` LIKE '%accordion%'
	GROUP BY `tx_gridelements_backend_layout`
	ORDER BY `tx_gridelements_backend_layout`

	-- Count all tabs
	-- Uid for element 'accordion and tab' is 11 in the code below
	SELECT count(`uid`) AS '#', `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	AND `tx_gridelements_backend_layout` = '11'
	AND `pi_flexform` NOT LIKE '%accordion%'
	GROUP BY `tx_gridelements_backend_layout`
	ORDER BY `tx_gridelements_backend_layout`


List all used grid elements
---------------------------

.. code:: php

	-- List all used grid elements: accordions, columns and tabs
	SELECT `uid`, `pid`, `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'

	-- List all accordions
	-- Uid for element 'accordion and tab' is 11 in the code below
	SELECT `uid`, `pid`, `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	AND `tx_gridelements_backend_layout` = '11'
	AND `pi_flexform` LIKE '%accordion%'

	-- List all tabs
	-- Uid for element 'accordion and tab' is 11 in the code below
	SELECT `uid`, `pid`, `CType`, `tx_gridelements_backend_layout`
	FROM `tt_content`
	WHERE `CType` LIKE 'gridelements_pi1'
	AND `tx_gridelements_backend_layout` = '11'
	AND `pi_flexform` NOT LIKE '%accordion%'