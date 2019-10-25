.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_bestpractice_newsletter_modal:


Dialog
======

Start opens a popup (modal) to point to the newsletter subscription form. 

The popup opens after 10 seconds. If the user clicks a button, the popup won't never open again.
If the user is clearing a corresponding cookie, the popup will open again.


Conditions
----------

* The uid of the page is set, which contains the newsletter subscription form.

* The popup is enabled.


Setup
-----

Constant Editor
^^^^^^^^^^^^^^^

* Module > Web > Templates

* Page tree: root page

* Edit area:

  * [Constanten Editor]

  * Category: [START - PAGES]

    * Newsletter: uid of the page with the newsletter subscription form

  * Category: [START - FOUNDATION - NEWSLETTER]

    * Popup: enabled

CSS
^^^

See @ :ref:`Administrators > First Steps > Modals > CSS <administrators_firststeps_modals_css>`
