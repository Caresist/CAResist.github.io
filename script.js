var main = function(){
    $('#button').mouseenter(function(){
        $('#button').fadeTo("fast",0.5);
    });
    $('#button').mouseleave(function(){
        $('#button').fadeTo("fast",1.0);
    });
}
$(document).ready(main());