



<?=form_open("admin/add_new_menu")?>
Title:<br/>
 <?=form_input('title')?>
<br/>

Start Date:<br/>
 <input type="text" id="datepicker" name="startdate"/>
<input type="hidden" id="alternate" name="startdate_unix"/>
<br/>
End Date<br/>
<input type="text" id="datepicker2" name="enddate"/>
<input type="hidden" id="alternate2" name="enddate_unix"/>
<br/>
<?=form_checkbox('dates', '1')?> Only availabe between above dates<br/>
<textarea cols=65 rows=20 name="content" id="content" class='wymeditor'></textarea>
Published:<br/>

<?=form_checkbox('published', '1')?>
<br/>




<input type="submit" class="wymupdate" />
<?=form_close()?>
