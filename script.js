$(document).ready(function(){
     $('#button').mouseenter(function(){
        $('#button').fadeTo('slow', 1.0);
    });
    $('#button').mouseleave(function(){
        $('#button').fadeTo('slow', 0.7);
    });
});
