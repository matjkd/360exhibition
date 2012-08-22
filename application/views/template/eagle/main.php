<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
 
<?=$this->load->view('global/header')?>

</head>

<body>

  <div id="container">
  	<div class="container_24" id="header">

    	<!-- Logo here -->
    	<div id="logo">
    		<img width="389px" height="88px" src="<?=base_url()?>images/template/eaglelogo.png" alt="Logo" />
    	</div>
         <div id="menutop">
  <?=$this->load->view('global/menu')?>

         </div>
    	</div>

      <div id="bodycontainer" class="container_24">
         <?=$this->load->view('slideshow/slideshow')?>
            <div class="clear"></div>

            <div id="textcontainer">
         <?php
         if(!isset($sidebar))   {
             $mainsize ="grid_24";
         }
         else
         {
             $mainsize ="grid_14";
             ?>

           <div class="grid_10">

            <?=$this->load->view($sidebar)?>
          </div >

         <?php } ?>
        


          <div class="<?=$mainsize?>">
              <?=$this->load->view($main_content)?>
              

          </div>
            

         <div class="clear"></div>
</div>

      </div>
      
      <div class="container_24" id="footer">
          <?=$this->load->view('global/footer_menu')?>
<?=$this->load->view('global/social_icons')?>

      </div>
      
  </div> 

<!--! end of #container -->
<?=$this->load->view('global/footer')?>
  
</body>
</html>