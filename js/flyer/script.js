 
 //wymeditor
 $(document).ready(function() {
    $('.wymeditor').wymeditor();
  });
  
  
//autoplay roundabout
$(document).ready(function() {
    var interval;

    $('#myRoundabout')
    .roundabout({
        minScale: 0.8 // tiny!

    })

    .hover(
        function() {
            // oh no, it's the cops!
            clearInterval(interval);
        },
        function() {
            // false alarm: PARTY!
            interval = startAutoPlay();
        }
        );
    //unhide the images		
    $('.slide_area').css("display", "block");

    // let's get this party started
    interval = startAutoPlay();
});

function startAutoPlay() {
    return setInterval(function() {
        $('#myRoundabout').roundabout_animateToNextChild();
    }, 8000);
}

   
   
//Modal dialog increase the default animation speed to exaggerate the effect
$.fx.speeds._default = 500;
$(document).ready(function(){
    $( "#dialog" ).dialog({
        autoOpen: false,
        show: "fade",
        hide: "fade",
        width: 500
    });

    $( "#opener" ).click(function() {
        $( "#dialog" ).dialog( "open" );
        return false;
    });
});
        
$(document).ready(function() {
    $('.linkicons').cycle({
        speedIn:  2000,
        speedOut: 2000,
        timeout:   10000,
        fx: 'scrollLeft' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    $('.linkicons').css("display", "block");
});

$(document).ready(function() {
    $('#datatable').dataTable({
        "bJQueryUI": true,
        "sPaginationType": "full_numbers"
    });
} );


// inline input titles
$(function()  {
    $('input[title]').each(function() {
        if($(this).val() === '') {
            $(this).val($(this).attr('title')); 
        }
  
        $(this).focus(function() {
            if($(this).val() === $(this).attr('title')) {
                $(this).val('').addClass('focused'); 
            }
        });
  
        $(this).blur(function() {
            if($(this).val() === '') {
                $(this).val($(this).attr('title')).removeClass('focused'); 
            }
        });
    });
});



