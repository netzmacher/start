.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administrators_wahtsnew:

What's new
==========

Respect the **You MUST** in sections bewlow!


Constant Editor: width of columns 
---------------------------------

4.6.6

Backend layout: width of columns can configured by the Constant Editor. See

* :ref:`Administrators > Best Practice > Html > Column width <administrators_bestpractice_html_columnwidth>`


Margin columns are visible on mobile devices
--------------------------------------------

4.6.6

Backend layout: margin columns are displayed in small view too. CSS class "show-for-medium-up" is moved to "small-12".
If you don't like it, please configure

.. code:: php

  page.63148.start__[layout].settings { ... }


Bugfix columns confusion with three column gridelement
------------------------------------------------------

4.6.5

**You MUST**

* update your database (see: :ref:`SQL statements <administrators_upgrades_workarounds_i0215_sql>`)

* or include a static template, to continue with non fixed gridelements (see: :ref:`Start [92.1.1] +Workaround ChangeLog #i0215 <administrators_upgrades_workarounds_i0215_template>`)


Gridelement will display its header
-----------------------------------

4.6.4

**You MUST**

* update your database (see: :ref:`SQL statements <administrators_upgrades_workarounds_i0214>`)


New content element Page Media
------------------------------

4.6.0

Display images of page resources media field. See

* :ref:`Administrators > Best Practice > Page Media <administrators_bestpractice_pagemedia>`

* :ref:`Users > Best Practice > Page Media <users_bestpractice_pagemedia>`


Former Updates
--------------

.. toctree::
	:maxdepth: 2
	:titlesonly:

	4.5/Index
	4.4/Index
	4.2/Index