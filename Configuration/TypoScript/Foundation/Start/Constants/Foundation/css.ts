start {
  foundation {
		css {
			# cat=start - foundation - css -a//100;				type=boolean;						label= A-tags with icons:A-tags get an icon. Precondition is: a-tag has one of the classes "download", "external-url" or "internal-url". Or a-tag links to "mailto:" or "javascript: ".
			a.wiIcon = 1
			reveal-modal {
				position {
					# cat=start - foundation - css - reveal-modal - position//100;		type=options[absolute,fixed];	label= Small:Position property for the class .reveal-modal in small displays.
					small = absolute
					# cat=start - foundation - css - reveal-modal - position//101;		type=options[absolute,fixed];	label= Medium:Position property for the class .reveal-modal in medium displays.
					medium = absolute
					# cat=start - foundation - css - reveal-modal - position//102;		type=options[absolute,fixed];	label= Large:Position property for the class .reveal-modal in large displays.
					large = absolute
					# cat=start - foundation - css - reveal-modal - position//103;		type=options[absolute,fixed];	label= X-Large:Position property for the class .reveal-modal in x-large displays.
					x-large = absolute
					# cat=start - foundation - css - reveal-modal - position//104;		type=options[absolute,fixed];	label= XX-Large:Position property for the class .reveal-modal in xx-large displays.
					xx-large = absolute
				}
			}
		}
	}
}