
  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
   
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?=base_url()?>js/libs/jquery-1.5.0.js"%3E%3C/script%3E'))</script>
  
  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=<?=$maps_api?>" type="text/javascript"></script>

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 

  <!-- scripts concatenated and minified via ant build script-->
    <script src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js"></script>
  <script src="<?=base_url()?>js/plugins.js"></script>
   <script type="text/javascript" src="http://static.jquery.com/org/jquery.roundabout.js"></script>
    <script type="text/javascript" src="http://static.jquery.com/org/jquery.roundabout-shapes-1.1.min.js"></script>

      <script src="<?=base_url()?>js/script.js"></script>

  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="<?=base_url()?>js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19623681-9']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>