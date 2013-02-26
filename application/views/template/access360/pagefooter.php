<style type="text/css" media="screen, projection">
    #port {
        margin: 1.5em 0px;
        overflow: hidden;
        position: relative;
        /*width: 700px;*/
        height: 168px;
        border-left: 1px solid black;
        border-right: 1px solid black;
        padding: 24px 64px;
    }

    .parallax-layer {
        position: absolute;
    }
    
    .thumb {
display: inline-block;
vertical-align: baseline;
overflow: hidden;
padding-top: 64px;
height: 0;
width: 64px;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
background-position: 0 0;
background-repeat: no-repeat;
text-decoration: none;
color: inherit;
}
    
    /* Horizontal lists of inline-blocks, with image backgrounds as thumbnails */
    /* Tested in Safari 4 | FF 3.5 | Opera 9.6 | IE7 */ 
    .thumbs_index {
        padding: 0 12px;
        /* initial position */
        left: 0;
        /* Put all he thumbs on one line. */
        white-space: nowrap;
    }
    
    .thumbs_index > li {
        display: inline;
        margin-right: 12px;
    }
    
    .img_thumb {
      padding-top: 120px;
      width: 192px;

      -webkit-box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
         -moz-box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
              box-shadow: 0 4px 24px rgba(0, 0, 0, 0.4);
    }
    
    .footnote { font-size: 0.6em; color: #858b95; }
  </style>
  


<div id="port">
      <!-- List must be spaceless becuse <li>s are display: inline, and any spaces between them show in IE -->
      <ul class="thumbs_index index parallax-layer">
         <li><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/1.jpg');">item</a></li
        ><li><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/2.jpg');">item</a></li
        ><li><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/3.jpg');">item</a></li
        ><li><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/4.jpg');">item</a></li
        ><li><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/5.jpg');">item</a></li
        ><li class="last"><a class="img_thumb thumb" href="#" style="background: url('http://webdev.stephband.info/jparallax/images/parallax_thumbnails/6.jpg');">item</a></li>
      </ul>
    </div>