start {

  # cat=start - favicon//100; type=string; label= Path:Path to the favicon
  favicon = typo3conf/ext/start/Resources/Public/Images/favicon.ico

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

  # cat=start - templates//300; type=string; label= Layout:Path to the fluid layouts. With ending slash!
  fluid.path.layouts    = EXT:start/Resources/Private/Templates/Layouts/
  # cat=start - templates//301; type=string; label= Partials:Path to the fluid partials. With ending slash!
  fluid.path.partials   = EXT:start/Resources/Private/Templates/Partials/
  # cat=start - templates//302; type=string; label= Templates:Path to the fluid templates. With ending slash!
  fluid.path.templates  = EXT:start/Resources/Private/Templates/

}