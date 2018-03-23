<?php

if( TYPO3_MODE == 'BE' )
{
	/*	 * ****************************************************************************
	 * Configure Backend Extension
	 * **************************************************************************** */
//var_dump(__METHOD__, __LINE__, $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ]);
//die();
//	if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] ) )
//	{
//		$GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] );
//	}
	// #i0105, 171216, dwildt, ~
	$backendstyleDisabled = $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'start' ][ 'backendstyleDisabled' ];

	if( !$backendstyleDisabled )
	{
//		if( !is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] ) )
//		{
//			$GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] = unserialize( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] );
//		}
		// Login Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginLogo' ] ) )
		)
		{
			$loginLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginLogo.jpg';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginLogo' ] = $loginLogo;
		}

		// Login Background
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginBackgroundImage' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginBackgroundImage' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginBackgroundImage' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start_loginBackgroundImage.jpg';
		}

		// Backend Logo
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendLogo' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendLogo' ] ) )
		)
		{
			$backendLogo = 'EXT:start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendLogo' ] = $backendLogo;
		}

		// Favicon
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendFavicon' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendFavicon' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'backendFavicon' ] = 'EXT:start/Resources/Public/Images/Backend/typo3-start.ico';
		}

		// loginHighlightColor
		if( !isset( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginHighlightColor' ] ) || empty( trim( $GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginHighlightColor' ] ) )
		)
		{
			$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'EXTENSIONS' ][ 'backend' ][ 'loginHighlightColor' ] = '#FE5E00';
		}

//		if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] ) )
//		{
//			$GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'backend' ] );
//		}
		$GLOBALS[ 'TBE_STYLES' ][ 'logo' ] = '../typo3conf/ext/start/Resources/Public/Images/Backend/typo3-start_backendLogo@2x.png';
	}

//	if( is_array( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] ) )
//	{
//		$GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] = serialize( $GLOBALS[ 'TYPO3_CONF_VARS' ]['EXTENSIONS'][ 'start' ] );
//	}
}