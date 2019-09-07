// EXT:browser ---------------------------------------------------------------//

  // Nachrichten Slider
plugin.tx_browser_pi1.templates.listview.text.6.crop = 80|...|1
  // Nachrichten
plugin.tx_browser_pi1.templates.listview.url.0.singlePid = 9047
  // Staff
plugin.tx_browser_pi1.templates.listview.url.1.singlePid =
  // Headquarters
plugin.tx_browser_pi1.templates.listview.url.2.singlePid = 9041
  // News
plugin.tx_browser_pi1.templates.listview.url.3.singlePid = 9047
  // Location
plugin.tx_browser_pi1.templates.listview.url.4.singlePid = 9040
  // Calendar
plugin.tx_browser_pi1.templates.listview.url.5.singlePid = 9039
  // Nachrichten Slider
plugin.tx_browser_pi1.templates.listview.url.6.singlePid = 9047


// EXT:cookieconsent ---------------------------------------------------------//

// Datenschutzerklaerung
plugin.tx_cookieconsent.settings.url = 9191


// EXT:org -------------------------------------------------------------------//

plugin.org {
  sysfolder {
    calendar      = 9007
    headquarters  = 9011
    location      = 9009
    news          = 9008
  }
  pages {
    calendar      = 9039
    event         =
    headquarters  = 9041
    location      = 9040
    news          = 9047
    newsrss       = 9062
  }
}


// EXT:seodynamictag ---------------------------------------------------------//

plugin.tx_seodynamictag {
    // Root page
  condition.single.begin = globalVar = GP:tx_browser_pi1|calendarUid > 0] && [globalVar = TSFE:id = 9005
    // Sysfolder blog / organiser data
  database.pidInList = 9006
}


// EXT:start -----------------------------------------------------------------//

start {
  config {
    baseURL = http://anne-franke.de
    baseURLhttps = https://anne-franke.de
  }
  foundation {
    newsletter {
      modalEnabled = 1
      modalHeaderTag = h2
    }
    sitelinetop.searchform.enabled = 1
      // page news
    sitelinetop.searchform.pid = 9047
  }
  page {
    meta {
      author = Anne Franke MdL Bayerischer Landtag
      description = Anne Franke MdL, Mitglied des Bayerischen Landtags, Fraktion Bündnis 90/Die Grünen
      keywords = Anne Franke, MdL, Bayern, Landtag, Grüne
    }
  }
  pages {
    contact                 = 0
    gdpr                    = 9191
    news                    = 0
    newslettersubscription  = 0
    root                    = 0
    rss                     = 9062
    siteLineBottom          = 0
    siteLineTop             = 9093
    shop                    = 0
  }
    // Webstatistik
  piwik {
    enabled = 1
    siteId = 36
  }
}

// EXT:startgreen ------------------------------------------------------------//

start.green {
  css {
    // Small Website?
    // grid.max-width = 62.5rem
    small = 0
  }
  // Own Banner?
  pages { 
    banner {
      // Vorgabewerte sind Bayern: zentrale Elemente
      // small    = 8824        
      // medium   = 8825
      // high     = 8826
    }
      // Ordner/Seite für die Fußzeile
    footer          = 9067
      // Hauptmenue
    navigation.root = 9012
  }
}
