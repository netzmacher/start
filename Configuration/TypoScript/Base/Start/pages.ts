start {

  # cat=start - pages*//200; type=int+; label=Root:Uid of the root page
  pages.root										= 
  # cat=start - pages*//201; type=int+; label=Site top-line:Uid of the page, which contains the content for the top-line of the site.
  pages.siteLineTop							= 
  # cat=start - pages*//202; type=int+; label=Site bottom-line:Uid of the page, which contains the content for the bottom-line of the site.
  pages.siteLineBottom					= 
  # cat=start - pages*//301; type=int+; label=Contact data*:*Obligate:Uid of page which contains any contact data.
  pages.contact									=
  # cat=start - pages*//302; type=int+; label=Footer:Uid of page which contains the folder with content or footer pages. PLEASE RESPECT [START - STRUCTURE - FOOTER].
  pages.footer									= 9999999
  # cat=start - pages*//303; type=int+; label=GDPR/DSGVO:Uid of page which contains the General Data Protection Regulation - GDPR (German: Datenschutz-Grundverordnung - DSGVO).
  pages.gdpr										=
  # cat=start - pages*//304; type=int+; label=News:Uid of page which contains your news.
  pages.news										=
  # cat=start - pages*//305; type=int+; label=Newsletter:Uid of page which the form for subscribing the newsletter
  pages.newslettersubscription	=
  # cat=start - pages*//306; type=int+; label=RSS:Uid of the rss feed. Main Feed with an icon in the top navigation.
  pages.rss 										=
  # cat=start - pages*//307; type=string; label=RSS title:Title of the feed in the link tag.
  pages.rss.tagtitle						= News
  # cat=start - pages*//308; type=int+; label=RSS 2:Uid of the rss feed. Another feed in html code without any icon.
  pages.rss2 										=
  # cat=start - pages*//309; type=string; label=RSS 2 title:Title of the second feed in the link tag.
  pages.rss2.tagtitle						= Calendar
  # cat=start - pages*//310; type=int+; label=Shop:Uid of page which contains your shop.
  pages.shop										=
  # cat=start - pages*//400; type=int+; label=Print:Page with header and footer for the print page.
  pages.print										= 9999999
  # cat=start - pages*//400; type=int+; label=Footer Library:Uid of the footer library folder.
  pages.footer.library					= 9999999

}