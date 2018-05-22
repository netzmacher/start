.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _integrators_setup_privacy_forms:


Forms
=====

You can place a link to the page with the General Data Protection Regulation - GDPR (German: Datenschutz-Grundverordnung - DSGVO) to the bottom of each
form by TypoScript.

For example: You can add the TypoScript path from below to any Powermail TypoScript field.


Setup
-----


Constant Editor
^^^^^^^^^^^^^^^

* Category: START - PAGES

* GDPR/DSGVO: uid of the page with the GDPR/DSGVO


TypoScript snippet
^^^^^^^^^^^^^^^^^^

.. code:: php

  // path for a Powermail TypoScript field
  start.lib.gdpr_dsgvo
  // snippet for the extension TypoScript code (typoscript_code)
  10 < start.lib.gdpr_dsgvo