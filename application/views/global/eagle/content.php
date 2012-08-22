
<?php foreach($content as $row):?>

<h1><img src="<?=base_url()?>images/titles/<?=$config_theme?>/<?=$row->menu?>.png"/></h1>

<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit/".$row->menu."'>edit this page</a><br/>";
		}	

?>

<?php if(isset($age)) { $body = str_replace("[age]", "$age", "$row->content"); }
else {
	$body = $row->content;
}?>


<?php  $body = str_replace("The Eagle", "<strong>The Eagle</strong>", "$body");?>
<?php  $body = str_replace("THE EAGLE", "<strong>THE EAGLE</strong>", "$body");?>
<?=$body?>

<?php endforeach;?>


	<?php foreach($content as $row):?>
			<?php if($row->extra != NULL) {?>
			<?=$this->load->view('extra/'.$row->extra)?>
			<?php }?>
	<?php endforeach;?>