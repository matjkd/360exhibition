<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

        <?= $this->load->view('template/' . $this->config_theme . '/header') ?>

    </head>

    <body>
        <input type="hidden" id="baseurl" value="<?= base_url() ?>"/>
        <div id="mainContainer" class="container">
       
            <div id="" class="one-third column">

<div class="boxesFront ">LOGO</div>


            </div>
            
             <div id="" class="two-thirds column">

<div class="boxesFront ">TITLE</div>


            </div>
            


            <div id="container" >

                <?php if (isset($slideshow_active) && $slideshow_active != NULL) { ?>    
                    <?= $this->load->view('slideshow/slideshow') ?>
                <?php } ?>
              
                    <div class="ten columns">

  <?= $this->load->view('global/alert') ?>   
                        <?= $this->load->view($main_content) ?>   
                    </div>

                    <div class="six columns">

                        <?php if(isset($sidebox) && $sidebox != NULL) { ?>
                        <?=$this->load->view('sidebox/'.$sidebox)?>
                        <?php } ?>
                    </div>
               

            </div> 
<div style="clear:both;"></div>
            <div  class="sixteen columns">

                <?= $this->load->view('global/' . $this->config_theme . '/footer_menu') ?>

            </div>
          
        </div>
          
            
        <!--! end of #container -->
        <?= $this->load->view('global/footer') ?>

    </body>
</html>