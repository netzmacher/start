<?php

//declare(strict_types = 1);

namespace Netzmacher\Start\Flexform\Teasercard;

use TYPO3\CMS\Backend\Form\Element\AbstractFormElement;

class Countdownhelp extends AbstractFormElement
{

	/**
	 * Render single element
	 *
	 * @return array As defined in initializeResultArray() of AbstractNode
	 * @version 8.0.40
	 * @since 8.0.40
	 */
	public function render()
	{
		$result = $this->initializeResultArray();
		$result[ 'html' ] = $this->_getPrompt();
		return $result;
	}

	/**
	 * Render single element
	 *
	 * @return array As defined in initializeResultArray() of AbstractNode
	 * @version 8.0.40
	 * @since 8.0.40
	 */
	private function _getPrompt()
	{
		//.callout-default
		//.callout-primary
		//.callout-success
		//.callout-info
		//.callout-warning
		//.callout-danger
		$str_prompt = null;

		$str_prompt = $str_prompt . '
			<div class="callout callout-info">
				' . $GLOBALS[ 'LANG' ]->sL( 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:teasercard.el.countdowninfo.prompt' ) . '
			</div>
      ';

		return $str_prompt;
	}

}
