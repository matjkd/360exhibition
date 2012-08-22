<div style=" padding-left:10px;">
    <?php foreach ($content as $row): ?>
        <h1><?= $row->title ?></h1>
    <?php endforeach; ?>
    <?php
    $count = 0;
    $level = 0;
    $where = 0;
    $instructor = 0;
    ?>

    <?php if ($timetable != NULL) {
        foreach ($days as $row2): ?>

            <?php
            if ($row2->day == 1) {
                $daysarray['1'] = 'Monday';
            }
            if ($row2->day == 2) {
                $daysarray['2'] = 'Tuesday';
            }
            if ($row2->day == 3) {
                $daysarray['3'] = 'Wednesday';
            }
            if ($row2->day == 4) {
                $daysarray['4'] = 'Thursday';
            }
            if ($row2->day == 5) {
                $daysarray['5'] = 'Friday';
            }
            if ($row2->day == 6) {
                $daysarray['6'] = 'Saturday';
            }
            if ($row2->day == 7) {
                $daysarray['7'] = 'Sunday';
            }

            if ($row2->level != NULL) {
                $level = 1;
            }
            if ($row2->where != NULL) {
                $where = 1;
            }
            if ($row2->instructor != NULL) {
                $instructor = 1;
            }
            ?>



        <?php endforeach; ?>
        <div id="tabvanilla" class="widget">  
            <ul class="tabnav">  
                <?php foreach ($daysarray as $daysrow1): ?>
                    <li><a href="#<?= $daysrow1 ?>"><?= $daysrow1 ?></a></li>
                <?php endforeach; ?>
            </ul>

            <?php foreach ($daysarray as $daysrow): ?>
                <?php $count = $count + 1; ?>



                <div id="<?= $daysrow ?>" class="tabdiv">
                    <table class="timetable" id="box-table-a">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Class</th>
                                <th></th>
                                <?php if ($instructor == 1) { ?><th>Instructor</th><?php } ?>

                                <?php if ($level == 1) { ?><th>Level</th><?php } ?>

                                <?php if ($where == 1) { ?> <th>Location</th><?php } ?>
                                <th></th>
                                <?php
                                $is_logged_in = $this->session->userdata('is_logged_in');
                                if (!isset($is_logged_in) || $is_logged_in == true) {
                                    echo "<th>Actions</th>";
                                }
                                ?>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($timetable as $row): ?>
                            
                                <?php if ($row->day == 1) {  $day = "Monday"; }?>
                                 <?php if ($row->day == 2) {  $day = "Tuesday"; }?>
                                 <?php if ($row->day == 3) {  $day = "Wednesday"; }?>
                                 <?php if ($row->day == 4) {  $day = "Thursday"; }?>
                                 <?php if ($row->day == 5) {  $day = "Friday"; }?>
                                 <?php if ($row->day == 6) {  $day = "Saturday"; }?>
                                 <?php if ($row->day == 7) {  $day = "Sunday"; }?>
                            
                            
                            

                                <?php if ($day == $daysrow) { ?>


                                    <tr>
                                        <td> <?= substr($row->from, 0, -3) ?> - <?= substr($row->to, 0, -3) ?></td>
                                        <td> <?= $row->class ?> </td>
                                        <td><?php if ($row->description > 0) { ?><span class="hoverbox"><span class="ui-icon ui-icon-info"></span><span class="infobox"><?= $row->content ?></span></span><?php } ?></td>
                                        <?php if ($instructor == 1) { ?><td><?= $row->instructor ?></td><?php } ?>
                                        <?php if ($level == 1) { ?><td><?= $row->level ?></td><?php } ?>
                                        <?php if ($where == 1) { ?> <td><?= $row->where ?></td><?php } ?>
                                        <td><strong><a href="#">Book Now</a></strong></td>
                                        <?php
                                        $is_logged_in = $this->session->userdata('is_logged_in');
                                        if (!isset($is_logged_in) || $is_logged_in == true) {
                                            ?>
                                            <td><a href="<?= base_url() ?>admin/edit_timetable/<?= $row->timetable_id ?>">Edit</a> | <a href="<?= base_url() ?>admin/delete_timetable/<?= $row->timetable_id ?>">Delete</a></td>
                                        <?php } ?>
                                    </tr>

                                <?php } ?>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <?php
            endforeach;
        } else {
            echo "No timetable data has been added yet.";
        }
        ?>
    </div>
</div>
<!--Main content page for club woodham site-->

<div style=" padding-left:10px;">
    <?php foreach ($content as $row): ?>



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




        <?= $body ?>

    <?php endforeach; ?>


    <?php foreach ($content as $row): ?>
        <?php if ($row->extra != NULL) { ?>
            <?= $this->load->view('extra/' . $row->extra) ?>
        <?php } ?>
    <?php endforeach; ?>

</div>