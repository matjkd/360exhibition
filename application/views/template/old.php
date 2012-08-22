<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>

 <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?=$title?></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?=base_url()?>favicon.ico">
  <link rel="apple-touch-icon" href="<?=base_url()?>apple-touch-icon.png">

<!-- Load google fonts-->
<link  href="http://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css" >

  <!-- CSS : implied media="all" -->
    <link rel="stylesheet" href="<?=base_url()?>css/custom-theme/jquery-ui-1.8.9.custom.css">
  <link rel="stylesheet" href="<?=base_url()?>css/grid.css">
  <link rel="stylesheet" href="<?=base_url()?>css/style.css?v=2">
   <link rel="stylesheet" href="<?=base_url()?>css/template.css">

  <link rel="stylesheet" href="<?=base_url()?>css/mscarousel.css">
  <link rel="stylesheet" media="handheld" href="<?=base_url()?>css/handheld.css?v=2">

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <script src="<?=base_url()?>js/libs/modernizr-1.6.min.js"></script>


</head>

<body>





  <div id="container">


    	<div class="container_24" id="header">

    	<!-- Logo here -->
    	<div id="logo">
    		<img width="352px" height="85px" src="<?=base_url()?>images/template/logo.png" alt="Logo" />
    	</div>
         <div id="menutop" class="grid_24">


         </div>
    	</div>

      <div id="slide_area">


		<img width="960px"   height="200px" src="<?=base_url()?>images/slides/sl1.png"/>

      </div>

    <div class="container_24">

        <div id="breadcrumb" class="grid_10"></div>

        <div id="breadcrumb2" class="grid_14""></div>

    </div>
         <div class="clear"></div>

          <div class="container_24" id="main">

		<div id="side_box" class="grid_10">

<p>OpeningTimes:<br/>
12pm - 11pm tuesday  to Sunday</p>

<p>
Kitchen:<br/>
Midday til 3pm, then 6pm til 9:30pm Tuesday to Saturday<br/>
1pm til 8:30pm Sunday<br/>
</p>

<p>
Tel: 01245 267 580<br/>
email: info@eaglepub.co.uk</p>


		</div>


		<div id="main_container" class="grid_14"">



			<div class="maincontent">
                            <?=$this->load->view($main_content)?>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

                    </div>

		</div>
	    <div class="clear"></div>
    </div>



 <?php if(isset($section2)) { ?>
 <div id="section2">
     <div class="container_24" >

		<?=$this->load->view($section2)?>

    </div>
 </div>
 <?php } ?>


<?=$this->load->view('template/section3')?>


    <div id="bottomfooter"">
    	<div class="container_24">
<?=$config_company_name?>.  &copy; 2011. Website being developed by <a href="http://www.redstudio.co.uk">Redstudio Design Limited</a>
		</div>
    </div>
  </div>

<!--! end of #container -->

  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="<?=base_url()?>js/libs/jquery-1.5.0.js"%3E%3C/script%3E'))</script>

  <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=true&amp;key=ABQIAAAAo44bloMTDYnLwRZTm304PxR78uhS13SEO1n5L4F_TRsOYsb3IBRjLjdihbiFFj7qq2hC_bCLTSwvvg" type="text/javascript"></script>

  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

  <!-- scripts concatenated and minified via ant build script-->
    <script src="<?=base_url()?>js/wymeditor/jquery.wymeditor.min.js"></script>
  <script src="<?=base_url()?>js/plugins.js"></script>
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

</body>
</html>