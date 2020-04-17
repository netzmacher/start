.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administrators_whatsnew:


What's new
==========


Grid Elements
-------------

6.0.0

* Accordions and tabs can now represent any content element. And they can be nested with themselves.
  Until now, only the text element for accordions and tabs was possible.

* Grid elements have ID labels instead of uids, are ready to use and no longer require 
  configuration records in the database.

**BUT YOU SHOULD UPGRADE RECORS IN YOUR DATABASE**: See section 

* :ref:`Upgrades > EXT:start > 6.0 > Grid Elements <upgrades_start_6000000_gridelements>`


HTML title tag
--------------

6.0.2

The title tag consists of the name of the current page and the name of the root page.
Users can set up the title tag themselves.

So far, the first part was set up with TypoScript and users could not change this value.

See

* :ref:`Administrators <administrators_bestpractice_layouts_website>`

* :ref:`Users <users_bestpractice_layouts_website>`


Former Updates
--------------

.. toctree::
	:maxdepth: 2
	:titlesonly:

	5.x/Index
	4.x/Index