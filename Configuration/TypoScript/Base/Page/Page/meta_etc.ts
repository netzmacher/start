page {

		// empty statement for proper comments only
  meta {
	}
		// start: author, description, keywords, viewport
  meta =
  meta {
    author = {$start.page.meta.author}
    description {
      field = description
      ifEmpty = {$start.page.meta.description}
    }
    keywords {
      field    = keywords
      ifEmpty  = {$start.page.meta.keywords}
      keywords = 1
    }
    viewport {
      cObject = TEXT
      cObject {
        if {
          isTrue = {$start.page.meta.viewport}
        }
        value = {$start.page.meta.viewport}
      }
    }
  }

  shortcutIcon = {$start.favicon}
  typeNum = 0

}