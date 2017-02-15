
// Added sorting and exclude 2 columns ssing aoColumnDefs //
$(document).ready( function() {
  $('#cardsTable').dataTable( {
    "aoColumnDefs": [{ "bSortable": false, "aTargets": [ 3 ]}],
        "paging":   false,
        "searching": false,
        "info":     false 
     } );
} );