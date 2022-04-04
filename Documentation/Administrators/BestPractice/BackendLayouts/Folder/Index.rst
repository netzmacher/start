.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../../Includes.txt


.. _administrators_bestpractice_backendlayouts_folder:


Layout for folders
==================

EXT:start provides a layout for folder. This layout has the content area only.

If you like to set all pages of the doktype folder but module dmail to the backend layout folder,
you can use the SQL statement from below.

Please make a backup of your pages table before run the update statement from below.


Analysis
--------

.. code:: php

	-- Count all modules from pages of doktype folder but module dmail
	SELECT count(module), module FROM pages 
	WHERE doktype = 254 
	AND module != 'dmail'
	GROUP BY module;

	-- Count all backend_layouts from pages of doktype folder but module dmail
	SELECT count(backend_layout), backend_layout FROM pages 
	WHERE doktype = 254 
	AND module != 'dmail'
	GROUP BY backend_layout;

	-- Display all pages of doktype folder but module dmail
	SELECT uid, module, backend_layout, title FROM pages 
	WHERE doktype = 254 
	AND module != 'dmail'
	ORDER BY module, backend_layout, title, uid;


Update
------

.. code:: php

	-- Update all pages of doktype folder but module dmail to backend_layout folder
	UPDATE pages 
	SET backend_layout = 'start__folder' 
	WHERE doktype = 254
	AND module != 'dmail';


Further Information
-------------------

* :ref:`Extensionmanager <administrators_setup_extensionmanager_backendlayout>`

* :ref:`HTML > Columns width <administrators_bestpractice_html_columnwidth>`