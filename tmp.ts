
  /////////////////////////////////////////
  //
  // INDEX
  //
  // start
  //   compress
  //   config
  //   favicon
  //   foundation
  //   page
  //   pages
  //
  /////////////////////////////////////////


  
  /////////////////////////////////////////
  //
  // start

start {
  compress {
    css = 0
    jss = 0
  }
  config {
    baseURL                           = http://typo3-route.de
    baseURLhttps                      = https://typo3-route.de
    language                          = de
    htmlTag_langKey                   = de
    htmlTag_setParams                 = lang="de" class="no-js"
    locale_all                        = de_DE.UTF-8
    pageTitleFirst                    = 1
    tx_realurl_enable                 = 1
    typolinkEnableLinksAcrossDomains  = 1
  }
  //favicon = typo3conf/ext/deal/Resources/Public/Images/favicon.ico
  foundation {
    iconbarStart {
      class         = icon-bar five-up
      10.modal      = 0
      10.pid        = 8065
      10.title      = Zur Startseite von TYPO3 Route
      20.aria-label = Kontakt
      20.pid        = 8780
      20.title      = Kontakt zum Entwickler von TYPO3 Route
      30.aria-label = Nachrichten
      30.pid        = 8783
      30.title      = Nachrichten zu TYPO3 Route
      40.aria-label = Sponsoring
      40.modal      = 0
      40.pid        = 8138
      40.title      = Sponsoring für TYPO3 Route
      50.pid        = 8784
      50.title      = Newsletter der Netzmacher, die Entwickler von TYPO3 Route
    }
    topbar {
      name = TYPO3 Route
      title = TYPO3 mit Google Maps und OpenStreetMap
    }
  }
  page {
    meta {
      author = Dirk Wildt - http://wildt.at.die-netzmacher.de
    }
  }
  pages {
    contact         = 0
    news            = 0
    shop            = 0
    footer.library  = 8900
    root            = 8065
    siteLineTop     = 0
    siteLineBottom  = 0
  }
}
  // start
