start {
  responsive {
    image {
			breakpoint {
				# cat=start - responsive - image - breakpoints//100;     type=int+; label= smartphone:breakpoint for the smartphone
				smartphone	= 600
				# cat=start - responsive - image - breakpoints//101;     type=int+; label= tablet:breakpoint for the tablet image
				tablet			= 1024
				# cat=start - responsive - image - breakpoints//102;     type=int+; label= desktop:breakpoint for the desktopimage
				desktop			= 1920
			}
    }
  }
  page {
    meta {
      # cat=start - responsive - viewport//100;                  type=string; label= viewport:Leave it empty, if you don't like a viewport meta tag by Start.
      viewport    = width=device-width, initial-scale=1.0
    }
  }
}