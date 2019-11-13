.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../../Includes.txt


.. _developers_kitchensink_pagemedia:


Page Media
==========

Start provides a snippet for adding a resource from a page everywhere in your TypoScript code.

The code samples below illustrates both:

* the ready-to-use snippet (template)

* the replace of content in the header section


Template
--------

* start.lib.pagemedia


.. code:: php

  start {
      // pagemedia
    lib =
    lib {
      pagemedia = FILES
      pagemedia {
        begin  = 0
        maxItems = 1
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
          } 
        }
      } 
    }
  }


Replacement of content in the header section
--------------------------------------------

Please refer to the line below:

* 30 < start.lib.pagemedia

.. code:: php

  start.structure.header.main.20.20 {
    // Remove both cells: Logo, Party/Organisation
    10 >
    20 >
    // Add an image of the page resource
    30 < start.lib.pagemedia
    30 {
      // Take the second image of the page ressource
      begin = 1
      renderObj.10.file {
        // Set the default value for the height to 100 pixel
        height = 100
        // Remove the default value for the width
        width >
      }
    }
    // Additional HTML div-wrap with class column
    wrap = <div class="row green-devision"><!-- start.structure.header.main.20 //--><div class="cols columns">|</div></div>
  }