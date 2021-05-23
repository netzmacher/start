page {
		// empty statement for proper comments only
  63148 {
  }
    // start__simple_[01..04]
  63148 = CASE
  63148 {
      // One column
    start__simple_01 < .start__bronze_01
    start__simple_01 {
      templateName = Simple_01.html
    }
      // Two columns: content | right
    start__simple_02 < .start__bronze_02
    start__simple_02 {
      templateName = Simple_02.html
    }
      // Two columns: left | content
    start__simple_03 < .start__bronze_03
    start__simple_03 {
      templateName = Simple_03.html
    }
      // Three columns: left | content | right
    start__simple_04 < .start__bronze_04
    start__simple_04 {
      templateName = Simple_04.html
    }
  }
}