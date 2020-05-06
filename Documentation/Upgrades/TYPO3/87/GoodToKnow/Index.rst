.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. __upgrades_TYPO3_87_goodtoknow:

Good to know
============

The properties space before and space after of tt_content elements will be lost.

They will be replaced by the spaceBefore_class and the spaceAfter_class.

Tipp
----

If you update the database (compare database), don't remove the fields:

* spaceBefore

* spaceAfter

Then it is possible to find content elements, which should be updated manually.