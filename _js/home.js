$(document).ready( function(){
var nameMsg = 'Nome' ;

  	var name = $(".nome").val();
    name = name == '' ? nameMsg : name ;
    $(".nome").val(name);

});
