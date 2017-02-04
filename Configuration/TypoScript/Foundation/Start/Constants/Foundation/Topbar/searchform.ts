start {
  foundation {
    topbar {
      # cat=start - foundation - topbar - searchform//300;  type=boolean;                label= Search form:Enable the search form
      searchform = 
      # cat=start - foundation - topbar - searchform//301;  type=+int;                   label= Search form:[OBLIGATE!] Id of the result page
      searchform.pid = 1
      # cat=start - foundation - topbar - searchform//302;  type=string;                 label= Search form:[OBLIGATE!] Name of the parameter
      searchform.param = sword
      # cat=start - foundation - topbar - searchform//303;  type=options[get,post];      label= Search form:Method
      searchform.method = post
      # cat=start - foundation - topbar - searchform//304;  type=options[left,right];    label= Search form:Position of the search form
      searchform.position = right
      # cat=start - foundation - topbar - searchform//305;  type=string;                 label= Search form:Placeholder
      searchform.placeholder = Find Stuff
      # cat=start - foundation - topbar - searchform//306;  type=string;                 label= Search form:Label of the button
      searchform.button = Search
    }
  }
}