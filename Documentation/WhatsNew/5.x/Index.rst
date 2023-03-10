.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _administrators_whatsnew_5x:


5.x
===

Features
--------


Backend Layouts
'''''''''''''''

Groups of backend layouts can disabled by the extension manager.

See: 

* :ref:`Administrators > Best practice > Layouts <administrators_bestpractice_layouts_page>`

* :ref:`Administrators > Setup > Extensionmanager > Backend Layout <administrators_setup_extensionmanager_backendlayout>`

* :ref:`Users > Best practice > Layouts > Basic <users_bestpractice_layouts_page>`


.. _administrators_whatsnew-gridelements:


Bootstrap
'''''''''

Glyphicons are suppoprted. See:

  * :ref:`Bootstrap Glyphicons <administrators_bestpractice_frameworks_bootstrap>`



Effects
'''''''

Elements shake by a mouse over. See:

* :ref:`Effects <users_bestpractice_effects>`


Gridelements
''''''''''''

Gridelements got the new properties:

* :ref:`CSS classes for columns <users_bestpractice_layouts_element_sameheight>`

* :ref:`Same height for all columns <users_bestpractice_layouts_element_sameheight>`

If you like to use the new features, **you MUST UPDATE the XML-code** for the gridelements flexforms. See details at

* :ref:`Upgrades > EXT:start > 5.3 > Gridelements <upgrades_start_5003000_gridelements>`

Because of new features wrapping of HTML-code is changed:

From version 5.3.0:

* <div class="row myClass">...</div>

Until version 5.2.5

* <div class="myClass"><div class="row">...</div></div>

Maybe **you MUST adapt your CSS** code.


Indexed Search
''''''''''''''

Simplified form for Indexed Search. See

* :ref:`Administrators > Best Practise > Indexed Search <administrators_bestpractice_indexedsearch>`


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