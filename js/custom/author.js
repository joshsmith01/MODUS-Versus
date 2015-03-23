$( document ).ready(function() {
 
	$( ".service-button" ).hover(
  function() {
  $( this ).siblings('[class^="fa fa-"]').addClass('secondary-color');},
  function(){                     
  $( this ).siblings('[class^="fa fa-"]').removeClass('secondary-color');
  }
);

});

