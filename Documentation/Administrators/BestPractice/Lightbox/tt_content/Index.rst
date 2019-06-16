.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_bestpractice_lightbox_ttcontent:


API (tt_content)
================

Start TYPO3 Responsive can extend tt_content elements images and images/text with
a responsive lightbox feature.

This feature is based on the responsive framework Foundation.


Setup
-----

* Constant Editor > category: [START - TEMPLATES - IMAGE - FOUNDATION]

* [X] Enable Lightbox: Images will rendered as clearing-thumbs


Caution!
--------

If you enable the lightbox property from above, the HTML of all images (tt_content) 
of the entire webiste will changed.

If you have any unexpected behaviour, please disable the lightbox property.
