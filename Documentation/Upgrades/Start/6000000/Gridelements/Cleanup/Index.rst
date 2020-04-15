.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _upgrades_start_6000000_gridelements_cleanup:


Clean Up
========

You should remove all records from the table tx_gridelements_backend_layout. 
**Otherwise, users can still select the outdated grid elements.**


Backup tx_gridelements_backend_layout
-------------------------------------

Before you start: **backup your table tx_gridelements_backend_layout**.


List configured grid elements
-----------------------------

.. code:: php

  SELECT `uid`, `pid`, `title`
  FROM `tx_gridelements_backend_layout`


Remove configured grid elements
-----------------------------

.. code:: php

  DELETE FROM `tx_gridelements_backend_layout`