<?php

namespace Netzmacher\Start\Provider;

use TYPO3\CMS\Backend\View\BackendLayout\BackendLayout;
use TYPO3\CMS\Backend\View\BackendLayout\BackendLayoutCollection;
use TYPO3\CMS\Backend\View\BackendLayout\DataProviderContext;
use Netzmacher\Start\Backend\Extensionmanager;

/* * *************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014-2021 Dirk Wildt, http://wildt.at.die-netzmacher.de
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 * ************************************************************* */


#use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 * @package    TYPO3
 * @subpackage  start
 *
 * @version 8.4.5
 * @since 0.0.1
 */
class BackendLayoutDataProvider implements \TYPO3\CMS\Backend\View\BackendLayout\DataProviderInterface {

	/**
	 * Return backendLayoutsDisabled
	 *
	 * @access private
	 * @return boolean
	 * @version 5.2.0
	 * @since 4.1.7
	 * @internal #i0179
	 */
	static private function _backendLayoutsAreDisabled() {
		return Extensionmanager::getProperty('backendLayoutsDisabled');
	}

	/**
	 * Creates the array of backend layout depending on properties of the extension manager
	 *
	 * @return array $backendLayouts
	 * @version 5.2.0
	 * @since 5.2.0
	 */
	private function _initBackendLayouts() {
		$backendLayout = null;

		if (Extensionmanager::getProperty('backendLayoutsEnableDefault')) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsDefault;
		}

		$backendLayoutsEnableStartBlue = Extensionmanager::getProperty('backendLayoutsEnableStartBlue');
		if ($backendLayoutsEnableStartBlue === NULL) {
			$backendLayoutsEnableStartBlue = true;
		}
		if ($backendLayoutsEnableStartBlue) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsBlue;
		}

		$backendLayoutsEnableStartBronze = Extensionmanager::getProperty('backendLayoutsEnableStartBronze');
		if ($backendLayoutsEnableStartBronze === NULL) {
			$backendLayoutsEnableStartBronze = true;
		}
		if ($backendLayoutsEnableStartBronze) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsBronze;
		}

		$backendLayoutsEnableStartBronzeGcms = Extensionmanager::getProperty('backendLayoutsEnableStartBronzeGcms');
		if ($backendLayoutsEnableStartBronzeGcms) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsBronzeGcms;
		}

		$backendLayoutsEnableStartSilver = Extensionmanager::getProperty('backendLayoutsEnableStartSilver');
		if ($backendLayoutsEnableStartSilver === NULL) {
			$backendLayoutsEnableStartSilver = true;
		}
		if ($backendLayoutsEnableStartSilver) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsSilver;
		}

		if (Extensionmanager::getProperty('backendLayoutsEnableStartFolder')) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsFolder;
		}

		if (Extensionmanager::getProperty('backendLayoutsEnableStartNewsletter')) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsNewsletter;
		}

		if (Extensionmanager::getProperty('backendLayoutsEnableStartDeprecated')) {
			$backendLayout = (array) $backendLayout + $this->backendLayoutsDeprecated;
		}

		return (array) $backendLayout;
	}

	/**
	 * @param DataProviderContext $dataProviderContext
	 * @param BackendLayoutCollection $backendLayoutCollection
	 * @return void
	 * @version 5.2.0
	 * @since 0.0.1
	 */
	public function addBackendLayouts(DataProviderContext $dataProviderContext, BackendLayoutCollection $backendLayoutCollection) {
		unset($dataProviderContext);
		if (self::_backendLayoutsAreDisabled()) {
			return;
		}
		$backendLayouts = $this->_initBackendLayouts();
		foreach ($backendLayouts as $key => $data) {
			$data['uid'] = $key;
			$backendLayout = $this->createBackendLayout($data);
			$backendLayoutCollection->add($backendLayout);
		}
	}

	/**
	 * Creates a new backend layout using the given record data.
	 *
	 * @param array $data
	 * @return BackendLayout
	 * @version 1.1.1
	 * @since 0.0.1
	 */
	protected function createBackendLayout(array $data) {
		$backendLayout = BackendLayout::create($data['uid'], $data['title'], $data['config']);
		$backendLayout->setIconPath($this->getIconPath($data['icon']));
		$backendLayout->setData($data);
		return $backendLayout;
	}

	/**
	 * Gets a backend layout by (regular) identifier.
	 *
	 * @param string $identifier
	 * @param integer $pageId
	 * @return NULL|BackendLayout
	 * @version 1.1.1
	 * @since 0.0.1
	 */
	public function getBackendLayout($identifier, $pageId) {
		unset($pageId);
		if (self::_backendLayoutsAreDisabled()) {
			return;
		}
		$backendLayout = NULL;
		$backendLayouts = $this->_initBackendLayouts();
		if (array_key_exists($identifier, $backendLayouts)) {
			return $this->createBackendLayout($backendLayouts[$identifier]);
		}
		return $backendLayout;
	}

	/**
	 * Gets and sanitizes the icon path.
	 *
	 * @param string $icon Name of the icon file
	 * @return string
	 * @version 1.1.1
	 * @since 0.0.1
	 */
	protected function getIconPath($icon) {
		$iconPath = '';
		if (!empty($icon)) {
			$iconPath = $icon;
		}
		return $iconPath;
	}

	/**
	 * Default Backend Layouts Bronze
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 5.2.0
	 */
	protected $backendLayouts = null;

	/**
	 * Default Backend Layouts Blue
	 *
	 * @var array
	 * @version 5.2.4
	 * @since 5.2.4
	 */
	protected $backendLayoutsBlue = array(
			'blue_04' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_04',
					'config' => '
				backend_layout {
					colCount = 12
					rowCount = 6
					rows {
						1 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
									colPos  = 11
									colspan = 12
								}
							}
						}
						2 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
									colPos  = 3
									colspan = 12
								}
							}
						}
						3 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
									colPos  = 0
									colspan = 12
								}
							}
						}
						4 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
									colPos  = 6
									colspan = 12
								}
							}
						}
						5 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
									colPos  = 21
									colspan = 12
								}
							}
						}
						6 {
							columns {
								1 {
									name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
									colPos  = -2
									colspan = 12
								}
							}
						}
					}
				}
			',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_04.gif'
			),
			'blue_04_top' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_04_top',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_04_top.gif'
			),
			'blue_04_bottom' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_04_bottom',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_04_bottom.gif'
			),
			'blue_04_wo' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_04_wo',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_04_wo.gif'
			),
			'blue_01' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_01',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_01.gif'
			),
			'blue_01_01_lr' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_01_01_lr',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_01_01_lr.gif'
			),
			'blue_01_02_r' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_01_02_r',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 9
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_01_02_r.gif'
			),
			'blue_01_03_l' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_01_03_l',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 9
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_01_03_l.gif'
			),
			'blue_02' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_02',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_02.gif'
			),
			'blue_03' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_03',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_03.gif'
			),
			'blue_05' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_05',
					'config' => '
        backend_layout {
          colCount = 4
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_05.gif'
			),
			'blue_05_01_lr' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_05_01_lr',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 3
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_05_01_lr.gif'
			),
			'blue_05_02_r' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_05_02_r',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 3
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_05_02_r.gif'
			),
			'blue_05_03_l' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.blue_05_03_l',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 3
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_blue_05_03_l.gif'
			),
	);

	/**
	 * Default Backend Layouts Bronze
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 4.1.7
	 */
	protected $backendLayoutsBronze = array(
			'bronze_01' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.bronze_01',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_bronze_01.gif'
			),
			'bronze_02' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.bronze_02',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_bronze_02.gif'
			),
			'bronze_03' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.bronze_03',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_bronze_03.gif'
			),
			'bronze_04' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.bronze_04',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_bronze_04.gif'
			),
	);

	/**
	 * Default Backend Layouts Bronze
	 *
	 * @var array
	 * @version 8.4.5
	 * @since 8.4.5
	 */
	protected $backendLayoutsBronzeGcms = array(
			'bronze_02_gcms' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.bronze_02_gcms',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
						2 {
							columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
									rowspan = 2
                }
								2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.righttop
                  colPos  = 3
									colspan = 6
								}
							}
						}
						3 {
							columns {
								1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.rightbottomleft
                  colPos  = 1
									colspan = 3
								}
								2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.rightbottomright
                  colPos  = 2
									colspan = 3
								}
							}
						}
						4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_bronze_02_gcms.gif'
			),
	);

	/**
	 * Default Backend Layouts Default
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 4.1.7
	 */
	protected $backendLayoutsDefault = array(
			'default' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.default',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 1
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.0
                  colPos  = 1
                  colspan = 2
                }
                2 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.1
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.2
                  colPos  = 2
                  colspan = 2
                }
                4 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.3
                  colPos  = 3
                  colspan = 2
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_default.gif'
			),
			'simple_01' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.simple_01',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 2
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_simple_01.gif'
			),
			'simple_02' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.simple_02',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 2
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_simple_02.gif'
			),
			'simple_03' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.simple_03',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 2
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_simple_03.gif'
			),
			'simple_04' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.simple_04',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 2
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_simple_04.gif'
			),
	);

	/**
	 * Default Backend Layouts Deprecated
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 4.1.7
	 */
	protected $backendLayoutsDeprecated = array(
			'silver_01' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_01',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topLeft
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topMain
                  colPos  = 3
                  colspan = 4
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topRight
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_01.gif'
			),
			'silver_02' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_02',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topLeft
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topMain
                  colPos  = 3
                  colspan = 4
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.topRight
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomLeft
                  colPos  = 4
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomMain
                  colPos  = 6
                  colspan = 4
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomRight
                  colPos  = 5
                  colspan = 4
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_02.gif'
			),
			'silver_03' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_03',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 5
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomLeft
                  colPos  = 4
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomMain
                  colPos  = 6
                  colspan = 4
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottomRight
                  colPos  = 5
                  colspan = 4
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_03.gif'
			),
	);

	/**
	 * Folder Backend Layout
	 *
	 * @var array
	 * @version 8.0.4
	 * @since 8.0.4
	 */
	protected $backendLayoutsFolder = array(
			'folder' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.folder',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 2
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/folder.gif'
			),
	);

	/**
	 * Default Backend Layouts Bronze
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 4.1.7
	 */
	protected $backendLayoutsNewsletter = array(
			'newsletter_01' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.newsletter_01',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_newsletter_01.gif'
			),
	);

	/**
	 * Default Backend Layouts Silver
	 *
	 * @var array
	 * @version 5.2.0
	 * @since 4.1.7
	 */
	protected $backendLayoutsSilver = array(
			'silver_04' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_04',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_04.gif'
			),
			'silver_05' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_05',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_05.gif'
			),
			'silver_06' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_06',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_06.gif'
			),
			'silver_07' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_07',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_07.gif'
			),
			'silver_08' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_08',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 9
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_08.gif'
			),
			'silver_09' => array(
					'title' => 'LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.silver_09',
					'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 9
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 6
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:start/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
					'icon' => 'EXT:start/Resources/Public/Images/BackendLayouts/start_silver_09.gif'
			),
	);

}
