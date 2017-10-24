start {
  foundation {
    sitelinetop {
      # cat=start - foundation - sitelinetop - searchform//300;  type=boolean;                label= Search form:Enable the search form
      searchform.enabled = 
      # cat=start - foundation - sitelinetop - searchform//301;  type=+int;                   label= Search form:[OBLIGATE!] Id of the result page
      searchform.pid = 1
      # cat=start - foundation - sitelinetop - searchform//302;  type=string;                 label= Search form:[OBLIGATE!] Name of the parameter. I.e. tx_browser_pi1[sword]
      searchform.param = sword
      # cat=start - foundation - sitelinetop - searchform//303;  type=options[get,post];      label= Search form:Method
      searchform.method = post
      # cat=start - foundation - sitelinetop - searchform//305;  type=string;                 label= Search form:Placeholder
      searchform.placeholder = Find Stuff
    }
  }
}