<?php

use Netzmacher\Start\Backend\Extensionmanager;

// #i0180, 180622, dwildt, 3+
if( Extensionmanager::getProperty( 'tcaBeusersDisabled' )){
	return;
}

// #i0168, 180409, dwildt, +

$GLOBALS[ 'TCA' ][ 'be_users' ][ 'columns' ][ 'file_mountpoints' ][ 'config' ][ 'enableMultiSelectFilterTextfield' ] = TRUE;
