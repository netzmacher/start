.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_spacebeforeafter:


Space before and after
======================

The properties space before and space after of tt_content elements will lost.

They will replaced by the space_before_class and the space_after_class.

It's possible to update this changing by SQL statements from below.

Condition
---------

Yyou don't must remove the fields while updating (comparing) the database:

* spaceBefore

* spaceAfter

Workflow
--------

The spaceBefore and the spaceAfter could not replace one to one. The cause is:
spaceBefore and spaceAfter stored pixel values, the properties space_before_class
and space_after_class stores one of five classes.

These are the five classes:

* extra-small: 1em (16px)

* small: 2em (32px)

* medium: 3em (48px)

* large: 4em (64px)

* extra large: 5em (80px)

The SQL statement from below will "translate" pixel values to classes:

* from 0px to 7px: null

* from 8px to 25px: extra-small (1em)

* from 26px to 39px: small (2em)

* from 40px to 55px: medium (3em)

* from 56px to 71px: large (4em)

* from 72px to unlimited: extra-large (4em)


SQL Statement
-------------

SELECT
^^^^^^

Get all records with spaceBefore or spaceAfter values:

.. code:: php

	SELECT `uid`, `pid`, `header`, `spaceAfter`, `spaceBefore`
	FROM `tt_content` 
	WHERE `spaceAfter` > 0 OR `spaceBefore` > 0; 

UPDATE
^^^^^^

.. code:: php

	UPDATE `tt_content` 
	SET `space_after_class` = 'extra-small'
	WHERE `spaceAfter` >= 8 AND `spaceAfter` <= 25;
	UPDATE `tt_content` 
	SET `space_after_class` = 'small'
	WHERE `spaceAfter` >= 26 AND `spaceAfter` <= 39;
	UPDATE `tt_content` 
	SET `space_after_class` = 'medium'
	WHERE `spaceAfter` >= 40 AND `spaceAfter` <= 55;
	UPDATE `tt_content` 
	SET `space_after_class` = 'large'
	WHERE `spaceAfter` >= 56 AND `spaceAfter` <= 71;
	UPDATE `tt_content` 
	SET `space_after_class` = 'extra-large'
	WHERE `spaceAfter` >= 72;
	UPDATE `tt_content` 
	SET `space_before_class` = 'extra-small'
	WHERE `spaceBefore` >= 8 AND `spaceBefore` <= 25;
	UPDATE `tt_content` 
	SET `space_before_class` = 'small'
	WHERE `spaceBefore` >= 26 AND `spaceBefore` <= 39;
	UPDATE `tt_content` 
	SET `space_before_class` = 'medium'
	WHERE `spaceBefore` >= 40 AND `spaceBefore` <= 55;
	UPDATE `tt_content` 
	SET `space_before_class` = 'large'
	WHERE `spaceBefore` >= 56 AND `spaceBefore` <= 71;
	UPDATE `tt_content` 
	SET `space_before_class` = 'extra-large'
	WHERE `spaceBefore` >= 72;

In case of a database dump
---------------------------

Get all records with spaceBefore or spaceAfter values:

.. code:: php

	SELECT `uid`, `pid`, `header`, `spaceAfter`
	FROM `tt_content` 
	WHERE `spaceAfter` > 0;

Export the result to a table like Excel or Libre Office calc. You find a draft 
with a ready-to-use formular for a SQL update here: `spaceAfter.ods <spaceAfter.ods>`_

.. code:: php

	SELECT `uid`, `pid`, `header`, `spaceBefore`
	FROM `tt_content` 
	WHERE `spaceBefore` > 0; 

