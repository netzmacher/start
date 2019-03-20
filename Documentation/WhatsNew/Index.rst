.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administrators_wahtsnew:

What's new
==========

Respect the both **You MUST / You SHOULD** below!


Bugfix columns confusion
------------------------

There was a columns confusion with the three columns gridelement. The bug is solved, but

**You MUST**

* update your database (see: :ref:`SQL statements <administrators_upgrades_workarounds_i0215_sql>`)

* or include a static template, to continue with non fixed gridelements (see: :ref:`Start [92.1.1] +Workaround ChangeLog #i0215 <administrators_upgrades_workarounds_i0215_template>`)


Feature: Gridelement will display header
----------------------------------------

**You SHOULD**

* update your database (see: :ref:`SQL statements <administrators_upgrades_workarounds_i0214>`)


Feature: Width of columns Constant Editor
-----------------------------------------

Backend layout: width of columns can configured by the Constant Editor. See

* :ref:`Administrators > Best Practice > Html > Column width <administrators_bestpractice_html_columnwidth>`


Feature: Spell checking while writing
------------------------------------

Start supports spell checking while writing. You have to include a page 
TypoScript at the root page only. See

* :ref:`Aministrators > Best Practice > Spell check <administrators_bestpractice_spellcheck>`


Improvement: Margin columns are visible on mobile devices
---------------------------------------------------------

Backend layout: margin columns are displayed in small view too. CSS class "show-for-medium-up" is moved to "small-12".
If you don't like it, please configure

.. code:: php

  page.63148.start__[layout].settings { ... }


Former Updates
--------------

.. toctree::
	:maxdepth: 2
	:titlesonly:

	4.6/Index
	4.5/Index
	4.4/Index
	4.2/Index