
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Access360</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS -->
    <link href="<?=base_url()?>css/bootstrap.css" rel="stylesheet">
    <link href=".<?=base_url()?>css/bootstrap-responsive.css" rel="stylesheet">
     <link href="<?=base_url()?>css/<?=$this->config_theme?>/styles.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
<div class="bodycontain">
    <div class="navbar navbar-inverse ">
    	
      <div class="navbar-access">
        <div class="container">
        	 <div class="logo" ><img src="<?=base_url()?>css/access360/images/logoBig.png"/></div>
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
         
         <div id="navcontainer">
<?=$this->load->view('template/access360/menu')?>
</div>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <?=$this->load->view('template/access360/hero')?>
      </div>

   
    

   

    </div> <!-- /container -->
    </div>
   <footer>
   	<div class="container">
      <?=$this->load->view('template/access360/pagefooter')?>
       </div>
      </footer>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
     <script src="<?=base_url()?>js/bootstrap.js"></script>
     <script src="<?=base_url()?>js/plugins.js"></script>

     
     <script src="<?=base_url()?>js/parallax.js"></script>
     <script src="<?=base_url()?>js/script.js"></script>

  

  </body>
</html>
