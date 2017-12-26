.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_header:

Headers
=======

Fluid Styled Content changes the behaviour of header layouts:

* If a header has the default value, it will get the class for a header with layout 2

* Former behaviour was layout 1


SQL Statement
-------------

SELECT
^^^^^^

.. code:: php

	SELECT `uid`, `pid`, `header`, `header_layout` FROM `tt_content` WHERE `header_layout` = '0'

UPDATE
^^^^^^

.. code:: php

	UPDATE `tt_content` SET `header_layout` = '1' WHERE `tt_content`.`header_layout` = '0'