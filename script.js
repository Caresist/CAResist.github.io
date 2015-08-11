var main = function(){
    $('#button').mouseenter(function(){
        $('#button').fadeTo("fast",1.0);
    });
    $('#button').mouseleave(function(){
        $('#button').fadeTo("fast",0.5);
    });
}
$(document).ready(main());