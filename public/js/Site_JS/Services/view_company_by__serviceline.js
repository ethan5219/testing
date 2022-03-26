$(document).ready(function(){
  $("#searchColumn").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("h4").filter(function() {
      $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  $("#searchColumn").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("h4").filter(function() {
      $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


$('input[name="filter-checkbox"]').attr( "checked" , true );

$('input[name="filter-checkbox"]').click(function() {
	var value = $(this).val();
	var industry_grouping = $("div[data='" + value +"']");
	industry_grouping[this.checked? 'show' : 'hide']()
    });
	
});


