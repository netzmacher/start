.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _knownbugs:


Known Bugs
==========


FileCollector::addFileObject()
------------------------------

Prompt
''''''

Argument 1 passed to TYPO3\CMS\Frontend\Resource\FileCollector::addFileObject() must implement interface TYPO3\CMS\Core\Resource\FileInterface, boolean given, called in .../typo3/sysext/frontend/Classes/Resource/FileCollector.php on line 118

Cause
'''''

Unproper configuration of a relation to a file.

Solution
''''''''

Probably the page resource media is linked with a file, which is deleted. Please
delete the relation at page resource media.