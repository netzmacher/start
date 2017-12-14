start {

  config {
    # cat=start - config - debugging//105; type=boolean;  label= contentObjectExceptionHandler:Disable it, if you like to see error prompts for content objects instead of an exception handling. Error prompts will cached. Please enable exception handling after the debugging.
    contentObjectExceptionHandler     = 1
		contentObjectExceptionHandler {
	    # cat=start - config - debugging//106; type=string;  label= contentObjectExceptionHandler prompt:Error message in case of exception handling
			errorMessage = Oops an error occurred. Code: %s. If you like to know more, please disable the ContentObjectExceptionHandler @ Constant Editor > category [START - DEBUGGING]
		}
  }

}