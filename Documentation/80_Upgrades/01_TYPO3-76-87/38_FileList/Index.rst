.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_filelist:

File List
=========

Fluid Styled Content changes the behaviour of the layouts of file lists:

* Layout was configured by "layout", now it is configured by "uploads_type"


SQL Statement
-------------

SELECT
^^^^^^

.. code:: php

	SELECT `uid`, `pid`, `header`, `layout`, `uploads_type` FROM `tt_content` WHERE `layout` > 0

UPDATE
^^^^^^

.. code:: php

	UPDATE `tt_content` SET `uploads_type` =  `layout` WHERE `uploads_type` = 0 AND `layout` > 0