$(function(){
			$('#loadInfo').hide();
			$('a.button').click(function(){
				$('#loadInfo').slideDown();
				$(this).parent().after('<h2>Images loaded into DOM from CSS:</h2><ul id="loadedImgs"></ul>')
				var loadedImgs = $.preloadCssImages({statusTextEl: '#textStatus', statusBarEl: '#status'});
				for(var i = 0; i<loadedImgs.length; i++){
					$('#loadedImgs').append('<li><img src=\"'+loadedImgs[i].src+'\" />: '+loadedImgs[i].src+'</li>');
				}
				//resize parent iframe to contain new images
				$(window.parent.document).find('iframe:eq(0)').height('110em');
$('#loadInfo').hide();
			});

		});

$(document).ready(function(){  
 
    $('#parallax div').parallax({
            
        frameDuration: 40,
        ytravel:0,
        xtravel:1
            
    }); 
 
});