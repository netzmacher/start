<?php

// #i0168, 180409, dwildt, +

$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'enableMultiSelectFilterTextfield' ] = TRUE;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'maxitems' ] = 1;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'minitems' ] = 1;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'renderType' ] = 'selectMultipleSideBySide';
