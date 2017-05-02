start {

  # cat=start - favicon//100; type=string; label= Path:Path to the favicon
  favicon = typo3conf/ext/start/Resources/Public/Images/favicon.ico

  # cat=start - gridelements//101; type=int+; label= Id 1:Id of the gridelement with 1 column
  gridelement.col1 = 1
  # cat=start - gridelements//102; type=int+; label= Id 2:Id of the gridelement with 2 columns
  gridelement.col2 = 2
  # cat=start - gridelements//103; type=int+; label= Id 3:Id of the gridelement with 3 columns
  gridelement.col3 = 3
  # cat=start - gridelements//104; type=int+; label= Id 4:Id of the gridelement with 4 columns
  gridelement.col4 = 4
  # cat=start - gridelements//105; type=int+; label= Id 5:Id of the gridelement with 5 columns
  gridelement.col5 = 5
  # cat=start - gridelements//106; type=int+; label= Id 6:Id of the gridelement with 6 columns
  gridelement.col6 = 6

  # cat=start - pages*//201; type=int+; label=Site top-line:Uid of the page, which contains the content for the top-line of the site.
  pages.siteLineTop     = 
  # cat=start - pages*//202; type=int+; label=Site bottom-line:Uid of the page, which contains the content for the bottom-line of the site.
  pages.siteLineBottom  = 
  # cat=start - pages*//301; type=int+; label=Contact data*:*Obligate:Uid of page which contains any contact data.
  pages.contact         =
  # cat=start - pages*//302; type=int+; label=News:Uid of page which contains your news.
  pages.news            =
  # cat=start - pages*//303; type=int+; label=Shop:Uid of page which contains your shop.
  pages.shop            =
  # cat=start - pages*//400; type=int+; label=Print:Page with header and footer for the print page.
  pages.print  = 9999
  # cat=start - pages*//400; type=int+; label=Footer Library:Uid of the footer library folder.
  pages.footer.library  = 9999

  # cat=start - structure - content//100; type=string; label= Class left column:Wrap content for the left column with a div with the current class. Example: startShadow startBackgroundWhite startWiMarginDefault
  structure.content.left.class    = 
  # cat=start - structure - content//102; type=string; label= Class right column:Wrap content for the right column with a div with the current class. Example: startShadow startBackgroundWhite startWiMarginDefault
  structure.content.right.class    = 

  # cat=start - templates//300; type=string; label= Layout:Path to the fluid layouts. With ending slash!
  fluid.path.layouts    = EXT:start/Resources/Private/Templates/Layouts/
  # cat=start - templates//301; type=string; label= Partials:Path to the fluid partials. With ending slash!
  fluid.path.partials   = EXT:start/Resources/Private/Templates/Partials/
  # cat=start - templates//302; type=string; label= Templates:Path to the fluid templates. With ending slash!
  fluid.path.templates  = EXT:start/Resources/Private/Templates/

}