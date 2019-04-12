.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _upgrades_typo3-76-87_extensions_slick:


Slick
=====

You have to inlude the static template again.

You can do the job by SQL statements or manually.


SQL Statement
-------------

SELECT
^^^^^^

Get all records with an included static template of Slick - responsive Carousel Slider (slick):

.. code:: php

	SELECT `uid`, `pid`, `title`, `include_static_file` 
	FROM `sys_template` 
	WHERE `include_static_file` LIKE '%EXT:slick%'

UPDATE
^^^^^^

.. code:: php

	-- replace the base template
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:slick/Configuration/TypoScript/7.6/', 'EXT:slick/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:slick/Configuration/TypoScript/7.6/%';
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:slick/Configuration/TypoScript/Base', 'EXT:slick/Configuration/TypoScript/Default/')
	WHERE `include_static_file` LIKE '%EXT:slick/Configuration/TypoScript/Base%';
	-- remove non needed include static templates
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:slick/Configuration/TypoScript/Carousel', '')
	WHERE `include_static_file` LIKE '%EXT:slick/Configuration/TypoScript/Carousel%';
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:slick/Configuration/TypoScript/Item', '')
	WHERE `include_static_file` LIKE '%EXT:slick/Configuration/TypoScript/Item%';
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:slick/Configuration/TypoScript/RemoveLLATag', '')
	WHERE `include_static_file` LIKE '%EXT:slick/Configuration/TypoScript/RemoveLLATag%';
	-- clean up double comma (repeat it!)
	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, ',,', ',')
	WHERE `include_static_file` LIKE '%,,%';


Manually
--------

Look for Slick templates:

* Include the static template again.