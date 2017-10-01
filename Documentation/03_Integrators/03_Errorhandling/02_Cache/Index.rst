.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-errorhandling-cache:


Clear Cache
===========

TYPO3 has several caches:

* some tables in the database

* a lot of files at typo3temp/Cache

Sometimes occures a cache confusion, the cache isn't up to date and affects bugs.

Please clear the cache in every case of a bug.


Database
--------

Click on all available thunderbold-icons in the backend.


File Cache
----------

Please remove all files and directories from typo3temp/Cache.
But don't remove the folder Cache!


Reset a Package
---------------

Sometimes you have to :ref:`reset a package <integrators-errorhandling-resetpackage>` too.