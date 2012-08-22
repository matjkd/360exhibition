<!--Main content page for garden site-->


  <div style="clear:both;"></div>
<?php foreach ($content as $row): ?>
  <!--add image if set-->
 <?php if (isset($row->sidebox) && $row->sidebox != NULL) { ?> 
  <div style="float:left; width:530px">
  <?php } ?>
    <h1><?= $row->title ?></h1>

    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in == true) {
        echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a><br/>";
    }
    ?>

    <?php
    if (isset($age)) {
        $body = str_replace("[age]", "$age", "$row->content");
    } else {
        $body = $row->content;
    }
    ?>


    <?php $body = str_replace("Grand Garden Design", "<strong>Grand Garden Design</strong>", "$body"); ?>


  

    <?= $body ?>

<?php endforeach; ?>


<?php foreach ($content as $row): ?>
    <?php if ($row->extra != NULL) { ?>
        <?= $this->load->view('extra/' . $row->extra) ?>
    <?php } ?>
<?php endforeach; ?>
    
    
       <?php if (isset($row->sidebox) && $row->sidebox != NULL) { ?> 
  </div>
        <div style="float:right; padding:0px 0px 0 10px;">
            <img  src="<?= base_url() ?>images/photos/<?= $row->sidebox ?>"  />
            <em><?php if (isset($row->caption)) {
            echo $row->caption;
        } ?></em>
        </div>

    <?php } ?>
    
    
    <div style="clear:both;"></div>