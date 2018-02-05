start {
  foundation {
    sitelinetop {
      # cat=start - foundation - sitelinetop - searchform//300;  type=boolean;                label= Search form:Enable the search form
      searchform.enabled = 
      # cat=start - foundation - sitelinetop - searchform//301;  type=+int;                   label= Pid:[OBLIGATE!] Id of the result page
      searchform.pid = 1
      # cat=start - foundation - sitelinetop - searchform//302;  type=string;                 label= Parameter:[OBLIGATE!] Name of the parameter. I.e. tx_browser_pi1[sword]
      searchform.param = sword
      # cat=start - foundation - sitelinetop - searchform//310;  type=string;                 label= Action parameter:Name of the action parameter. I.e. tx_indexedsearch_pi2[action]
      searchform.action.param = 
      # cat=start - foundation - sitelinetop - searchform//311;  type=string;                 label= Action value:Name of the action value. I.e. search
      searchform.action.value = 
      # cat=start - foundation - sitelinetop - searchform//312;  type=string;                 label= Controller parameter:Name of the controller parameter. I.e. tx_indexedsearch_pi2[controller]
      searchform.controller.param = 
      # cat=start - foundation - sitelinetop - searchform//313;  type=string;                 label= Controller parameter:Name of the controller value. I.e. Search
      searchform.controller.value = 
      # cat=start - foundation - sitelinetop - searchform//320;  type=options[get,post];      label= Method:
      searchform.method = post
      # cat=start - foundation - sitelinetop - searchform//322;  type=string;                 label= Placeholder:
      searchform.placeholder = Find Stuff
    }
  }
}