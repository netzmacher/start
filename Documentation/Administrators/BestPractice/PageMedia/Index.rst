.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _administrators_bestpractice_pagemedia:


Page Media
==========

If there is any need to adapt the content element "Page Media" to your needs, please 
setup the TypoScript code from below.

Setup
-----

.. code:: php

	tt_content {
		txStartPagemedia = FILES
		txStartPagemedia {
			references {
				data = levelmedia:-1, slide
			}
			renderObj = COA
			renderObj {
				10 = IMAGE
				10 {
					file {
						crop.data = file:current:crop
						import {
							data = file:current:publicUrl
						}
						height = {$start.lib.pagemedia.height}
						width = {$start.lib.pagemedia.width}
					}
					stdWrap.typolink.parameter.data = file:current:link
					begin = 0
					maxItems = 1
				} 
			}
		} 
	}