<?php

namespace Netzmacher\Start\Controller;

use Netzmacher\Start\Utility\Localisation;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *
 *
 * This file is part of the "start" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2021 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * ModuleController
 * 
 * @version 8.5.1
 * @since   5.1.0
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
   * _getArrPagetree
   * 
   * @return  array
   * @version 8.5.1
   * @since   8.5.1
   */
  private function _getArrPagetree()
  {
    $siteRootUid = $this->pageRepository->getSiteRootPid();
    $arrPagetree = $this->pageRepository->getPagetree($siteRootUid);

    $pagetreeDefaults = [
        ''  => Localisation::getLabel($this->_llPath, 'optionInherit')
        , -1  => Localisation::getLabel($this->_llPath, 'optionNoPage')
        , '-' => '--------------------------------'
    ];
    $arrPagetree      = $pagetreeDefaults + $arrPagetree;
    return $arrPagetree;
  }

  /**
   * _promptThisIsNotTheRootPage()
   * 
   * @return  string
   * @version 8.5.1
   * @since   8.5.0
   */
  private function _promptThisIsNotTheRootPage()
  {
    $pageId      = GeneralUtility::_GP('id');
    $siteRootUid = $this->pageRepository->getSiteRootUid();

    if ($pageId == $siteRootUid)
    {
      return;
    }

    $_flashMessage = Localisation::getLabel($this->_llPath, 'promptUseRootPage');
    $this->addFlashMessage($_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
  }

  /**
   * _viewAssign
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   8.5.0
   */
  private function _viewAssign(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->view->assignMultiple(
            [
                'page'              => $page
                , 'arrPagetree'       => $this->_getArrPagetree()
                , 'btnCancel'         => Localisation::getLabel($this->_llPath, 'btnCancel')
                , 'btnSend'           => Localisation::getLabel($this->_llPath, 'btnSend')
                , 'footerContact'     => Localisation::getLabel($this->_llPath, 'footerContact')
                , 'footerPages'       => Localisation::getLabel($this->_llPath, 'footerPages')
                , 'footerSocialmedia' => Localisation::getLabel($this->_llPath, 'footerSocialmedia')
                , 'footerUnit'        => Localisation::getLabel($this->_llPath, 'footerUnit')
                , 'headerBanner'      => Localisation::getLabel($this->_llPath, 'headerBanner')
                , 'headerContact'     => Localisation::getLabel($this->_llPath, 'headerContact')
                , 'headerLayout'      => Localisation::getLabel($this->_llPath, 'headerLayout')
                , 'headerPages'       => Localisation::getLabel($this->_llPath, 'headerPages')
                , 'headerSocialmedia' => Localisation::getLabel($this->_llPath, 'headerSocialmedia')
                , 'headerUnit'        => Localisation::getLabel($this->_llPath, 'headerUnit')
                , 'headerWallpaper'   => Localisation::getLabel($this->_llPath, 'headerWallpaper')
            ]
    );
  }

  /**
   * _viewAssignListWiPage
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  private function _viewAssignListWiPage(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->view->assignMultiple(
            [
                'page'                              => $page
                , 'btnEdit'                           => Localisation::getLabel($this->_llPath, 'btnEdit')
                , 'footerPrompt'                      => Localisation::getLabel($this->_llPath, 'listFooterPromptWiPage')
                , 'footerHelpSupport'                 => Localisation::getLabel($this->_llPath, 'defaultFooterHelpSupport')
                , 'headerBanner'                      => Localisation::getLabel($this->_llPath, 'headerBanner')
                , 'headerContact'                     => Localisation::getLabel($this->_llPath, 'headerContact')
                , 'headerLayout'                      => Localisation::getLabel($this->_llPath, 'headerLayout')
                , 'headerSocialmedia'                 => Localisation::getLabel($this->_llPath, 'headerSocialmedia')
                , 'headerPages'                       => Localisation::getLabel($this->_llPath, 'headerPages')
                , 'headerUnit'                        => Localisation::getLabel($this->_llPath, 'headerUnit')
                , 'headerWallpaper'                   => Localisation::getLabel($this->_llPath, 'headerWallpaper')
                , 'headerLabel'                       => Localisation::getLabel($this->_llPath, 'listHeaderLabelWiPage') . ': ' . $page->getTitle()
                , 'headerPrompt'                      => Localisation::getLabel($this->_llPath, 'listHeaderPromptWiPage')
                , 'listTableThDescription'            => Localisation::getLabel($this->_llPath, 'listTableThDescription')
                , 'listTableThPlace'                  => Localisation::getLabel($this->_llPath, 'listTableThPlace')
                , 'listTableThPrecedence'             => Localisation::getLabel($this->_llPath, 'listTableThPrecedence')
                , 'listTableThSubject'                => Localisation::getLabel($this->_llPath, 'listTableThSubject')
                , 'listTableTdDescriptionBanner'      => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionBanner')
                , 'listTableTdDescriptionContact'     => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionContact')
                , 'listTableTdDescriptionLayout'      => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionLayout')
                , 'listTableTdDescriptionPages'       => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionPages')
                , 'listTableTdDescriptionSocialmedia' => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionSocialmedia')
                , 'listTableTdDescriptionUnit'        => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionUnit')
                , 'listTableTdDescriptionWallpaper'   => Localisation::getLabel($this->_llPath, 'listTableTdDescriptionWallpaper')
                , 'listTableTdPlaceBanner'            => Localisation::getLabel($this->_llPath, 'listTableTdPlaceBanner')
                , 'listTableTdPlaceContact'           => Localisation::getLabel($this->_llPath, 'listTableTdPlaceContact')
                , 'listTableTdPlaceLayout'            => Localisation::getLabel($this->_llPath, 'listTableTdPlaceLayout')
                , 'listTableTdPlacePages'             => Localisation::getLabel($this->_llPath, 'listTableTdPlacePages')
                , 'listTableTdPlaceSocialmedia'       => Localisation::getLabel($this->_llPath, 'listTableTdPlaceSocialmedia')
                , 'listTableTdPlaceUnit'              => Localisation::getLabel($this->_llPath, 'listTableTdPlaceUnit')
                , 'listTableTdPlaceWallpaper'         => Localisation::getLabel($this->_llPath, 'listTableTdPlaceWallpaper')
                , 'listTableTdPrecedenceRecommended'  => Localisation::getLabel($this->_llPath, 'listTableTdPrecedenceRecommended')
                , 'listTableTdPrecedenceObligate'     => Localisation::getLabel($this->_llPath, 'listTableTdPrecedenceObligate')
                , 'listTableTdSubjectBanner'          => Localisation::getLabel($this->_llPath, 'listTableTdSubjectBanner')
                , 'listTableTdSubjectContact'         => Localisation::getLabel($this->_llPath, 'listTableTdSubjectContact')
                , 'listTableTdSubjectLayout'          => Localisation::getLabel($this->_llPath, 'listTableTdSubjectLayout')
                , 'listTableTdSubjectPages'           => Localisation::getLabel($this->_llPath, 'listTableTdSubjectPages')
                , 'listTableTdSubjectSocialmedia'     => Localisation::getLabel($this->_llPath, 'listTableTdSubjectSocialmedia')
                , 'listTableTdSubjectUnit'            => Localisation::getLabel($this->_llPath, 'listTableTdSubjectUnit')
                , 'listTableTdSubjectWallpaper'       => Localisation::getLabel($this->_llPath, 'listTableTdSubjectWallpaper')
            ]
    );
  }

  /**
   * _viewAssignListWoPage
   * 
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  private function _viewAssignListWoPage()
  {
    $this->view->assignMultiple(
            [
                'footerPrompt'      => Localisation::getLabel($this->_llPath, 'listFooterPromptWoPage')
                , 'footerHelpSupport' => Localisation::getLabel($this->_llPath, 'defaultFooterHelpSupport')
                , 'headerLabel'       => Localisation::getLabel($this->_llPath, 'listHeaderLabelWoPage')
                , 'headerPrompt'      => Localisation::getLabel($this->_llPath, 'listHeaderPromptWoPage')
            ]
    );
  }

  /**
   * contactAction
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function contactAction(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->_promptThisIsNotTheRootPage();
    $this->_viewAssign($page);
  }

  /**
   * layoutAction
   * 
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function layoutAction()
  {
    $_flashMessage = Localisation::getLabel($this->_llPath, 'fmLayout');
    $this->addFlashMessage($_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::INFO);
    $this->redirect('list');
  }

  /**
   * listAction
   * 
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function listAction()
  {
    $this->_promptThisIsNotTheRootPage();

    $pageId = GeneralUtility::_GP('id');
    switch (true)
    {
      case($pageId > 0):
        $page = $this->pageRepository->findByUid($pageId);
        switch (true)
        {
          case(!method_exists($page, 'getDoktype')):
            // page is disabled
            $this->_viewAssignListWoPage($page);
            return;
          case( $page->getDoktype() == 1 ):
          case( $page->getDoktype() == 3 ):
          case( $page->getDoktype() == 4 ):
          case( $page->getDoktype() == 7 ):
            $this->_viewAssignListWiPage($page);
            return;
          default:
            $this->_viewAssignListWoPage($page);
            return;
        }
      case($pageId == 0):
      default:
        $this->_viewAssignListWoPage($page);
        return;
    }
  }

  /**
   * pagesAction
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   8.5.0
   */
  public function pagesAction(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->_promptThisIsNotTheRootPage();
    $this->_viewAssign($page);
  }

  /**
   * socialmediaAction
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function socialmediaAction(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->_promptThisIsNotTheRootPage();
    $this->_viewAssign($page);
  }

  /**
   * unitAction
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function unitAction(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $this->_promptThisIsNotTheRootPage();
    $this->_viewAssign($page);
  }

  /**
   * updateAction
   * 
   * @param   \Netzmacher\Start\Domain\Model\Page $page
   * @return  void
   * @version 8.5.1
   * @since   5.1.0
   */
  public function updateAction(\Netzmacher\Start\Domain\Model\Page $page)
  {
    $_flashMessage = Localisation::getLabel($this->_llPath, 'fmUpdate');
    $this->addFlashMessage($_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::OK);
    $_flashMessage = Localisation::getLabel($this->_llPath, 'fmClearFeCache');
    $this->addFlashMessage($_flashMessage, '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
    $this->pageRepository->update($page);
    $this->redirect('list');
  }

}
