<div style="text-align: center;">
<?php foreach($menudata as $row):
$format = 'l jS \of F Y';
$startdate = date($format, $row->startdate);
$enddate = date($format, $row->enddate);
    ?>
<h1><?=$row->menu_title?></h1>

<em>
<?=$row->menu?>
</em>

<?php endforeach; ?>
</div>