



<div id="accordion-1" style="margin-bottom:50px; margin-top:0px; display:none;">
	<dl>
	
	<?php foreach($case_studies as $row):?>
		<dt><?=$row->case_title?> 
		<?php 
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in == true) { ?>
        
		<a href="<?=base_url()?>admin/edit_case_study/<?=$row->case_id?>">edit</a></dt>
		<?php } ?>
		<dd>
		<div>
		
		<div style="position:absolute; right:0px; z-index:0; margin-top:7px;">
		<?php if($row->image_1 !="") {?>
		<img height="110px"  alt="images" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/thumbs/<?=$row->image_1?>" />
		<?php }?>
		
		
		<?php if($row->image_2 !="") {?>
		<img height="110px"  alt="images" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/thumbs/<?=$row->image_2?>"/>
		<?php }?>
		
		<?php if($row->image_3 !="") {?>
		<img height="110px" alt="images" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/thumbs/<?=$row->image_3?>"/>
		<?php }?>
		</div>
		
		
		
		<div  style="float:left;">
    <a href="<?=base_url()?>"><img style="padding:10px;" width="180px" src="<?=base_url()?>images/icons/exhibitionsLogoTrimmed.png"/></a>
   </div>
<div style="clear:both;"></div>
			<div id="accordion-heading"><h2><?=$row->case_title?></h2></div>
			<div id="accordion-body"><p>
				<?=$row->description?>
				<br /> <a href="https://s3-eu-west-1.amazonaws.com/access360site/<?=$row->pdf_link?>" target="_blank" class="more">Download a pdf</a>
			</p></div>
			<?php if($row->image_side !="") {?>
			<div style="position:absolute; right:15px; top:150px; z-index:0;"><img height="150px" width="180px" src="https://s3-eu-west-1.amazonaws.com/<?=$this->bucket?>/thumbs/<?=$row->image_side?>" alt="cloud image here" /></div>
			<?php }?>
			</div>
		</dd>
		<?php endforeach;?>
		
		
		
	</dl>
</div>
