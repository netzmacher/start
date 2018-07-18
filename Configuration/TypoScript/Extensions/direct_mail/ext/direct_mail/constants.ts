start {
	extensions {
		direct_mail {
			categories {
				# cat=START - DIRECT_MAIL - CATEGORIES* //101;      type=int+;		label= #1 Uid*:		[*OBLIGATE!] Uid of the default newsletter
				01.uid = 
				# cat=START - DIRECT_MAIL - CATEGORIES* //201;      type=int+;		label= #2 Uid*:		[*OBLIGATE!] Uid of the 2nd direct mail category
				02.uid = 
				# cat=START - DIRECT_MAIL - CATEGORIES* //202;      type=string;	label= #2 Value*: [*OBLIGATE] Value MUST correspond with the 2nd value of the Powermail checkbox "Direct mail categories". See category: START - DIRECT_MAIL - POWERMAIL
				02.value = newsletter 02
				# cat=START - DIRECT_MAIL - CATEGORIES* //301;      type=int+;		label= #3 Uid*:		[*OBLIGATE!] Uid of the 3rd direct mail category
				03.uid = 
				# cat=START - DIRECT_MAIL - CATEGORIES* //302;      type=string;	label= #3 Value*: [*OBLIGATE] Value MUST correspond with the 3rd value of the Powermail checkbox "Direct mail categories". See category: START - DIRECT_MAIL - POWERMAIL
				03.value = newsletter 03
				# cat=START - DIRECT_MAIL - CATEGORIES* //401;      type=int+;		label= #4 Uid*:		[*OBLIGATE!] Uid of the 4th direct mail category
				04.uid = 
				# cat=START - DIRECT_MAIL - CATEGORIES* //402;      type=string;	label= #4 Value*: [*OBLIGATE] Value MUST correspond with the 4th value of the Powermail checkbox "Direct mail categories". See category: START - DIRECT_MAIL - POWERMAIL
				04.value = newsletter 04
			}
		}
	}
}
