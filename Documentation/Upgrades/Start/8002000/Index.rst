.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _upgrades_start_8002000:


8.2
===

8.0.28

**New behaviour:** If left or right columns are empty, an empty placeholder will set with 1px height.
That <div> affects, that the empty column will displayed in full width.

**If you don't like this effect,** please add this property to your CSS file:

.. code:: php

  .startVisHiddenHeight1 { display: none; }


TypoScript

**If you have configured the TypoScript properties from below, YOU MUST update your configuration!**

.. code:: php

  start.structure.content.left.20 is moved from CONTENT to COA
  start.structure.content.right.20 is moved from CONTENT to COA