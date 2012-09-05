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
    
    var slideShow1 = $('.slideshow');
    var slideShow2 =  $('.slideshow2');
    
    slideShow1.cycle({
        speedIn:  2000,
        speedOut: 2000,
        timeout:   5000,
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
   

    slideShow2.cycle({
        speedIn:  2000,
        speedOut: 2000,
        timeout:   5000,
        fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
    });
    
      slideShow2.fadeIn(2000);
    slideShow1.fadeIn(2000);
  


});
       


// catch all document.write() calls
(function(doc){
    var write = doc.write;
    doc.write = function(q){ 
        log('document.write(): ',arguments); 
        if (/docwriteregexwhitelist/.test(q)) write.apply(doc,arguments);  
    };
})(document);




//wymeditor
jQuery(function() {
    jQuery('.wymeditor').wymeditor();
});

//overlay
$(document).ready(function() {



    $("img[rel]").overlay();
});

$(document).ready(function() {
    $(".services").hover(
        function () {
            $(this).stop().animate({
                opacity:0.8
            },
            500
            );
            $(this).find("h2").stop().animate({
                color:"#000000"
            },
            500
            );
        },
        function () {
            $(this).stop().animate({
                opacity:1.0
            }, 
            500
            );
            $(this).find("h2").stop().animate({
                color:"#319825"
            },
            500
            );
        }
        );
});

//gallery image mouse overs
$(document).ready(function() {
    $(".thumbnails").hover(
        function() {
            $(this).stop().animate({
                opacity:0.5
            },
            300
            );
        },
        function () {
            $(this).stop().animate({
                opacity:1.0
            },
            300
            );
        })

       
    
    
});



/*************************************************
    /*    handle carousel
  /***********************************************/
$(document).ready(function(){
						   
    // This initialises carousels on the container elements specified, in this case, accordion1.
	 $('#accordion-1').easyAccordion({ 
         autoStart: true, 
         slideInterval: 3000
 });
	 $('#accordion-1').fadeIn('slow');
});





/***********************************************/
/*
* MouseOver hover thing for sidebox buttons
*
*
************************************************/
$(document).ready(function(){
    
    $(".boxesFront img").hover(
        function() {
        
            $(this).stop().animate({
                opacity: 0.5
             
              
            },
            150
            );
               
            $(this).find('.clickhere').fadeIn(100);        
        },
        function() {
        
            $(this).stop().animate({
                
                opacity: 1
               
                
            
            },
            150
            );
           
        }
        );
    
});

/***********************************************/
/*
* MouseOver hover thing for menus
*
*
************************************************/
$(document).ready(function(){
    
    $(".menubutton").hover(
        function() {
        
            $(this).stop().animate({
                opacity: 0.8
             
              
            },
            150
            );
               
             
        },
        function() {
        
            $(this).stop().animate({
                
                opacity: 1
               
                
            
            },
            150
            );
           
        }
        );
    
});

/***********************************************/
/*
* MouseOver hover and click for sidebox contact slider
*
*
************************************************/
var contactbox = $("#contactSideBox");

$(document).ready(function(){
	
	contactbox.click(
	function() {
		$(this).stop().animate({
           opacity:"0.9",
         right: "0"
          
        })
	}		
	
	);
	
	contactbox.mouseleave(
			function() {
				$(this).stop().animate({
		           opacity:"0.5",
		         right: "-300"
		          
		        })
			}		
			
			);
	
	
	
	
	
});

/***********************************************/
/*
* MouseOver hover thing for sidebox buttons on gallery
*
*
************************************************/
$(document).ready(function(){
    
    $(".systemsMenu img").hover(
        function() {
        
            $(this).stop().animate({
                opacity: 0.5
             
              
            },
            150
            );
               
            $(this).closest('div').next().find('.pointer').stop().animate({
            	opacity:'+=0.5'
            });        
        },
        function() {
        
            $(this).stop().animate({
                
                opacity: 1
               
                
            
            },
            150
            );
            $(this).closest('div').next().find('.pointer').stop().animate({
            	opacity:'0'
            }); 
           
        }
        );
    
});
/***********************************************/
/*
 * Drop Down Menu
 *
 *
 **********************************************/


$(document).ready(function(){

	
    //cache nav
    var nav = $("#menutop");
				
    //add indicator and hovers to submenu parents
    nav.find("li").each(function() {
        if ($(this).find("ul").length > 0) {
            //						$("<span>").text("^").appendTo($(this).children(":first"));

            //show subnav on hover
            $(this).mouseenter(function() {
                $(this).stop().css({
                    backgroundPosition: "0px -28px"
                   
                },150);
                $(this).find("ul").stop(true, true).slideDown('fast');
            });
						
            //hide submenus on exit
            $(this).mouseleave(function() {
                $(this).stop().css({
                    backgroundPosition: "0px 0px"
                   
                },150);
                $(this).stop().animate({
                   
                    },150);
                $(this).find("ul").stop(true, true).slideUp('fast');
            });
        } else {
            //show subnav on hover
            $(this).mouseenter(function() {
                $(this).stop().css({
                    backgroundPosition: "0px -28px"
                   
                },150);
                
            });
						
            //hide submenus on exit
            $(this).mouseleave(function() {
                $(this).stop().css({
                    backgroundPosition: "0px 0px"
                   
                },150);
                $(this).stop().animate({
                   
                    },150);
                
            });
        }
    });
});

/***********************************************/
/*
 * infobox hover
 *
 *
 **********************************************/
$(document).ready(function(){

    $('.hoverbox').hover(
        function(){
            $('.infobox',this).stop(true, true).slideDown('fast');
        },
        function(){
            $('.infobox',this).stop(true, true).slideUp('fast');
        })

});

jQuery(function() {
    $('#timepicker1').timepicker();
    $('#timepicker2').timepicker();
});


/****************************************************/
/*
 *tabs
 *
 *
 **************************************************/
$(document).ready(function(){
    $('#tabvanilla').tabs({
        fx: {
            height: 'toggle', 
            opacity: 'toggle'
        }
    });
});
/**
 * --------------------------------------------------------------------
 * jQuery-Plugin "pngFix"
 * Version: 1.2, 09.03.2009
 * by Andreas Eberhard, andreas.eberhard@gmail.com
 *                      http://jquery.andreaseberhard.de/
 *
 * Copyright (c) 2007 Andreas Eberhard
 * Licensed under GPL (http://www.opensource.org/licenses/gpl-license.php)
 *
 * Changelog:
 *    09.03.2009 Version 1.2
 *    - Update for jQuery 1.3.x, removed @ from selectors
 *    11.09.2007 Version 1.1
 *    - removed noConflict
 *    - added png-support for input type=image
 *    - 01.08.2007 CSS background-image support extension added by Scott Jehl, scott@filamentgroup.com, http://www.filamentgroup.com
 *    31.05.2007 initial Version 1.0
 * --------------------------------------------------------------------
 * @example $(function(){$(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready
 *
 * jQuery(function(){jQuery(document).pngFix();});
 * @desc Fixes all PNG's in the document on document.ready when using noConflict
 *
 * @example $(function(){$('div.examples').pngFix();});
 * @desc Fixes all PNG's within div with class examples
 *
 * @example $(function(){$('div.examples').pngFix( { blankgif:'ext.gif' } );});
 * @desc Fixes all PNG's within div with class examples, provides blank gif for input with png
 * --------------------------------------------------------------------
 */

(function($) {

    jQuery.fn.pngFix = function(settings) {

        // Settings
        settings = jQuery.extend({
            blankgif: 'blank.gif'
        }, settings);

        var ie55 = (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion) == 4 && navigator.appVersion.indexOf("MSIE 5.5") != -1);
        var ie6 = (navigator.appName == "Microsoft Internet Explorer" && parseInt(navigator.appVersion) == 4 && navigator.appVersion.indexOf("MSIE 6.0") != -1);

        if (jQuery.browser.msie && (ie55 || ie6)) {

            //fix images with png-source
            jQuery(this).find("img[src$=.png]").each(function() {

                jQuery(this).attr('width',jQuery(this).width());
                jQuery(this).attr('height',jQuery(this).height());

                var prevStyle = '';
                var strNewHTML = '';
                var imgId = (jQuery(this).attr('id')) ? 'id="' + jQuery(this).attr('id') + '" ' : '';
                var imgClass = (jQuery(this).attr('class')) ? 'class="' + jQuery(this).attr('class') + '" ' : '';
                var imgTitle = (jQuery(this).attr('title')) ? 'title="' + jQuery(this).attr('title') + '" ' : '';
                var imgAlt = (jQuery(this).attr('alt')) ? 'alt="' + jQuery(this).attr('alt') + '" ' : '';
                var imgAlign = (jQuery(this).attr('align')) ? 'float:' + jQuery(this).attr('align') + ';' : '';
                var imgHand = (jQuery(this).parent().attr('href')) ? 'cursor:hand;' : '';
                if (this.style.border) {
                    prevStyle += 'border:'+this.style.border+';';
                    this.style.border = '';
                }
                if (this.style.padding) {
                    prevStyle += 'padding:'+this.style.padding+';';
                    this.style.padding = '';
                }
                if (this.style.margin) {
                    prevStyle += 'margin:'+this.style.margin+';';
                    this.style.margin = '';
                }
                var imgStyle = (this.style.cssText);

                strNewHTML += '<span '+imgId+imgClass+imgTitle+imgAlt;
                strNewHTML += 'style="position:relative;white-space:pre-line;display:inline-block;background:transparent;'+imgAlign+imgHand;
                strNewHTML += 'width:' + jQuery(this).width() + 'px;' + 'height:' + jQuery(this).height() + 'px;';
                strNewHTML += 'filter:progid:DXImageTransform.Microsoft.AlphaImageLoader' + '(src=\'' + jQuery(this).attr('src') + '\', sizingMethod=\'scale\');';
                strNewHTML += imgStyle+'"></span>';
                if (prevStyle != ''){
                    strNewHTML = '<span style="position:relative;display:inline-block;'+prevStyle+imgHand+'width:' + jQuery(this).width() + 'px;' + 'height:' + jQuery(this).height() + 'px;'+'">' + strNewHTML + '</span>';
                }

                jQuery(this).hide();
                jQuery(this).after(strNewHTML);

            });

            // fix css background pngs
            jQuery(this).find("*").each(function(){
                var bgIMG = jQuery(this).css('background-image');
                if(bgIMG.indexOf(".png")!=-1){
                    var iebg = bgIMG.split('url("')[1].split('")')[0];
                    jQuery(this).css('background-image', 'none');
                    jQuery(this).get(0).runtimeStyle.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='" + iebg + "',sizingMethod='scale')";
                }
            });
		
            //fix input with png-source
            jQuery(this).find("input[src$=.png]").each(function() {
                var bgIMG = jQuery(this).attr('src');
                jQuery(this).get(0).runtimeStyle.filter = 'progid:DXImageTransform.Microsoft.AlphaImageLoader' + '(src=\'' + bgIMG + '\', sizingMethod=\'scale\');';
                jQuery(this).attr('src', settings.blankgif)
            });
	
        }
	
        return jQuery;

    };




})(jQuery);

//jquery ui buttons
$(function() {
    $("button, input:submit").button();
		
});


//date picker on menu page

$(document).ready(function() {
    $( "#datepicker" ).datepicker({
        dateFormat : 'DD, d MM, yy',
        onSelect : function(dateText, inst)
        {
            var epoch = $.datepicker.formatDate('@', $(this).datepicker('getDate')) / 1000;

            $('#alternate').val(epoch);
        }
    });


    $( "#datepicker2" ).datepicker({
        dateFormat : 'DD, d MM, yy',
        onSelect : function(dateText, inst)
        {
            var epoch = $.datepicker.formatDate('@', $(this).datepicker('getDate')) / 1000;

            $('#alternate2').val(epoch);
        }
    });


});
	
        
$(function() {
 	
    $(".sortable").sortable({
        update: function(event,ui)
        {
            $.post(base_url + "admin/sort_gallery", {
                pages: $('.sortable').sortable('serialize')
            } );
        }
    });
    $(".sortable").disableSelection();
	 	
  	
});