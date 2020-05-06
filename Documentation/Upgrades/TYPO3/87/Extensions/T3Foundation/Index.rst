.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. __upgrades_TYPO3_87_extensions_t3foundation:


Foundation Framework
====================

Please replace cb_foundation with t3foundation.

You can update the configuration by the SQL statements from below or manually. 


SQL Statements
--------------

SELECT
^^^^^^

Find former included static template of t3foundation:

.. code:: php

	-- extension t3foundation
	SELECT `uid`, `pid`, `title`, `include_static_file` 
	FROM `sys_template` 
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript%' 
	AND `include_static_file` NOT LIKE '%EXT:t3foundation/Configuration/TypoScript/Default/%'

Find cb_foundation templates:

.. code:: php

	SELECT `uid`, `pid`, `title`, `include_static_file`
	FROM `sys_template`
	WHERE `include_static_file` LIKE '%EXT:cb_foundation%'

Find cb_foundation content elements:

.. code:: php

	-- extension cb_foundation
	SELECT `uid`, `pid`, `header`, `CType`
	FROM `tt_content`
	WHERE `CType` LIKE '%cbfoundation%'

UPDATE
^^^^^^

If you have used t3foundation before, please update the include static template:

* Replace "Foundation framework [DEPRECATED!]" with "Foundation framework"

.. code:: php

	-- extension t3foundation
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:t3foundation/Configuration/TypoScript', 'EXT:t3foundation/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript%'
	AND `include_static_file` NOT LIKE '%EXT:t3foundation/Configuration/TypoScript/Default/%';
	-- revison 
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:t3foundation/Configuration/TypoScript/Default//Default/', 'EXT:t3foundation/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:t3foundation/Configuration/TypoScript/Default//Default/%';

Replace template of cb_foundation with the one of t3foundation

.. code:: php

	-- extension cb_foundation
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:cb_foundation/Configuration/TypoScript', 'EXT:t3foundation/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:cb_foundation/Configuration/TypoScript%';
	UPDATE `sys_template` 
	SET `title` = REPLACE(`title`, 'cbfoundation', 't3foundation')
	WHERE `title` LIKE '%cbfoundation%';

Replace cb_foundation content elements with the ones of t3foundation (here: clearing lightbox, flexible video and orbit slider):

.. code:: php

	-- extension cb_foundation
	UPDATE `tt_content` SET `CType` = 't3foundation_clearing' WHERE `tt_content`.`CType` LIKE 'cbfoundation_clearing';
	UPDATE `tt_content` SET `CType` = 't3foundation_flexvid' WHERE `tt_content`.`CType` LIKE 'cbfoundation_flexvid';
	UPDATE `tt_content` SET `CType` = 't3foundation_orbit' WHERE `tt_content`.`CType` LIKE 'cbfoundation_orbit';


Manually
--------

Please replace cb_foundation with t3foundation:

* Include Static Templates

* Constants

* Setup

If you have used t3foundation before, please update the include static template:

* Replace "Foundation framework [DEPRECATED!]" with "Foundation framework"

Replace cb_foundation content elements with the ones of t3foundation.
