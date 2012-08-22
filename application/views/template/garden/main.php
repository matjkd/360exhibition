<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

        <?= $this->load->view('template/garden/header') ?>

    </head>

    <body>
          <input type="hidden" id="baseurl" value="<?=base_url()?>"/>
<!--<img id="bgimg" src="<?= base_url() ?>css/garden/images/background.jpg" />-->
        <div id="header">


            <div id="menutop">


                <?= $this->load->view('global/garden/menu') ?>
            </div> 
        </div>
   
    <div id="container">
        <?php if (isset($slideshow_active) && $slideshow_active == 1) { ?>    
        <?= $this->load->view('slideshow/slideshow') ?>
        <?php }  ?>

            <?= $this->load->view($main_content) ?>   


    </div> 

    <div  id="bottomfooter" >

        <?= $this->load->view('global/garden/footer_menu') ?>

    </div>
    <div class="bottom_menu">
    <div class="footermenu" >
 <?= $this->load->view('global/garden/menu') ?> 
    </div>
        
    </div>
    <!--! end of #container -->
    <?= $this->load->view('global/footer') ?>

</body>
</html>