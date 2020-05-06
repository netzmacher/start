.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. __upgrades_TYPO3_87_table:

Table
=====

Tables of Fluid Styled Content has the new property table_delimiter.

You have to enter the value "| pipe".


SQL Statement
-------------

SELECT
^^^^^^

.. code:: php

	SELECT `uid`, `pid`, `header`, `table_delimiter` FROM `tt_content` WHERE `CType` = 'table' AND `table_delimiter` = 0

UPDATE
^^^^^^

.. code:: php

	-- table_delimiter: 124 equates to pipe
	UPDATE `tt_content` SET `table_delimiter` =  124 WHERE `CType` = 'table' AND `table_delimiter` = 0