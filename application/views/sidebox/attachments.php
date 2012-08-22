<?= form_open_multipart("admin/add_attachment/".$page) ?> 

<p>
    Attachment Name:<br/>
    <?= form_input('name', set_value('name')) ?>
</p>


<p class="Image">
    <?= form_label('attachment') ?><br/>

<?= form_upload('file') ?>
</p>



<input type="submit" name="upload" class="wymupdate" />

<?= form_close() ?> 

<?php if($attachments != NULL) { ?>
<h4>Attachments</h4>
<p>
    <?php foreach($attachments as $row):?>
    
   <a href=" https://s3-eu-west-1.amazonaws.com/clubwoodham/<?=$row->filename?>" ><?=$row->name?></a> - <a href="<?=base_url()?>admin/delete_attachment/<?=$row->attachment_id?>">Delete</a><br/>
   
    <?php endforeach; ?>
    
    
</p>
<?php } ?>