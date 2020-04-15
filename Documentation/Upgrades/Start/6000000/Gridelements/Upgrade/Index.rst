.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_6000000_gridelements_upgrade:


Upgrade
=======


Backup tt_content
-----------------

Before you start: 

Backup your table tt_content.


Use case
--------

=======================  ========  ==============  ===============================================================================================================================================================
Element                  Uid Srce  Uid Dest        SQL Statement
=======================  ========  ==============  ===============================================================================================================================================================
Start: Columns 1         1         startCol01      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol01' WHERE `tx_gridelements_backend_layout` = '1';
Start: Columns 2         2         startCol02      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol02' WHERE `tx_gridelements_backend_layout` = '2';
Start: Columns 3         3         startCol03      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol03' WHERE `tx_gridelements_backend_layout` = '3';
Start: Columns 4         4         startCol04      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol04' WHERE `tx_gridelements_backend_layout` = '4';
Start: Columns 5         5         startCol05      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol05' WHERE `tx_gridelements_backend_layout` = '5';
Start: Columns 6         6         startCol06      UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startCol06' WHERE `tx_gridelements_backend_layout` = '6';
Start: Accordion & Tabs  11        startAccordion  UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startAccordion' WHERE `tx_gridelements_backend_layout` = '11' AND `pi_flexform` LIKE '%accordion%';
Start: Accordion & Tabs  11        startTab        UPDATE `tt_content` SET `tx_gridelements_backend_layout` = 'startTab' WHERE `tx_gridelements_backend_layout` = '11' AND `pi_flexform` NOT LIKE '%accordion%';
=======================  ========  ==============  ===============================================================================================================================================================



If query from above will display the tx_gridelements_backend_layout uids 2, 3 and 5,
the query from below will be the one for get the corresponding grid elements.

.. code:: php

  -- For updating
  SELECT `uid`, `pid`, `title`
  FROM `tx_gridelements_backend_layout`
  WHERE `uid` IN (2,3,5)

  -- For analysing
  SELECT `uid`, `pid`, `title`
  FROM `tx_gridelements_backend_layout`

Possible result can be:

* 3: "Start: Columns 2"

* 5: "Start: Columns 4"

* 8: "Start: Accordion or Tab"


Update
^^^^^^

.. code:: php

  -- For columns
  UPDATE `tt_content` 
  SET `tx_gridelements_backend_layout` = 'startCol02'
  WHERE `tx_gridelements_backend_layout` = 3
  AND `CType` LIKE 'gridelements_pi1'
  -- AND `pid` = 5813

  -- For accordions and tabs
  UPDATE `tt_content` 
  SET `tx_gridelements_backend_layout` = 'startCol02'
  WHERE `tx_gridelements_backend_layout` = 3
  AND `CType` LIKE 'gridelements_pi1'
  -- AND `pid` = 5813