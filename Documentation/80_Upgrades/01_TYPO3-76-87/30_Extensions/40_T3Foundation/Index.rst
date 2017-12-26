.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators_upgrades_typo3-76-87_extensions_t3foundation:


Foundation Framework
====================

Please replace cbfoundation with t3foundation:

* Include Static Templates

* Constants

* Setup


Upgrade
-------

If you have used t3foundation before, please update the include static template:

* Replace "Foundation framework [DEPRECATED!]" with "Foundation framework"

SELECT
^^^^^^

.. code:: php

	-- extension t3foundation
	SELECT `uid`, `pid`, `title`, `include_static_file` 
	FROM `sys_template` 
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript%' 
	AND `include_static_file` NOT LIKE '%EXT:t3foundation/Configuration/TypoScript/Default/%'

UPDATE
^^^^^^

.. code:: php

	-- extension t3foundation
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:t3foundation/Configuration/TypoScript', 'EXT:t3foundation/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript%'
	AND `include_static_file` NOT LIKE '%EXT:t3foundation/Configuration/TypoScript/Default/%'
	-- revison 
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:t3foundation/Configuration/TypoScript/Default//Default/', 'EXT:t3foundation/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript/Default//Default/%'

