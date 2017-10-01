.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-errorhandling-enabling:


Enable Debug Mode
=================

Please move the TYPO3 debug settings from "live" to "debug".


With an accessible backend
--------------------------

* Modul System > Install

* Configuration Presets: Debug Settings

* [x] Debug

* Reload your backend

Please don't forget, to set the debug settings to "live" after the bug fixing.


Without an accessible backend
-----------------------------

Call the install-tool with the frontend url: http://your-domain.de/typo3/sysext/install/Start/Install.php

You must create the file ENABLE_INSTALL_TOOL in the directory typo3conf/

After login follow the steps from above.

