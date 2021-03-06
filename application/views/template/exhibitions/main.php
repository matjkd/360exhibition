<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>

<?= $this->load->view('template/' . $this->config_theme . '/header') ?>

</head>

<body>
	<input type="hidden" id="baseurl" value="<?= base_url() ?>" />
<div class="container" >
<div id="backgroundImage">
&nbsp; 
</div>
</div>

	<?php $is_logged_in = $this->session->userdata('is_logged_in');
	$role = $this->session->userdata('role');
	if($is_logged_in != NULL && $role < 2)
	{
		echo "<div class='admin_menu_container'><div class='admin_menu'>";
		echo anchor('/admin/add_gallery_content', 'Add Gallery Item');
		echo anchor('/admin/add_case_study', 'Add Case Study');
		echo "</div></div>";
	}

	?>
	<div id="mainContainer" class="container">


		<?php if(isset($hide_top) && $hide_top == 1) { 
} else {?>
		<div id="" class="one-third column">

			<div class="boxesFront ">
				<a href="<?=base_url()?>"><img height="130px"
					src="<?=base_url()?>images/icons/exhibitionsLogo.png" /> </a>
			</div>


		</div>

		<div id="" class="two-thirds column">

			<?php if(!isset($titleImage) || $titleImage == NULL) {
				$title = "frontTitle.png";
			} else {
				$title = $titleImage;
			}
			?>

			<div class="boxesFront mainTitle">
				<img height="95px" src="<?=base_url()?>images/icons/<?=$title?>" />
			</div>


		</div>

		<div style="clear: both; height: 30px;"></div>

		<?php }?>






		<div id="container">

			<?php if (isset($slideshow) && $slideshow != NULL) { ?>
			<?= $this->load->view('slideshow/'.$slideshow.'/picture') ?>
			<?php } ?>


			<?php if(!isset($sidebox_pos)) {
				$side = 'left';
			}
			if(isset($sidebox_pos) && $sidebox_pos==NULL) {
				$side = 'left';
			}
			if(isset($sidebox_pos) && $sidebox_pos=='left') {
				$side = 'left';
			}
			if(isset($sidebox_pos) && $sidebox_pos=='right') {
				$side = 'right';
			}

             		if($side == 'left') {?>

			<div class="one-third  column">
		
				<?php if(isset($sidebox) && $sidebox != NULL) { ?>


				<?=$this->load->view($sidebox)?>
				<?php } ?>
			</div>
			<?php }?>

			<div class="two-thirds  column">

				<?= $this->load->view('global/alert') ?>
				<?= $this->load->view($main_content) ?>
			</div>

			<?php if($side == 'right') {?>
			<div class="one-third  column">
				&nbsp;
				<?php if(isset($sidebox) && $sidebox != NULL) { ?>


				<?=$this->load->view($sidebox)?>
				<?php } ?>
			</div>
			<?php }?>




		</div>
		<div style="clear: both;"></div>
		<div class="sixteen columns">

			<?= $this->load->view('global/' . $this->config_theme . '/footer_menu') ?>

		</div>

	</div>


	<!--! end of #container -->
	<?= $this->load->view('global/exhibitions/contact_side') ?>
	<?= $this->load->view('global/footer') ?>

</body>
</html>
