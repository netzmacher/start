<?php

use Netzmacher\Start\Backend\Extensions\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaSysfilemountsDisabled' )){
	return;
}

// #i0168, 180409, dwildt, +
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'enableMultiSelectFilterTextfield' ] = TRUE;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'maxitems' ] = 1;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'minitems' ] = 1;
$GLOBALS[ 'TCA' ][ 'sys_filemounts' ][ 'columns' ][ 'path' ][ 'config' ][ 'renderType' ] = 'selectMultipleSideBySide';
