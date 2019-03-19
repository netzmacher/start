.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_upgrades_workarounds_i0215_sql:


SQL Statements
==============

Please fix the bug of columns confusion in grid elements with three columns.

You can run Start **without executing the SQL statements** from below.

**But then you MUST include a static template**, to run a proper Start extension
with the former behaviour. See: :ref:`Include the static template <administrators_upgrades_workarounds_i0215_template>`

Backup tables
-------------

Please backup the database tables

* tt_content

* tx_gridelements_backend_layout


Statements
----------


SELECT
''''''

.. code:: php

  -- Find all Gridelements wiih three columns and one row
  SELECT uid, pid, title, description, config FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%'

.. code:: php

  -- Find all Content Eelements with CType gridelements_pi1 and the three columns grid layout
  CREATE TEMPORARY TABLE gridLayoutColumns03 SELECT uid FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%';
  SELECT uid, pid, header, tx_gridelements_backend_layout FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND tx_gridelements_backend_layout IN(SELECT uid FROM gridLayoutColumns03);

.. code:: php

  -- Find all Content Elements, which are a three columns grid layout
  CREATE TEMPORARY TABLE gridLayoutColumns03 SELECT uid FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%';
  CREATE TEMPORARY TABLE gridElementColumns03 SELECT uid FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND tx_gridelements_backend_layout IN(SELECT uid FROM gridLayoutColumns03);
  SELECT uid, pid, header, tx_gridelements_backend_layout FROM tt_content WHERE uid IN(SELECT uid FROM gridElementColumns03);

.. code:: php

  -- Find all Content Elements, which are part of a three columns grid layout
  CREATE TEMPORARY TABLE gridLayoutColumns03 SELECT uid FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%';
  CREATE TEMPORARY TABLE gridElementColumns03 SELECT uid FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND tx_gridelements_backend_layout IN(SELECT uid FROM gridLayoutColumns03);
  CREATE TEMPORARY TABLE contentForColumns03 SELECT uid FROM tt_content WHERE uid IN(SELECT uid FROM gridElementColumns03);
  SELECT uid, pid, header, tx_gridelements_backend_layout, tx_gridelements_container, tx_gridelements_columns FROM tt_content WHERE tx_gridelements_container IN(SELECT uid FROM contentForColumns03);


UPDATE
''''''

.. code:: php

  -- Update columns configuration in all Gridelements wiih three columns and one row
  CREATE TEMPORARY TABLE gridLayoutColumns03 SELECT uid FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%';
  UPDATE tx_gridelements_backend_layout SET config = REPLACE(config, 'colPos = 0', 'colPos = x') WHERE uid IN(SELECT uid FROM gridLayoutColumns03);
  UPDATE tx_gridelements_backend_layout SET config = REPLACE(config, 'colPos = 1', 'colPos = 0') WHERE uid IN(SELECT uid FROM gridLayoutColumns03);
  UPDATE tx_gridelements_backend_layout SET config = REPLACE(config, 'colPos = x', 'colPos = 1') WHERE uid IN(SELECT uid FROM gridLayoutColumns03);
  SELECT uid, pid, title, description, config FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%'

.. code:: php

  -- Update all Content Elements, which are part of column 0 or column 1 of a three columns grid layout
  CREATE TEMPORARY TABLE gridLayoutColumns03 SELECT uid FROM `tx_gridelements_backend_layout` WHERE config LIKE '%colCount = 3%' AND config LIKE '%rowCount = 1%';
  CREATE TEMPORARY TABLE gridElementColumns03 SELECT uid FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND tx_gridelements_backend_layout IN(SELECT uid FROM gridLayoutColumns03);
  CREATE TEMPORARY TABLE contentForColumns03 SELECT uid FROM tt_content WHERE uid IN(SELECT uid FROM gridElementColumns03);
  UPDATE tt_content SET tx_gridelements_columns = 999 WHERE tx_gridelements_columns = 0 AND tx_gridelements_container IN(SELECT uid FROM contentForColumns03);
  UPDATE tt_content SET tx_gridelements_columns = 0 WHERE tx_gridelements_columns = 1 AND tx_gridelements_container IN(SELECT uid FROM contentForColumns03);
  UPDATE tt_content SET tx_gridelements_columns = 1 WHERE tx_gridelements_columns = 999 AND tx_gridelements_container IN(SELECT uid FROM contentForColumns03);
  SELECT uid, pid, header, tx_gridelements_backend_layout, tx_gridelements_container, tx_gridelements_columns FROM tt_content WHERE tx_gridelements_container IN(SELECT uid FROM contentForColumns03);