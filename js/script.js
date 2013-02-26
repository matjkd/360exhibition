var base_url = $('#baseurl').val();

// remap jQuery to $
(function($){

 





 



    })(this.jQuery);




// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function(){
    log.history = log.history || [];   // store logs to an array for reference
    log.history.push(arguments);
    if(this.console){
        console.log( Array.prototype.slice.call(arguments) );
    }
};

$(document).ready(function() {
    
  
    // Declare parallax on layers
    jQuery('.parallax-layer').parallax({
      mouseport: jQuery("#port"),
      yparallax: false
    });
  
  	
});