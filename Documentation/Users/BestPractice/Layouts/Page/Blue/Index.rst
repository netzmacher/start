.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../../Includes.txt


.. _users_bestpractice_layouts_page_blue:


Blue
====

.. figure:: typo3_start_backend-layouts_blue.jpg
	:width: 600px
	:alt: The Start Blue backend-layouts

	The Start Blue backend-layouts


Profile
-------

Blue templates are simple templates with

* fixed with for the content area

* and full width (100 per cent) for the blue top and bottom row


Areas
-----


Grey
''''

Header and footer. Inheritance on subpages when the header or footer on subpages is empty.


Blue
''''

Margin areas. Inheritance on subpages when the same area on subpages is empty.
Full width (100 per cent).


Red
'''

Content area. No inheritance on subpages. Fixed width.


Light red
'''''''''

Margin areas. Inheritance on subpages when the same area on subpages is empty.
Fixed width.


Setup
-----


Page Properties
'''''''''''''''

You select a backend-layout at

* Module > Web: page

* Edit page properties

* Tab [Appaerance]


Extensionmanager
''''''''''''''''
If bronze layouts are visible and selectable in the backend, is crontrolled by
the administrator and the extension manager. See

* :ref:`Extensionmanager > Backend layout <administrators_setup_extensionmanager_backendlayout>`


Constant Editor
'''''''''''''''

The administrator can add and change CSS classes of rows by the Constant Editor. See

* :ref:`Administrators > Best practice > Layouts <administrators_bestpractice_layouts_page>`