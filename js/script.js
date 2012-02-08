var x=0, 
y=0,
rate=0,
maxspeed=5;
var backdrop = $('.backdrop');
var scrollerdiv = $('.scrollerdiv');
var browserwidth =  $(window).width();
var divwidth = 2482-browserwidth;

$('.direction', backdrop).mousemove(function(e){
    var $this = $(this);
    var left = $this.is('.left');
    
    if (left){
        var w = $this.width();
        rate = (w - e.pageX - $(this).offset().left + 1)/w;
    }
    else{
        var w = $this.width();
        rate = -(e.pageX - $(this).offset().left + 1)/w;
    }
});

backdrop.hover(
    function(){
        var scroller = setInterval( moveBackdrop, 30 );
        $(this).data('scroller', scroller);
    },
    function(){
        var scroller = $(this).data('scroller');
        clearInterval( scroller );
    }
    );   

function moveBackdrop(){
    x += maxspeed * rate;
    var newpos = x+'px';
    var newposvalue = x;
    
    if(newposvalue > 0 || newposvalue < -divwidth) {
        
    }
    else {
        setTimeout(function() {
            scrollerdiv.css('left',newpos) ;
        }, 100);
    }
}




