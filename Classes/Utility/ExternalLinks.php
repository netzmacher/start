<?php

namespace Netzmacher\Start\Utility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2017-2020 - Dirk Wildt <http://wildt.at.die-netzmacher.de>
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
 * Class provides methods for the extension manager.
 *
 * @author    Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage    start
 * @version  2.12.6
 * @since    2.12.6
 */
class ExternalLinks
{

  /**
   * promptExternalLinks(): Displays the quick start message.
   *
   * @return  string    message wrapped in HTML
   * @access  public
   * @version 2.12.6
   * @since   2.12.6
   */
  public function promptExternalLinks()
  {
//.message-notice
//.message-information
//.message-ok
//.message-warning
//.message-error

    $prompt = null;

    $prompt = $prompt . '
<div class="message-body" style="max-width:600px;">
  ' . $GLOBALS[ 'LANG' ]->sL( 'LLL:EXT:start/Resources/Private/Language/ExternalLinks.xlf:promptExternalLinksBody' ) . '
</div>';

    return $prompt;
  }


}
