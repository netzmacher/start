start {
  foundation {
    topbar {
      # cat=start - foundation - topbar - searchform//300;  type=boolean;                label= Enabling:Enable the search form
      searchform = 
      # cat=start - foundation - topbar - searchform//301;  type=+int;                   label= Pid:[OBLIGATE!] Id of the result page
      searchform.pid = 1
      # cat=start - foundation - topbar - searchform//302;  type=string;                 label= Parameter:[OBLIGATE!] Name of the parameter. I.e. tx_browser_pi1[sword]
      searchform.param = sword
      # cat=start - foundation - topbar - searchform//310;  type=string;                 label= Action parameter:Name of the action parameter. I.e. tx_indexedsearch_pi2[action]
      searchform.action.param = 
      # cat=start - foundation - topbar - searchform//311;  type=string;                 label= Action value:Name of the action value. I.e. search
      searchform.action.value = 
      # cat=start - foundation - topbar - searchform//312;  type=string;                 label= Controller parameter:Name of the controller parameter. I.e. tx_indexedsearch_pi2[controller]
      searchform.controller.param = 
      # cat=start - foundation - topbar - searchform//313;  type=string;                 label= Controller parameter:Name of the controller value. I.e. Search
      searchform.controller.value = 
      # cat=start - foundation - topbar - searchform//320;  type=options[get,post];      label= Method:
      searchform.method = post
      # cat=start - foundation - topbar - searchform//321;  type=options[left,right];    label= Position:Position of the search form
      searchform.position = right
      # cat=start - foundation - topbar - searchform//322;  type=string;                 label= Placeholder:
      searchform.placeholder = Find Stuff
      # cat=start - foundation - topbar - searchform//323;  type=string;                 label= Label of the button:
      searchform.button = Search
    }
  }
}