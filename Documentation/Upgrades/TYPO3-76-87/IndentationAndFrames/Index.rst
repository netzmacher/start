.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _administrators_upgrades_typo3-76-87_indentationandframes:


Indentation and Frames
======================

The CSS for panels was controlled in TYPO3 upto 7.x here:

- content element > Appearance > Indentation and Frames

The CSS for panels is controlled in TYPO3 from 8.x here:

- content element > General > Additional CSS

You can update the values by the SQL statements from below or manually. 


SQL Statement
-------------

SELECT
^^^^^^

Get all records with custom configuration of the frame class:

.. code:: php

	-- different extensions
	SELECT `uid`, `pid`, `header`, `frame_class`, `CType`, `tx_start_additionalclassdefined` 
	FROM `tt_content` 
	WHERE `frame_class` LIKE 'custom-%'

UPDATE
^^^^^^

.. code:: php

	-- extension leaflet
	UPDATE `tt_content` 
	SET `frame_class` = 'none' 
	WHERE `tt_content`.`frame_class` LIKE 'custom-331';

	-- extension slick
	UPDATE `tt_content` 
	SET `frame_class` = 'none' 
	WHERE `tt_content`.`frame_class` LIKE 'custom-62474';
	UPDATE `tt_content` 
	SET `frame_class` = 'default' 
	WHERE `tt_content`.`frame_class` LIKE 'custom-62475';
	UPDATE `tt_content` 
	SET `frame_class` = 'none' 
	WHERE `tt_content`.`frame_class` LIKE 'custom-62476';

	-- extension start
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'startImgCircle')
	WHERE `frame_class` LIKE 'custom-86';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'startWoPadding')
	WHERE `frame_class` LIKE 'custom-87';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'startWoPaddingLeft')
	WHERE `frame_class` LIKE 'custom-88';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'startWoPaddingRight')
	WHERE `frame_class` LIKE 'custom-89';

	-- extension startgreen
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenBlue')
	WHERE `frame_class` LIKE 'custom-2861';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenBlueLight')
	WHERE `frame_class` LIKE 'custom-2862';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenMagenta')
	WHERE `frame_class` LIKE 'custom-2863';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenMagentaLight')
	WHERE `frame_class` LIKE 'custom-2864';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenGreen')
	WHERE `frame_class` LIKE 'custom-2865';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenGreenDark')
	WHERE `frame_class` LIKE 'custom-2866';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenYellow')
	WHERE `frame_class` LIKE 'custom-2867';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenYellowDark')
	WHERE `frame_class` LIKE 'custom-2868';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenWhite')
	WHERE `frame_class` LIKE 'custom-2869';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel','startgreenWhiteShadow')
	WHERE `frame_class` LIKE 'custom-2870';

	-- extension t3foundation
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel')
	WHERE `frame_class` LIKE 'custom-100';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel radius')
	WHERE `frame_class` LIKE 'custom-101';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel callout')
	WHERE `frame_class` LIKE 'custom-102';
	UPDATE `tt_content` 
	SET `frame_class` = 'default', `tx_start_additionalclassdefined` = CONCAT_WS(',', `tx_start_additionalclassdefined`, 'panel callout radius')
	WHERE `frame_class` LIKE 'custom-103';

Manually
--------

If you have used the property "Indentation and Frames" you must update the "Additional CSS" manually.