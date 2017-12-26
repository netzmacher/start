.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _integrators_upgrades_typo3-76-87_goodtoknow:

Good to know
============

The properties space before and space after of tt_content elements will lost.

They will replaced by the spaceBefore_class and the spaceAfter_class.

Tipp
----

If you update the database (compare database), don't remove the fields:

* spaceBefore

* spaceAfter

Than it is possible to find content elements, which should updated manually.