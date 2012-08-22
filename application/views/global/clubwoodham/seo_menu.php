<strong>Services</strong><br/>
<div id="seo_links">
    <ul>
 <?php if(isset($seo_links)) { ?>
 <?php foreach($seo_links as $row): ?>
    
        <li><a href="<?=base_url()?>welcome/home/<?=$row->menu?>"><?=$row->title?></a></li>
    
 <?php endforeach; ?>  
 <?php } ?> 
  
  </ul>
</div>