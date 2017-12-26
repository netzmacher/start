.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_cssstyledcontent:


CSS Styled Content
==================

The extension is deprecated.

You can update the values by thge SQL statements from below or manually. 


SQL Statement
-------------

SELECT
^^^^^^

Get all records with an included static template CSS Styled Content (css_styled_content):

.. code:: php

	SELECT `uid`, `pid`, `title`, `include_static_file` 
	FROM `sys_template` 
	WHERE `include_static_file` LIKE '%EXT:css_styled_content/Configuration/TypoScript/%'

UPDATE
^^^^^^

.. code:: php

	UPDATE `sys_template` 
	SET `include_static_file` = REPLACE(`include_static_file`, 'EXT:css_styled_content/Configuration/TypoScript/', 'EXT:fluid_styled_content/Configuration/TypoScript/,EXT:fluid_styled_content/Configuration/TypoScript/Styling/')
	WHERE `include_static_file` LIKE '%EXT:css_styled_content/Configuration/TypoScript/%'


Manually
--------

Please use Fluid Styled Content:

* Enable the extension Fluid Styled Content

* Update your TypoScript

  * Replace CSS Styled Content by Fluid Styled Content

* Disable the extension CSS Styled Content