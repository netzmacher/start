plugin.tx_indexedsearch {
		// empty statement for proper comments only
	settings {
	}
		// EXT:start: displayRules, displayAdvancedSearchLink, placeholder
	settings =
	settings {
		displayRules = {$start.extensions.indexed_search.displayRules}
		displayAdvancedSearchLink = {$start.extensions.indexed_search.displayAdvancedSearchLink}
		placeholder = {$start.extensions.indexed_search.placeholder}

#		# show the number of results
#		displayResultNumber = 0

#		breadcrumbWrap = / || /

#		# show the parse times
#		displayParsetimes = 0
#		displayLevel1Sections = 1
#		displayLevel2Sections = 0
#		displayLevelxAllTypes = 0
#		displayForbiddenRecords = 0
#		alwaysShowPageLinks = 1
#		mediaList =

#		page_links = 10
#		# @deprecated left for BC reasons, will be removed in 10
#		detectDomainRcords = 0
#		detectDomainRecords < .detectDomainRcords
#		defaultFreeIndexUidList =
#		searchSkipExtendToSubpagesChecking = 0
#		exactCount = 0
#		forwardSearchWordsInResultLink = 0
#		forwardSearchWordsInResultLink.no_cache = 1

#		# various crop/offset settings for single result items
#		results {
#			titleCropAfter = 50
#			titleCropSignifier = ...
#			summaryCropAfter = 180
#			summaryCropSignifier =
#			hrefInSummaryCropAfter = 60
#			hrefInSummaryCropSignifier = ...
#			markupSW_summaryMax = 300
#			markupSW_postPreLgd = 60
#			markupSW_postPreLgd_offset = 5
#			markupSW_divider = ...
#			markupSW_divider.noTrimWrap = | | |
#			pathExcludeDoktypes =
#		}

#		# Blinding of option-selectors / values in these (advanced search)
#		blind {
#			searchType = 0
#			defaultOperand = 0
#			sections = 0
#			freeIndexUid = 1
#			mediaType = 0
#			sortOrder = 0
#			group = 0
#			languageUid = 0
#			desc = 0
#			# List of available number of results. First will be used as default.
#			numberOfResults = 10,25,50,100
#			# defaultOperand.1 = 1
#			# extResume=1
#		}
#/*
#		flagRendering = CASE
#		flagRendering {
#			key.current = 1
#			2 = TEXT
#			2.value = German
#			default = TEXT
#			default.value = English
#		}
#
#		iconRendering = CASE
#		iconRendering {
#			key.current = 1
#			html = TEXT
#			html.value = HtmL
#			default = TEXT
#			default.value = TYPO3 pages
#		}
#
#		specialConfiguration {
#			0.pageIcon = IMAGE
#			0.pageIcon.file = typo3/sysext/indexed_search/Resources/Public/Icons/FileTypes/pages.gif
#			1.pageIcon = IMAGE
#			1.pageIcon.file = typo3/sysext/indexed_search/Resources/Public/Icons/FileTypes/pdf.gif
#		}
#*/
#		defaultOptions {
#			defaultOperand = 0
#			sections = 0
#			freeIndexUid = -1
#			mediaType = -1
#			sortOrder = rank_flag
#			languageUid = -1
#			sortDesc = 1
#			searchType = 1
#			extResume = 1
#		}
#
	}
}
