
<?php foreach($content as $row):?>
<h1><?=$row->product_name?></h1>


<?php 
$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "<a href='".base_url()."admin/edit_product/".$row->menu."'>edit this page</a><br/>";
		}	

?>
<?php if(isset($age)) { $body = str_replace("[age]", "$age", "$row->product_desc"); }
else {
	$body = $row->product_desc;
}?>

<?php  $body = str_replace("THERMAPAD", "<strong>THERMAPAD</strong>", "$body");?>
<?php  $body = str_replace("The GMS Company", "<strong>The GMS Company</strong>", "$body");?>
<?=$body?>

<?php endforeach;?>


