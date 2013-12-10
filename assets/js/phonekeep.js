
$(document).ready(function() {
	$('a').tooltip();

 

});


function cv_search() {

var sk= $('#searchkey').val();

	
	window.location.href='http://phonekeep.net23.net/home/search/' + sk;


};


		

			
	
			
	$(document).keypress(function(e) {

	

    if(e.keyCode == 13) {
    	
       
    }

  
});	
	

$(document).ready(function() {
$('input.typeahead-devs').typeahead({
name: 'accounts',
local:['Sunday', 'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday']
});
});


$( "#grocery" ).click(function() {
  
  $( "#grocery-main" ).show();

});


$( "#browse-shop" ).click(function() {
  
  $( "#browse-shop" ).hide();
  $("#grocery-detailed").show();
    $( "#browse-shop-hide" ).show();

});

$( "#browse-shop-hide" ).click(function() {
  
  $( "#browse-shop-hide" ).hide();
  $("#grocery-detailed").hide();
   $( "#browse-shop" ).show();

});




$(document).ready(function() {
	$('a').tooltip();

 $( "#grocery-main" ).hide();
 $( "#grocery-detailed" ).hide();

});


$( ".grocery-list-1" ).click(function() {
  


});


