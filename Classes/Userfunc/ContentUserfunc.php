<?php

namespace Netzmacher\Start\Userfunc;

use Netzmacher\Start\Userfunc\Typo3VersionUserfunc;

if( !defined( 'TYPO3_MODE' ) )
{
	die( 'Access denied.' );
}

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2021 -  Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 *
 * @author  Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package TYPO3
 * @subpackage  start
 * @version     8.3.1
 * @since       8.3.1
 */
class ContentUserfunc
{

	/**
	 * WarnIfIsGreaterThan095( ): Returns nothing, if TYPO3 version is greater than 10.0.
	 * 														Rturns a prompt, if TYPO3 version is smaller than 10.0.
	 *
	 * @return  mixed
	 * @version 8.3.1
	 * @since 8.3.1
	 */
	static public function WarnIfisGreaterThan095( string $content, array $conf )
	{
		if( !Typo3VersionUserfunc::isGreaterThan095() )
		{
			return;
		}
		$content = ''
						. '<div style="background:red;color:white;font-weight:bold;padding:1em;text-align:center;">'
						. '  You are using a TypoScript Template for TYPO3 8.7 but your TYPO3 version is greater.<br />'
						. '  Please replace the template "' . $conf[ 'currentTS' ] . '" with "' . $conf[ 'propperTS' ] . '"<br />'
						. '  <br />'
						. '  This is a prompt by the EXT:start. Sorry for the trouble.<br />'
						. ' ' . __METHOD__ . '#' . __LINE__
						. '</div>'
		;
		return $content;
	}

	/**
	 * WarnIfIsSmallerThan100( ): Returns nothing, if TYPO3 version is greater than 10.0.
	 * 														Rturns a prompt, if TYPO3 version is smaller than 10.0.
	 *
	 * @return  mixed
	 * @version 8.3.1
	 * @since 8.3.1
	 */
	static public function WarnIfisSmallerThan100( string $content, array $conf )
	{
		if( !Typo3VersionUserfunc::isSmallerThan100() )
		{
			return;
		}
		$content = ''
						. '<div style="background:red;color:white;font-weight:bold;padding:1em;text-align:center;">'
						. '  You are using a TypoScript Template for TYPO3 10.4 but your TYPO3 version is smaller.<br />'
						. '  Please replace the template "' . $conf[ 'currentTS' ] . '" with "' . $conf[ 'propperTS' ] . '"<br />'
						. '  <br />'
						. '  This is a prompt by the EXT:start. Sorry for the trouble.<br />'
						. ' ' . __METHOD__ . '#' . __LINE__
						. '</div>'
		;
		return $content;
	}

}
