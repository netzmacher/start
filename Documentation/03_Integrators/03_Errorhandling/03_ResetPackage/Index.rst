.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-errorhandling-resetpackage:


Reset a Package
===============

If there is a prompt in context with an extension (package), you can disable this extension manually.

Please

* edit the file typo3conf/PackageManager.php

* look for the extension and

* move the state from active to inactive

* :ref:`clear the cache <integrators-errorhandling-cache>`

Your extension-manager should run proper now.