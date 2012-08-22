
<ul class="topnav">
    <li><?= anchor('/', 'Home') ?></li>
    <li><a href="#">Gym</a>

        <ul class="subnav">
            <li><?= anchor('/gym', 'Overview') ?>
            <li><?= anchor('/personal-training', 'Personal Training') ?></li>
            <li><?= anchor('/goals', 'Achieving your goals') ?></li>
        </ul>
    </li>
    <li><a href="#">Studio</a>
        <ul class="subnav">
            <li><?= anchor('/studio', 'Overview') ?>
            <li><?= anchor('/timetable/main/studio', 'Class Timetable') ?></li>
            <li><?= anchor('/class-descriptions', 'Class Descriptions') ?></li>
        </ul>
    </li>
    <li><a href="#">Bar/Restaurant</a> 
        <ul class="subnav">
            <li><?= anchor('/bar-restaurant', 'Overview') ?>
            <li><?= anchor('/menus', 'Menus') ?></li>

        </ul>
    </li>

    <li><?= anchor('squash', 'Squash') ?></li>
    <li><a href="#">Juniors</a>
        <ul class="subnav">
            <li><?= anchor('/juniors', 'Overview') ?>
            <li><?= anchor('/timetable/main/junior-programme', 'Junior Programme') ?></li>
            <li><?= anchor('/creche', 'Creche') ?></li>
            <li><?= anchor('/fit-kids', 'Fit Kids') ?></li>
            <li><?= anchor('/kids-parties', 'Kids Parties') ?></li>

        </ul></li>
    <li><?= anchor('seniors', 'Seniors') ?></li>
   
    <li><?= anchor('membership', 'Membership') ?></li>
    <li><?= anchor('/contact', 'Contact us') ?></li>


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

       
         echo "<li>".anchor('admin', 'Admin')."</li>";
          echo "<li>".anchor('admin/classes', 'Classes')."</li>";
          echo "<li>".anchor('admin/timetables/studio', 'Add  Studio Timetable')."</li>";
          echo "<li>".anchor('admin/timetables/circuitgym', 'Add  Circuit Timetable')."</li>";
          echo "<li>".anchor('admin/timetables/junior-programme', 'Add  Junior Timetable')."</li>";
    }
    ?>

</ul>

