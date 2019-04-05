.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt


.. _administrators_wahtsnew:


What's new
==========

If you update from smaller than 4.6.5 please respect the both **You MUST / You SHOULD**
at :ref:`4.6 <administrators_wahtsnew_4006000>`.


Features
--------

Background Image for Grid Elements
''''''''''''''''''''''''''''''''''

* :ref:`Users > Best Practice > Gridelements > Background Image <users_bestpractice_gridelements_backgroundimage>`


Bootstrap support for Grid Elements
'''''''''''''''''''''''''''''''''''

You have to include a the new static template only:

* Start [20.4.1] Gridelements (Bootstrap)


RTE with additional Features
''''''''''''''''''''''''''''

* Color Button. Details @ :ref:`Aministrators > Best Practice > RTE > Plugins <administrators_bestpractice_rte_plugins>`

* Spell checking. Details 

	* for :ref:`Aministrators <administrators_bestpractice_rte_spellcheck>`

	* for :ref:`Users <users_bestpractice_spellcheck>`


Width of columns by Constant Editor
'''''''''''''''''''''''''''''''''''

Backend layout: width of columns can configured by the Constant Editor. See

* :ref:`Administrators > Best Practice > Html > Column width <administrators_bestpractice_html_columnwidth>`



Improvements
------------


CSS
'''

CSS is improved: 

From 5.0

* .main .left, .main .main or .main .right

To 4.6:

* .maincontentleft, .maincontentmain, .maincontentright [DEPRECATED]



Margin columns are visible on mobile devices
''''''''''''''''''''''''''''''''''''''''''''

Backend layout: margin columns are displayed in small view too. CSS class "show-for-medium-up" is moved to "small-12".
If you don't like it, please configure

.. code:: php

  page.63148.start__[layout].settings { ... }


TypoScript
''''''''''

If you are using own fluid templates, please note #i0224 in the `ChangeLog <https://gitlab.die-netzmacher.de/typo3/start/blob/master/ChangeLog>`_

Former Updates
--------------

.. toctree::
	:maxdepth: 2
	:titlesonly:

	4.6/Index
	4.5/Index
	4.4/Index
	4.2/Index