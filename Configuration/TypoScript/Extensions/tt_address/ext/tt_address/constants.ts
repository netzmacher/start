start {
	extensions {
		tt_address {
			subscribe {
				# cat=START - EXTENSIONS - TT_ADDRESS - SUBSCRIBE //100;      type=int+; label= Folder: Uid of the folder, which contains the tt_address records.
				pid = 9999
				# cat=START - EXTENSIONS - TT_ADDRESS - SUBSCRIBE //100;      type=int+; label= Direct Mail category: Uid of the direct mail category, which should linked with tt_address records.
				directmailcatuid = 9999
			}
			unsubscribe {
				# cat=START - EXTENSIONS - TT_ADDRESS - UNSUBSCRIBE //100;      type=int+; label= Folder: Uid of the folder, which contains the tt_address records.
				pid = 9999
			}
		}
	}
}