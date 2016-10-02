myConst {
  admin {
    company       = Die Netzmacher GbR
    www           = die-netzmacher.de
    headerComment = die-netzmacher.de ist der Internetdienstleister von die-korrespondenten.de

  }
  client {
    company = die-korrespondenten.de
    mail    = info@die-korrespondenten.de
    phone   = +49 / 30 / 7870 5647
    address {
      street.1  = Haus der Bundespressekonferenz
      street.2  = R 1303
      street.3  = Schiffbauer Damm 40
      zipCity   = 10117 Berlin
    }
  }
  fe_user {
    group {
      kunde =  3
    }
  }
  page {
    root          =  2
    add_comment   = 61
    exclusive     = 48
    hilfe         = 50
    impressum     =  8
    newsletter    = 58
    rechte_spalte = 10
    rechte_spalte {
      above_menu = 68
    }
    suche         = 45
    startseite    =  2
    startseite {
      title       = Startseite die-korrespondenten.de
    }
    text          = 11
    textmappe     =  3
    textmappe {
      exclusive   = 44
      story       = 65
      videos      = 66
    }
    tom           = 64
    login         = 13
    logout        = 12
    libraries     =  9
    libraries {
      comment {
        items     = 63
        list      = 62
      }
    }
  }
  path {
    root          = fileadmin/templates/die-korrespondenten.de/
    folder {
      css         = css/
    }
  }
  sysfolder {
    tom           = 64
  }
  menu {
    excludeUidList {
      # Login (13), Logout (12), Kontakt (47), Suche (45), Hilfe (50), Impressum (8)
      public  = 8,12,45,47,50
      login   = 8,13,45,47,50
    }
    metaList {
      # Login (13), Logout (12) Suche (45), Kontakt (47), Hilfe (50)
      public  = 47,45
      login   = 47,45
    }
  }
  tt_news {
    category {
      wochenvorschau  = 19
    }
    templates {
      tom = fileadmin/templates/die-korrespondenten.de/tt_news/tom.html
    }
  }
  html {
    meta {
      author      = Hannes Koch, Wolfgang Mulke
      keywords    = Agentur, Nachrichten, Hannes Koch, Wolfgang Mulke, Korrespondenten, die-korrespondenten.de
      description = Die Korrespondenten berichten für Print- und Online-Medien über Verbraucher-, Sozial- und Wirtschaftspolitik aus der Bundeshauptstadt.
    }
    marginal {
      iframe {
        height    = 800
      }
    }
  }
}


lib.tt_news {
  list    < temp.news_list
  single  < temp.news_single
  story   < temp.news_story
  tom     < temp.news_tom
  videos  < temp.news_videos
}

[globalVar = TSFE:id = 2]
  start.structure.content.main.30 < lib.tt_news.list
[global]

[globalVar = TSFE:id = 2] && [globalVar = GP:tx_ttnews|tt_news > 0]
  start.structure.content.main.30 < lib.tt_news.single
[global]