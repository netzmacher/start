.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _integrators-newsletter_modal:


Popup (Modal)
=============

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

* Modul > Web > Templates

* Page tree: root page

* Edit aera:

  * [Constanten Editor]

  * Category: [START - PAGES]

    * Newsletter: uid of the page with the newsletter subscription form

  * Category: [START - FOUNDATION - NEWSLETTER]

    * Popup: enabled