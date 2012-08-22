<?php if ($news != NULL) {
    $x = 0;
    foreach ($news as $row): ?>
<?php $x = $x +1; ?>
<?php if($x ==1) { ?>
<div class="newsDiv">
    <h1>Upcoming Events</h1>
        <div class="newsImage">
            <img  src="https://s3-eu-west-1.amazonaws.com/clubwoodham/<?= $row->news_image ?>"/>
        </div>

        <div class="newsContent">
            <h1><?= $row->title ?>
            <?php
            $is_logged_in = $this->session->userdata('is_logged_in');
            if (!isset($is_logged_in) || $is_logged_in == true) {
                echo " - <a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit</a><br/>";
            }
            ?></h1>
            <?= $row->content ?>
        </div>
        <div style="clear:both">
        </div>
</div>
<?php } ?>
    <?php endforeach;
} ?>

