<?php

use Netzmacher\Start\Backend\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaBegroupsDisabled' )){
	return;
}

// #i0168, 180409, dwildt, +

$GLOBALS[ 'TCA' ][ 'be_groups' ][ 'columns' ][ 'file_mountpoints' ][ 'config' ][ 'enableMultiSelectFilterTextfield' ] = TRUE;
$GLOBALS[ 'TCA' ][ 'be_groups' ][ 'columns' ][ 'subgroup' ][ 'config' ][ 'enableMultiSelectFilterTextfield' ] = TRUE;