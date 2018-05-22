.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _integrators_installation_classic_gridelements:

Gridelements
============

You don't need to enter the needed gridelements manually :) but half automatically.

- Add a folder for grid layouts. For example

  - Grid Layouts

- Create backend layouts (use it only, if your table tx_gridelements_backend_layout is empty!)

  - edit typo3conf/ext/start/ext_tables_static+adt.sql

  - replace 'xyz' with the page id of your folder "backend layouts" from above

  - Copy the SQL statements from the file and paste it into PhpMyAdmin

  - Send the SQL statements

- Create backend layouts icons

  - Copy the icons to the tx_gridelements folder in uploads:

.. code:: php

  cp -aR typo3conf/ext/start/Resources/Public/uploads/tx_gridelements/* uploads/tx_gridelements/

Check the content of your folder "backend layouts". It should contain 8 backend layouts.

TYPO3 8.7
---------

The needed extension Gridelements 8.x isn't published in the TER currently.

You must download it from the Git-repository at

- https://github.com/TYPO3-extensions/gridelements

Downlaod Zip-File
^^^^^^^^^^^^^^^^^

- https://github.com/TYPO3-extensions/gridelements/archive/master.zip