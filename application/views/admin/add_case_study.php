<?=form_open_multipart("admin/submit_case_study")?>
Title:
<?=form_input('title', set_value('title'))?>
<br />



<p class="PDF">
    <?= form_label('pdf') ?><br/>

<?= form_upload('pdf') ?>
</p>

<p class="Image">
    <?= form_label('Image') ?><br/>

<?= form_upload('image_1') ?>
</p>

Content:
<br />
<textarea
	cols=75 rows=20 name="content" id="content" class='wymeditor'></textarea>

<br />
<input type="submit"
	class="wymupdate" />

<?=form_close()?>
