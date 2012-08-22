<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
foreach($menus as $row):
?>

<a href="<?=base_url()?>admin/edit_menu/<?=$row->menu_id?>"><?=$row->menu_title?></a> - <?=$row->published?><br/>


<?php
endforeach;
?>
