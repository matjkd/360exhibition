<meta charset="utf-8">

<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
     Remove this if you use the .htaccess -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title><?php
if (isset($metatitle) && $metatitle != NULL) {
    echo $metatitle;
} else {
    if (isset($title) && $title != NULL) {
        echo $title;
    } else {
        echo "Access360";
    }
}
?></title>
<meta name="description" content="<?php
if (isset($meta_description) && $meta_description != NULL) {
    echo $meta_description;
} else {
    echo "Access360";
}
?>">


<meta name="author" content="Redstudio Design Limited">
<meta name="google-site-verification" content="6b-awvPu0rGpkROf98Kuhjsjc7AAp4paL9cGex6Bq6k" />
<!--  Mobile viewport optimized: j.mp/bplateviewport -->
<meta name="viewport" content="width=960, initial-scale=1.0">

<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
<link rel="shortcut icon" href="<?= base_url() ?>favicon.ico">
<link rel="apple-touch-icon" href="<?= base_url() ?>apple-touch-icon.png">

<!-- Load google fonts-->
<link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>

<!-- CSS : implied media="all" -->
<link rel="stylesheet" href="<?= base_url() ?>css/custom-theme/jquery-ui-1.8.9.custom.css">

<link rel="stylesheet" href="<?= base_url() ?>css/demo_table.css">
<link rel="stylesheet" href="<?= base_url() ?>css/demo_table_jui.css">


<link rel="stylesheet" href="<?= base_url() ?>css/style.css?v=2">
<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/base.css">
<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/layout.css">
<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/skeleton.css">
<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/accordion.css">
<link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/template.css?20082012">

<!--[if lt IE 8]>    <link rel="stylesheet" href="<?= base_url() ?>css/<?=$this->config_theme?>/ie8.css"> <![endif]-->

<link rel="stylesheet" media="handheld" href="<?= base_url() ?>css/handheld.css?v=2">  

<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
<script src="<?= base_url() ?>js/libs/modernizr-1.6.min.js"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-920708-18']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>