.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. __upgrades_TYPO3_87_extensions_gridelements:


Grid Elements
=============

In case of broken frontend or backend layouts
---------------------------------------------

SELECT
^^^^^^

Find content elements:

.. code:: php

	-- extension gridelements
	SELECT `uid`, `pid`, `header`, `colPos`, `tx_gridelements_container`
	FROM `tt_content`
	WHERE `colPos` >= 0
	AND `tx_gridelements_container` > 0
	-- AND `pid` = 5813


Update
^^^^^^

.. code:: php

	-- extension gridelements
	UPDATE `tt_content` 
	SET `colPos` = -1
	WHERE `colPos` >= 0
	AND `tx_gridelements_container` > 0
	-- AND `pid` = 5813