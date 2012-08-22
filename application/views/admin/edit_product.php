<?php foreach($content as $row):?>


<?php  $id = $row->product_id;?>


<?=form_open("admin/edit_product_content/$page")?> 
Title: <?=form_input('title', $row->product_name)?>
<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->product_desc?></textarea>
<br/>
<?=form_hidden('menu', $row->menu)?>

Extra: <?=form_input('extra', $row->extra)?><br/>
<input type="submit" class="wymupdate" />
<?=form_close()?> 
<?php endforeach;?>