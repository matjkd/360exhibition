<?php foreach($menudata as $row):
$format = 'l jS \of F Y';
$startdate = date($format, $row->startdate);
$enddate = date($format, $row->enddate);
    ?>
<?=form_open("admin/update_menu")?>
Title:<br/>
 <?=form_input('title', $row->menu_title)?>
<br/>

Start Date:<br/>
 <input type="text" id="datepicker" name="startdate" value="<?=$startdate?>"/>
<input type="hidden" id="alternate" name="startdate_unix" value="<?=$row->startdate?>"/>
<br/>
End Date<br/>
<input type="text" id="datepicker2" name="enddate" value="<?=$enddate?>"/>
<input type="hidden" id="alternate2" name="enddate_unix" value="<?=$row->enddate?>"/><br/>


<?php if($row->dates == 1) { $checked1=TRUE; } else { $checked1=FALSE;} ?>
<?=form_checkbox('dates', '1', $checked1)?> Only availabe between above dates<br/>

<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?=$row->menu?></textarea>

<?php if($row->published == 1) { $checked=TRUE; } else { $checked=FALSE;} ?>
<?=form_checkbox('published', '1', $checked)?> Published<br/>

<br/>


<input type="hidden" name="menu_id" value="<?=$row->menu_id?>"/>

<input type="submit" class="wymupdate" />
<?=form_close()?>
<?php endforeach; ?>
