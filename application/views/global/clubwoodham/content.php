<!--Main content page for club woodham site-->

<div style=" padding-left:10px; ">
    <?php foreach ($content as $row): ?>
        <!--add image if set-->

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


        <?php $body = str_replace("Club Woodham", "<strong>Club Woodham</strong>", "$body"); ?>


        <div style="padding-bottom:10px">

            <?= $body ?>
        </div>

    <?php endforeach; ?>


    <?php foreach ($content as $row): ?>
        <?php if ($row->extra != NULL) { ?>
            <?= $this->load->view('extra/' . $row->extra) ?>
        <?php } ?>
    <?php endforeach; ?>
        
        <?php if(isset($attachments) && $attachments != NULL) { ?>
<h4>Attachments</h4>
<p>
    <?php foreach($attachments as $row):?>
    
   <a href=" https://s3-eu-west-1.amazonaws.com/clubwoodham/<?=$row->filename?>" ><?=$row->name?></a><br/>
   
    <?php endforeach; ?>
    
    
</p>
<?php } ?>

</div>