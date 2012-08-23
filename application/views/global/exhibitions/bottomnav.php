
<ul class="bottomnav">
    <li><?= anchor('/', 'Home') ?></li>
    <li><?= anchor('/gym', 'Gym') ?></li>
    <li><?= anchor('/studio', 'Studio') ?></li>
    <li><?= anchor('/bar-restaurant', 'Bar/Restaurant') ?></li>
    <li><?= anchor('squash', 'Squash') ?></li>
    <li><?= anchor('juniors', 'Juniors') ?></li>
    <li><?= anchor('Seniors', 'seniors') ?></li>
    <li><?= anchor('circuit-gym', 'Circuit Gym') ?></li>
    <li><?= anchor('membership', 'Membership') ?></li>
    <li><?= anchor('/contact', 'contact us') ?></li>


    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo "<li>".anchor('admin', 'Admin')."</li>";
    }
    ?>

</ul>

&copy; 2012 Club Woodham. Website Developed by Hotegg Creative Design