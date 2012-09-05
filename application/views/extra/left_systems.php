<style type="text/css">
.systemsMenu {
	float: left;
	clear: left;
	width: 120px;
	padding-left: 20px;
}

.systemsMenu img {
	width: 120px;
}

.systemsMenuText {
	float: left;
}

.left-arrow,.right-arrow {
	float: left;
	width: 30px;
	height: 30px;
	
	margin-top:45px;
}

.systemPage {
	float: left;
	width: 120px;
	height: 30px;
	text-align: center;
	margin-top:45px;
}
.pointer, .pointerSelected {
position:absolute;
left:170px;
}

</style>

<div class="systemsMenu">

	<a href="<?=base_url()?>portable"><img
		src="<?=base_url()?>images/icons/PortableSmall.png" /> </a>

</div>


<div class="systemsMenuText">
	<?php if($gallery == "portable") {?>
	<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
			<?php }?>
			<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/portableLeft.png"/></div>

			<div class="systemPage">PORTABLE</div>

			<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/portableRight.png"/></div>

		</div>

	</div>

	<div class="systemsMenu">

		<a href="<?=base_url()?>modular"><img
			src="<?=base_url()?>images/icons/modularSmall.png" /> </a>

	</div>


	<div class="systemsMenuText">
		<?php if($gallery == "modular") {?>
		<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
				<?php }?>
				<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/modularLeft.png"/></div>

				<div class="systemPage">MODULAR</div>

				<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/modularRight.png"/></div>

			</div>
		</div>

		<div class="systemsMenu">

			<a href="<?=base_url()?>roadshows"><img
				src="<?=base_url()?>images/icons/roadshowsSmall.png" /> </a>

		</div>


		<div class="systemsMenuText">
			<?php if($gallery == "roadshow") {?>
			<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
					<?php }?>
					<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/roadshowLeft.png"/></div>

					<div class="systemPage">ROADSHOWS</div>

					<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/roadshowRight.png"/></div>
				</div>

			</div>

			<div class="systemsMenu">

				<a href="<?=base_url()?>custom_build"><img
					src="<?=base_url()?>images/icons/custombuildSmall.png" /> </a>

			</div>


			<div class="systemsMenuText">
				<?php if($gallery == "custom_build") {?>
				<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
						<?php }?>
						<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/customLeft.png"/></div>

						<div class="systemPage">CUSTOM BUILD</div>

						<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/customRight.png"/></div>

					</div>
				</div>
				
				
				
				<div class="systemsMenu">

					<a href="<?=base_url()?>outdoor"><img
						src="<?=base_url()?>images/icons/outdoorSmall.png" /> </a>

				</div>


				<div class="systemsMenuText">
					<?php if($gallery == "outdoor") {?>
					<div class="pointerSelected" style="display: block; opacity:1;">
		<?php } else {?>
		<div class="pointer"  style="display: block;  opacity:0;">
							<?php }?>
							<div class="left-arrow"><img src="<?=base_url()?>images/icons/arrows/outdoorLeft.png"/></div>

							<div class="systemPage">OUTDOOR EXHIBITIONS</div>

							<div class="right-arrow"><img src="<?=base_url()?>images/icons/arrows/outdoorRight.png"/></div>

						</div>
					</div>	