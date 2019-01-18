.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_installation_classic_start:

Start
=====

New Website
-----------

Add a TypoScript template to your root page.

Existing Website
----------------

Disable / hide the TypoScript template of your root page.

Both – existing and New Website
-------------------------------

Take your TypoScript root template:

- Options

  - Clear: [X] Constants, [X] Setup

  - Rootlevel: [X]

- Include the static templates

	- Fluid Styled Content (fluid_styled_content) or CSS Styled Content (css_styled_content)
	
	- Gridelements (gridelements)
	
	- Foundation framework (t3foundation)

	- Start [1] (start)

	- Start [1] +Gridelements (start)

	- Start [2] Foundation (start)

	- Start [2] +Foundation Icons 3 (start)

	- Start Customer (startcustomer)  <- if you like to start with a ready-to-use-theme and if you have installed Start TYPO3 Responsive +Customer (startcustomer)

- Configure some base properties like the base URL and language properties with the Constant Editor.
  See: category [START - CONFIG]

- Configure the pid of your root page with the Constant Editor.
  See: category [START - PAGES] > field: Root page: Your root page id 