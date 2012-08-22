<h1><?= $category ?> Timetable</h1>
<?php if(isset($from)) { ?>
<?= form_open("admin/update_timetable") ?> 
<input  type="hidden" name="timetable_id" value="<?php if(isset($timetable_id)) { echo $timetable_id; }?>" />
<?php } else { ?>
<?= form_open("admin/add_timetable") ?> 
<?php } ?>

Day<br/>   
<select name="day">
    <option value ="1" <?php if(isset($day) && $day==1) {?> selected="selected"  <?}?>>Monday</option>
    <option value ="2" <?php if(isset($day) && $day==2) {?> selected="selected"  <?}?>>Tuesday</option>
    <option value ="3" <?php if(isset($day) && $day==3) {?> selected="selected"  <?}?>>Wednesday</option>
    <option value ="4" <?php if(isset($day) && $day==4) {?> selected="selected"  <?}?>>Thursday</option>
    <option value ="5" <?php if(isset($day) && $day==5) {?> selected="selected"  <?}?>>Friday</option>
    <option value ="6" <?php if(isset($day) && $day==6) {?> selected="selected"  <?}?>>Saturday</option>
    <option value ="7" <?php if(isset($day) && $day==7) {?> selected="selected"  <?}?>>Sunday</option>
</select>


<br/>
Start Time</br>
<input  type="text" id="timepicker1" name="startTime" value="<?php if(isset($from)) { echo $from; }?>" /><br/>
End Time</br>
<input  type="text" id="timepicker2" name="endTime" value="<?php if(isset($to)) { echo $to; }?>" /><br/>

Class<br/>
<input  type="text" name="className" value="<?php if(isset($class)) { echo $class; }?>" />

Description<br/>
<select name="description">
     <option value ="0">Select one</option>
  <?php foreach($classes as $row):?>
     <option value ="<?=$row->content_id?>" <?php if(isset($description) && $description==$row->content_id) {?> selected="selected"  <?}?>><?=$row->title?></option>
    <?php endforeach;?>
</select>


Instructor<br/>
<input  type="text" name="instructor" value="<?php if(isset($instructor)) { echo $instructor; }?>" />


Level<br/>
<input  type="text" name="level" value="<?php if(isset($level)) { echo $level; }?>" />


Location<br/>
<input  type="text" name="location" value="<?php if(isset($where)) { echo $where; }?>" />
<input  type="text"  name="timetableCategory" value="<?= $category ?>" />

<input type="submit" />

<?= form_close() ?> 