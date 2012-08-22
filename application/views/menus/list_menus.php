<?=$this->load->view('global/content')?>
<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
foreach($menus as $row):
?>
<?php if($row->published == 1) { ?>
<a href="<?=base_url()?>menus/view_menu/<?=$row->menu_id?>"><?=$row->menu_title?></a><br/>
<?php } ?>

<?php
endforeach;
?>
