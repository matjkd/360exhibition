<!--Main testimonials page for garden site-->



<?php foreach ($testimonials as $row): ?>
    <h3><?= $row->title ?></h3>  <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in == true) {
        echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit</a><br/>";
    }
    ?>
    <?= $row->content ?>
    <hr/>
<?php endforeach; ?>
<div style="clear:both;"></div>