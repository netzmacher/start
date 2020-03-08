<?php

namespace Netzmacher\Start\Utility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2019-2020 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */

/**
 * @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage    startgreen
 * @version  5.1.0
 * @since    5.1.0
 */
class Localisation
{

	/**
	 * getLabel(): 
	 * 
	 * @param string $ptah
	 * @param string $key
	 *
	 * @return  string    translated label
	 * @access  public
	 * @version 2.12.6
	 * @since   2.12.6
	 */
	static public function getLabel( $path, $key )
	{
		return $GLOBALS['LANG']->sL( 'LLL:EXT:' . $path . ':' . $key );
		//return htmlspecialchars( $languageService->sL( 'LLL:EXT:' . $path . ':' . $key ) );
	}

}
