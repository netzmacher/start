<?php

namespace Netzmacher\Start\Backend\Extensions\DirectMail;

use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2018-2021 - Dirk Wildt <http://wildt.at.die-netzmacher.de/>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * @author      Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package     TYPO3
 * @subpackage  org
 * @version 4.3.0
 * @since 4.3.0
 */
class RecipientList
{

	/**
	 * @param array		mailGroup
	 * @access private
	 * @return      array
	 * @version     4.3.1
	 * @since       4.3.1
	 * @internal		#i0187
	 */
	private function _getMailGroup( $mailGroup )
	{
//		var_dump(__METHOD__, __LINE__, $mailGroup);
		if( isset( $mailGroup[ 'type' ] ) )
		{
			return $mailGroup;
		}

		$groupUid = $mailGroup[ '0' ];
		$mailGroup = BackendUtility::getRecord( 'sys_dmail_group', $groupUid );
//		var_dump(__METHOD__, __LINE__, $mailGroup);
		return $mailGroup;
	}

	/**
	 * @param string	current table
	 * @param array		mailGroup
	 * @access private
	 * @return      array
	 * @version     4.3.0
	 * @since       4.3.0
	 * @internal		#i0185
	 */
	private function _idListFromTable( $table, $mailGroup )
	{
		$_andWherePid = NULL;
		$_andWhereSysDmalCategory = NULL;

		$PageRepository = GeneralUtility::makeInstance( \TYPO3\CMS\Frontend\Page\PageRepository::class );

		if( !empty( $mailGroup[ 'pages' ] ) )
		{
			$_andWherePid = ' AND ' . $table . '.pid = ' . $mailGroup[ 'pages' ];
		}
		if( !empty( $mailGroup[ 'sys_dmail_category' ] ) )
		{
			$_andWhereSysDmalCategory = ' AND sys_dmail_category.uid IN (' . $mailGroup[ 'sys_dmail_category' ] . ')';
		}

		$select = $table . '.uid';
		$local_table = $table;
		$mm_table = 'sys_dmail_ttaddress_category_mm';
		$foreign_table = 'sys_dmail_category';
		$whereClause = ''
						. $_andWherePid
						. $_andWhereSysDmalCategory
						. $PageRepository->enableFields( $table )
						. $PageRepository->enableFields( 'sys_dmail_category' )
		;
		$groupBy = $table . '.uid';
		//$query = \Netzmacher\Refresh\Compatibility\Core\Database\DatabaseConnection::SELECT_mm_query( $select, $local_table, $mm_table, $foreign_table, $whereClause, $groupBy );
		//var_dump( __METHOD__, __LINE__, $query );
		$res = \Netzmacher\Refresh\Compatibility\Core\Database\DatabaseConnection::exec_SELECT_mm_query( $select, $local_table, $mm_table, $foreign_table, $whereClause, $groupBy );
		while( $row = $GLOBALS[ 'TYPO3_DB' ]->sql_fetch_assoc( $res ) )
		{
			$rows[] = $row[ 'uid' ];
		}

		return $rows;
	}

	/**
	 * @param array idLists
	 * @param \TYPO3\CMS\Core\TypoScript\TemplateService $parentObject
	 * @param array mailGroup
	 * @access public
	 * @return      void
	 * @version     4.3.1
	 * @since       4.3.0
	 * @internal		#i0185
	 * @link https://docs.typo3.org/typo3cms/Snippets/2017/Index.html#register-a-hook
	 */
	public function cmd_compileMailGroup_postProcess( $idLists, $pObj, $mailGroup )
	{
		// #i0187, 180725, dwildt, 1+
		$mailGroup = $this->_getMailGroup( $mailGroup );
		if( $mailGroup[ 'type' ] != 10 )
		{
			return $idLists;
		}

		$whichTables = intval( $mailGroup[ 'whichtables' ] );
		if( $whichTables & 1 )
		{
			$table = 'tt_address';
		}
		elseif( $whichTables & 2 )
		{
			$table = 'fe_users';
		}
		elseif( $pObj->userTable && ($whichTables & 4) )
		{
			$table = $pObj->userTable;
		}
		if( $table )
		{
			$idLists[ $table ] = $this->_idListFromTable( $table, $mailGroup );
		}
		//var_dump( __METHOD__, __LINE__, $idLists );
		return $idLists;
	}

}
