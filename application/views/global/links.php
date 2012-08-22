<?php foreach($cats as $row): ?>
<div class="container_24 grid_6">
			<h2><a href="<?=base_url()?>welcome/main/<?=$row->cat_menu?>"><?=$row->cat_name?></a></h2>
			<ul>
			<?php foreach($products as $row2): ?>
				
				<?php if($row->cat_id == $row2->cat_id) {?>
				<li><a href="<?=base_url()?>products/main/<?=$row2->menu?>"><?=$row2->product_name?></a></li>
				<?php } ?>
			<?php endforeach; ?>
			</ul>
</div>
<?php endforeach; ?>


<div class="clear"></div>
