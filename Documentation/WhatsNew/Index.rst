.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administrators_whatsnew:


You **MUST UPDATE** some XML-code. See :ref:`Gridelements <administrators_whatsnew-gridelements>` below.

What's new
==========


Features
--------


Backend Layouts
'''''''''''''''

Groups of backend layouts can disabled by the extension manager.

See: 

* :ref:`Administrators > Best practice > Layouts <administrators_bestpractice_layouts>`

* :ref:`Administrators > Setup > Extensionmanager > Backend Layout <administrators_setup_extensionmanager_backendlayout>`

* :ref:`Users > Best practice > Layouts > Basic <users_bestpractice_layouts_basic>`


.. _administrators_whatsnew-gridelements:


Bootstrap
'''''''''

Glyphicons are suppoprted. See:

  * :ref:`Bootstrap Glyphicons <administrators_bestpractice_frameworks_bootstrap>`



Gridelements
''''''''''''

Gridelements got the new properties:

* :ref:`CSS classes for columns <users_bestpractice_layouts_nested_sameheight>`

* :ref:`Same height for all columns <users_bestpractice_layouts_nested_sameheight>`

If you like to use the new features, **you MUST UPDATE the XML-code** for the gridelements flexforms. See details at

* :ref:`Upgrades > EXT:start > 5.3 > Gridelements <upgrades_start_5003000_gridelements>`

Because of new features wrapping of HTML-code is changed:

From version 5.3.0:

* <div class="row myClass">...</div>

Until version 5.2.5

* <div class="myClass"><div class="row">...</div></div>

Maybe **you MUST adapt your CSS** code.



Mega-Menü
'''''''''

* :ref:`Mega-Menu <users_bestpractice_navigation_megamenu>`


Module > Web: Start TYPO3
'''''''''''''''''''''''''

You can disable Start TYPO3 in Module > Web. See:

* :ref:`Users > Setup > Module <users_setup_modul>`

* :ref:`Administrators > Setup > Extensionmanager > Module <administrators_setup_extensionmanager_modul>`


Lightbox
''''''''

For

* tt_content

* tx_news

See :ref:`Lightbox <administrators_bestpractice_lightbox>`


Rich Text Editor
''''''''''''''''

New features

* search and replace

* Youtube plugin

See :ref:`Rich Text Editor > Search, spell check, youtube <administrators_bestpractice_rte_searchspellcheckyoutube>`


Manual
------

New sections

* :ref:`Kitchen sink <developers_kitchensink>`

* :ref:`Known Bugs <knownbugs>` 


User Interface (TypoScript Constant Editor)
-------------------------------------------


Graphical menu
''''''''''''''

[START - FOUNDATION - GMENU]: additional properties


Former Updates
--------------

.. toctree::
	:maxdepth: 2
	:titlesonly:

	4.x/Index