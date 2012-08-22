<?= form_open_multipart("admin/submit_content") ?> 

<p>
    Title:<br/>
    <?= form_input('title', set_value('title')) ?>
</p>

<p>
    Menu link (not required field):<br/>
    <?= form_input('menu', set_value('menu')) ?>
</p>




<?php
if (!isset($category)) {
    $category = "";
}
?>

<p>
    Category:<br/>
    <input type="text" name="category"  value="<?= set_value('category', $category) ?>"  disable="disabled" onFocus="this.blur();"><br/>
</p>

<p class="Image">
    <?= form_label('Image') ?> <br/>

<?= form_upload('file') ?>
</p>

<?php if ($category == "gallery") { ?>

    <p>
        Gallery:<br/>

        <?php
        $options = array(
            'driveways' => 'driveways',
            'landscapes' => 'Landscapes',
            'outdoor_buildings' => 'Outdoor Buildings',
            'patios' => 'Patios',
            'ponds_and_pools' => 'Ponds and Pools',
            'wallsgatesrailings' => 'Walls Gates Railings',
            'artists_impressions' => 'Artists Impressions',
              'orangeries' => 'Orangeries',
        );
        ?>
    <?= form_dropdown('gallery', $options) ?>
    </p>

<?php } ?>

<p>
    Content:<br/>
    <textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'></textarea>

</p>
<input type="submit" name="upload" class="wymupdate" />

<?= form_close() ?> 
