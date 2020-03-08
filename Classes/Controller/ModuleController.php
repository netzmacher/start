<?php

namespace Netzmacher\Start\Controller;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use Netzmacher\Start\Utility\Localisation;

/* * *
 *
 * This file is part of the "Book a tile!" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2020 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * ModuleController
 * 
 * @version 5.1.0
 * @since 5.1.0
 */
class ModuleController extends AbstractController
{

	/**
	 * $lllPath
	 * 
	 * @var string
	 */
	private $_llPath = 'start/Resources/Private/Language/locallang_md1.xlf';

	/**
	 * _listActionWiPage
	 * 
	 * @param \Netzmacher\Start\Domain\Model\Page $page
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	private function _listActionWiPage( \Netzmacher\Start\Domain\Model\Page $page )
	{
		$this->view->assignMultiple(
						[
								'page' => $page
								, 'btnEdit' => Localisation::getLabel( $this->_llPath, 'btnEdit' )
								, 'footerPrompt' => Localisation::getLabel( $this->_llPath, 'listFooterPromptWiPage' )
								, 'footerHelpSupport' => Localisation::getLabel( $this->_llPath, 'defaultFooterHelpSupport' )
								, 'headerBanner' => Localisation::getLabel( $this->_llPath, 'headerBanner' )
								, 'headerContact' => Localisation::getLabel( $this->_llPath, 'headerContact' )
								, 'headerLayout' => Localisation::getLabel( $this->_llPath, 'headerLayout' )
								, 'headerSocialmedia' => Localisation::getLabel( $this->_llPath, 'headerSocialmedia' )
								, 'headerUnit' => Localisation::getLabel( $this->_llPath, 'headerUnit' )
								, 'headerWallpaper' => Localisation::getLabel( $this->_llPath, 'headerWallpaper' )
								, 'headerLabel' => Localisation::getLabel( $this->_llPath, 'listHeaderLabelWiPage' ) . ': ' . $page->getTitle()
								, 'headerPrompt' => Localisation::getLabel( $this->_llPath, 'listHeaderPromptWiPage' )
								, 'listTableThDescription' => Localisation::getLabel( $this->_llPath, 'listTableThDescription' )
								, 'listTableThPlace' => Localisation::getLabel( $this->_llPath, 'listTableThPlace' )
								, 'listTableThPrecedence' => Localisation::getLabel( $this->_llPath, 'listTableThPrecedence' )
								, 'listTableThSubject' => Localisation::getLabel( $this->_llPath, 'listTableThSubject' )
								, 'listTableTdDescriptionBanner' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionBanner' )
								, 'listTableTdDescriptionContact' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionContact' )
								, 'listTableTdDescriptionLayout' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionLayout' )
								, 'listTableTdDescriptionSocialmedia' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionSocialmedia' )
								, 'listTableTdDescriptionUnit' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionUnit' )
								, 'listTableTdDescriptionWallpaper' => Localisation::getLabel( $this->_llPath, 'listTableTdDescriptionWallpaper' )
								, 'listTableTdPlaceBanner' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceBanner' )
								, 'listTableTdPlaceContact' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceContact' )
								, 'listTableTdPlaceLayout' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceLayout' )
								, 'listTableTdPlaceSocialmedia' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceSocialmedia' )
								, 'listTableTdPlaceUnit' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceUnit' )
								, 'listTableTdPlaceWallpaper' => Localisation::getLabel( $this->_llPath, 'listTableTdPlaceWallpaper' )
								, 'listTableTdPrecedenceRecommended' => Localisation::getLabel( $this->_llPath, 'listTableTdPrecedenceRecommended' )
								, 'listTableTdPrecedenceObligate' => Localisation::getLabel( $this->_llPath, 'listTableTdPrecedenceObligate' )
								, 'listTableTdSubjectBanner' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectBanner' )
								, 'listTableTdSubjectContact' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectContact' )
								, 'listTableTdSubjectLayout' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectLayout' )
								, 'listTableTdSubjectSocialmedia' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectSocialmedia' )
								, 'listTableTdSubjectUnit' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectUnit' )
								, 'listTableTdSubjectWallpaper' => Localisation::getLabel( $this->_llPath, 'listTableTdSubjectWallpaper' )
						]
		);
	}

	/**
	 * _listActionWoPage
	 * 
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	private function _listActionWoPage()
	{
		$this->view->assignMultiple(
						[
								'footerPrompt' => Localisation::getLabel( $this->_llPath, 'listFooterPromptWoPage' )
								, 'footerHelpSupport' => Localisation::getLabel( $this->_llPath, 'defaultFooterHelpSupport' )
								, 'headerLabel' => Localisation::getLabel( $this->_llPath, 'listHeaderLabelWoPage' )
								, 'headerPrompt' => Localisation::getLabel( $this->_llPath, 'listHeaderPromptWoPage' )
						]
		);
	}

	/**
	 * action contact
	 * 
	 * @param \Netzmacher\Start\Domain\Model\Page $page
	 * @ignorevalidation $page
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function contactAction( \Netzmacher\Start\Domain\Model\Page $page )
	{
		$this->view->assignMultiple(
						[
								'page' => $page
								, 'btnCancel' => Localisation::getLabel( $this->_llPath, 'btnCancel' )
								, 'btnSend' => Localisation::getLabel( $this->_llPath, 'btnSend' )
								, 'headerBanner' => Localisation::getLabel( $this->_llPath, 'headerBanner' )
								, 'headerContact' => Localisation::getLabel( $this->_llPath, 'headerContact' )
								, 'headerLayout' => Localisation::getLabel( $this->_llPath, 'headerLayout' )
								, 'headerSocialmedia' => Localisation::getLabel( $this->_llPath, 'headerSocialmedia' )
								, 'headerUnit' => Localisation::getLabel( $this->_llPath, 'headerUnit' )
								, 'headerWallpaper' => Localisation::getLabel( $this->_llPath, 'headerWallpaper' )
								, 'footerPrompt' => Localisation::getLabel( $this->_llPath, 'contactFooterPrompt' )
						]
		);
	}

	/**
	 * action Layout
	 * 
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function layoutAction()
	{
		$_flashMessage = Localisation::getLabel( $this->_llPath, 'fmLayout' );
		$this->addFlashMessage( $_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO );
		$this->redirect( 'list' );
	}

	/**
	 * action list
	 * 
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function listAction()
	{
		$pageId = GeneralUtility::_GP( 'id' );
		switch( true )
		{
			case($pageId > 0):
				$page = $this->pageRepository->findByUid( $pageId );
				switch( true )
				{
					case(!method_exists( $page, 'getDoktype' )):
						// page is disabled
						$this->_listActionWoPage( $page );
						continue 2;
					case( $page->getDoktype() == 1 ):
					case( $page->getDoktype() == 3 ):
					case( $page->getDoktype() == 4 ):
					case( $page->getDoktype() == 7 ):
						$this->_listActionWiPage( $page );
						continue 2;
					default:
						$this->_listActionWoPage( $page );
						continue 2;
				}
			case($pageId == 0):
			default:
				$this->_listActionWoPage( $page );
				break;
		}
	}

	/**
	 * action socialmedia
	 * 
	 * @param \Netzmacher\Start\Domain\Model\Page $page
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function socialmediaAction( \Netzmacher\Start\Domain\Model\Page $page )
	{
		$this->view->assignMultiple(
						[
								'page' => $page
								, 'btnCancel' => Localisation::getLabel( $this->_llPath, 'btnCancel' )
								, 'btnSend' => Localisation::getLabel( $this->_llPath, 'btnSend' )
								, 'headerBanner' => Localisation::getLabel( $this->_llPath, 'headerBanner' )
								, 'headerContact' => Localisation::getLabel( $this->_llPath, 'headerContact' )
								, 'headerLayout' => Localisation::getLabel( $this->_llPath, 'headerLayout' )
								, 'headerSocialmedia' => Localisation::getLabel( $this->_llPath, 'headerSocialmedia' )
								, 'headerUnit' => Localisation::getLabel( $this->_llPath, 'headerUnit' )
								, 'headerWallpaper' => Localisation::getLabel( $this->_llPath, 'headerWallpaper' )
								, 'footerPrompt' => Localisation::getLabel( $this->_llPath, 'socialmediaFooterPrompt' )
						]
		);
	}

	/**
	 * action update
	 * 
	 * @param \Netzmacher\Start\Domain\Model\Page $page
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function updateAction( \Netzmacher\Start\Domain\Model\Page $page )
	{
//		var_dump(__METHOD__, __LINE__);
//		die();
		$_flashMessage = Localisation::getLabel( $this->_llPath, 'fmUpdate' );
		$this->addFlashMessage( $_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK );
		$_flashMessage = Localisation::getLabel( $this->_llPath, 'fmClearFeCache' );
		$this->addFlashMessage( $_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING );
		$this->pageRepository->update( $page );
		$this->redirect( 'list' );
	}

	/**
	 * action unit
	 * 
	 * @param \Netzmacher\Start\Domain\Model\Page $page
	 * @return void
	 * @version 5.1.0
	 * @since 5.1.0
	 */
	public function unitAction( \Netzmacher\Start\Domain\Model\Page $page )
	{
		$this->view->assignMultiple(
						[
								'page' => $page
								, 'btnCancel' => Localisation::getLabel( $this->_llPath, 'btnCancel' )
								, 'btnSend' => Localisation::getLabel( $this->_llPath, 'btnSend' )
								, 'headerBanner' => Localisation::getLabel( $this->_llPath, 'headerBanner' )
								, 'headerContact' => Localisation::getLabel( $this->_llPath, 'headerContact' )
								, 'headerLayout' => Localisation::getLabel( $this->_llPath, 'headerLayout' )
								, 'headerSocialmedia' => Localisation::getLabel( $this->_llPath, 'headerSocialmedia' )
								, 'headerUnit' => Localisation::getLabel( $this->_llPath, 'headerUnit' )
								, 'headerWallpaper' => Localisation::getLabel( $this->_llPath, 'headerWallpaper' )
								, 'footerPrompt' => Localisation::getLabel( $this->_llPath, 'unitFooterPrompt' )
						]
		);
	}

}
