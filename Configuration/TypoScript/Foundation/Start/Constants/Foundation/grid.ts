start {
  foundation {
    grid {
      # cat=start - foundation - grid//100;    type=string;            label= Column: CSS class for a column
      class.cell = columns
      # cat=start - foundation - grid//101;    type=string;            label= Row: CSS class for a row
      class.row = row
      # cat=start - foundation - grid//102;    type=string;            label= Row without margin: CSS class for a row without margin
      class.rowWoMargin = row
      # cat=start - foundation - grid//200;    type=string;            label= Row top: Additional CSS class for the top row
      class.rowPlusTop = top
      # cat=start - foundation - grid//210;    type=string;            label= Row main: Additional CSS class for the main row
      class.rowPlusMain = main
      # cat=start - foundation - grid//220;    type=string;            label= Row main full width: Additional CSS class for the main row but with full width
      class.rowPlusMainFullWidth = main fullwidth
      # cat=start - foundation - grid//230;    type=string;            label= Row bottom: Additional CSS class for the bottom row
      class.rowPlusBottom = bottom
      # cat=start - foundation - grid//300;    type=string;            label= Row expanded: Additional CSS class for expanded rows (stage). Is used in templates Start blue.
      class.rowPlusStage = expanded
    }
	}
}