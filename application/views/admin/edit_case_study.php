
<?php foreach($case as $row):?>

<?=form_open_multipart("admin/update_case_study")?>
Title:
<?=form_input('title', $row->case_title)?>
<br />



<p class="PDF">

	<?= form_label('pdf') ?>
	<br />
	<?=$row->pdf_link?>
	<br />
	<?= form_upload('pdf') ?>
</p>

<p class="Image">
	<?= form_label('Side Image') ?>
	<br />
	<?=$row->image_side?>
	<br />
	<?= form_upload('image_side') ?>
</p>

<p class="Image">
	<?= form_label('Image 1') ?>
	<br />
	<?=$row->image_1?>
	<br />
	<?= form_upload('image_1') ?>
</p>

<p class="Image">
	<?= form_label('Image 2') ?>
	<br />
	<?=$row->image_2?>
	<br />
	<?= form_upload('image_2') ?>
</p>

<p class="Image">
	<?= form_label('Image 3') ?>
	<br />
	<?=$row->image_3?>
	<br />
	<?= form_upload('image_3') ?>
</p>

Content:
<br />
<textarea cols=75 rows=20 name="content" id="content" class='wymeditor'>
	<?=$row->description?>
</textarea>

<br />
<?=form_hidden('case_id', $row->case_id)?>
<input type="submit" class="wymupdate" />

<?=form_close()?>

<?php endforeach;?>
