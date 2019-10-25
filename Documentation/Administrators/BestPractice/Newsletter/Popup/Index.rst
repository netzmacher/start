.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_bestpractice_newsletter_popup:


Popup
=====

Popup, which contains the newsletter subscription form (or any other content).

The popup appears on exit intent: if the mouse leaves the window, which contains
the website. Website must loaded 5 seconds before at least.


Conditions
----------

* The uid of the page must be set, which contains the newsletter subscription form
  (or the content of any other page).


Setup
-----


Include Static Template
^^^^^^^^^^^^^^^^^^^^^^^

* [Start [20.2.1] Newsletter Popup]


Constant Editor
^^^^^^^^^^^^^^^

* Module > Web > Templates

* Page tree: root page

* Edit area:

  * [Constanten Editor] > Category: [START - NEWSLETTER - POPUP - ON EXIT INTENT]


CSS
^^^

See @ :ref:`Administrators > First Steps > Modals > CSS <administrators_firststeps_modals_css>`
