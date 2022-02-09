<?php

namespace Netzmacher\Start\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *
 *
 * This file is part of the "Book a tile!" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019-2021 Dirk Wildt (Die Netzmacher) <http://wildt@die-netzmacher.de>, Die Netzmacher
 *
 * * */

/**
 * The repository for Areas
 */
class PageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

  /**
   * _getSiteRootField
   * 
   * @param   string $field
   * @return  string $value
   * @version 8.5.1
   * @since   8.5.1
   */
  private function _getSiteRootField($field)
  {
    $value = null;

    $pageId = GeneralUtility::_GP('id');
    if ($pageId < 1)
    {
      return $value;
    }

    $rootLineUtility = new \TYPO3\CMS\Core\Utility\RootlineUtility($pageId);
    $rootline        = $rootLineUtility->get();
    foreach ($rootline as $page)
    {
      if (!$page['is_siteroot'])
      {
        continue;
      }
      $value = $page[$field];
      break;
    }
    return $value;
  }

  private function _getPagetree($pageId, $level = 0, $prefix = '', $arrOptions = [])
  {
    $_pids = [];

    $result = $this->findSubpages((int) $pageId);
    $rows   = $result->fetchAll();

    foreach ($rows as $row)
    {
      $level = $level + 1;
      if ($level > 1000)
      {
        $csvPids = implode(',', $_pids);
        return $csvPids;
      }
      $arrOptions[$row['uid']] = substr($prefix . ' ' . $row['title'], 0, 50);
      $prefix                  = $prefix . '...';
      list($subpages, $arrOptions) = $this->_getPagetree($row['uid'], $level, $prefix, $arrOptions);
      switch (true)
      {
        case(empty($subpages)):
          $_pids[] = $row['uid'];
          break;
        case(!empty($subpages)):
        default:
          $_pids[] = $row['uid'] . ',' . $subpages;
          break;
      }
      $prefix = substr($prefix, 0, strlen('...') * -1);
    }

    $csvPids = implode(',', $_pids);
    return [
        $csvPids
        , $arrOptions];
  }

  public function findSubpages($pageId)
  {
    $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('pages');
    $queryBuilder
            ->select('uid', 'title')
            ->from('pages')
            ->orderBy('sorting')
            ->where(
                    $queryBuilder->expr()->eq('pid', $queryBuilder->createNamedParameter($pageId))
            )
    ;

//		debug( $queryBuilder->getSQL() );
//		debug( $queryBuilder->getParameters() );

    $result = $queryBuilder->execute();
    return $result;
  }

  public function getPagetree($pageId)
  {
    list($subpages, $arrOptions) = $this->_getPagetree($pageId);
    unset($subpages);
    return $arrOptions;
  }

  /**
   * getSiteRootPid
   * 
   * @return  integer
   * @version 8.5.1
   * @since   8.5.1
   */
  public function getSiteRootPid()
  {
    return (int) $this->_getSiteRootField('pid');
  }

  /**
   * getSiteRootUid
   * 
   * @return  integer
   * @version 8.5.1
   * @since   8.5.1
   */
  public function getSiteRootUid()
  {
    return (int) $this->_getSiteRootField('uid');
  }

}
