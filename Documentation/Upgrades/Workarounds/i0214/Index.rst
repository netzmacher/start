.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _upgrades_workarounds_i0214:


ChangeLog #i0214
================

Grid Elements will display the header.

If you like to set all headers to hiden, please use the SQL statements from below.


SQL Statements
--------------

.. code:: php

  -- Get all gridelements, which will display its header
  SELECT uid, pid, header, header_layout FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND header_layout <> 100;


.. code:: php

  -- Set the header of all gridelements to hidden
  UPDATE `tt_content` SET header_layout = 100 WHERE `CType` LIKE 'gridelements_pi1';
  -- Get all gridelements, which will display its header
  SELECT uid, pid, header, header_layout FROM `tt_content` WHERE `CType` LIKE 'gridelements_pi1' AND header_layout <> 100;
