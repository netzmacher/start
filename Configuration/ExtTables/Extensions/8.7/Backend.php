<?php

if( TYPO3_MODE == 'BE' )
{
	/*	 * ****************************************************************************
	 * Configure Backend Extension
	 * **************************************************************************** */
//var_dump(__METHOD__, __LINE__, $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ]);
//die();
	if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] ) )
	{
		$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );
	}

			// #i0105, 171216, dwildt, ~
	$backendstyleDisabled = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ][ 'backendstyleDisabled' ];

	if( !$backendstyleDisabled )
	{
		if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] );
		}

		// Login Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] ) )
		)
		{
			$loginLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginLogo.jpg';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginLogo' ] = $loginLogo;
		}

		// Login Background
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginBackgroundImage' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginBackgroundImage.jpg';
		}

		// Backend Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] ) )
		)
		{
			$backendLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendLogo' ] = $backendLogo;
		}

		// Favicon
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'backendFavicon' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start.ico';
		}

		// loginHighlightColor
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ][ 'loginHighlightColor' ] = '#FE5E00';
		}

		if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] ) )
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'backend' ] );
		}
	}

	if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] ) )
	{
		$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXT' ][ 'extConf' ][ 'start' ] );
	}
}


/* * ****************************************************************************
 * Set TYPO3 version
 * **************************************************************************** */

// #i0105, 171216, dwildt, ~
if( !$backendstyleDisabled )
{
	list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
	$typo3Version = ( ( int ) $main ) * 1000000;
	$typo3Version = $typo3Version + ( ( int ) $sub ) * 1000;
	$typo3Version = $typo3Version + ( ( int ) $bugfix ) * 1;

	switch( TRUE )
	{
		case($typo3Version < 7006000):
			$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			$GLOBALS[ 'TBE_STYLES' ][ 'logo_login' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_loginLogo-v6.2.jpg';
			break;
		case($typo3Version < 8007000):
			$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			break;
		default:
			// Is done above;
			break;
	}
}