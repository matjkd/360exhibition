<style type="text/css" >
    .slideshow { height: 330px;   border-bottom:0px solid #161616; }
    .slideshow img { padding:0px; border: 0px solid #ccc;   }
</style>



<div class="ten columns" style="height:330px;" >
    <img id="HomePicOverlay" width="570px" height="311px" src="<?= base_url() ?>images/slides/HomePic_Corners.png"/>
    <div class="slideshow" style=" display:none; ">
        
        <?=$this->load->view("/slideshow/".$slideshow_active."/picture")?>
       

    </div>

</div>

<div class="six columns" style="display:block; ">
<img id="HomePicOverlay2" width="330px" height="311px" src="<?= base_url() ?>images/slides/HomeSquare_Corners.png"/>
    <div class="slideshow2" style="display:none;">
        <?=$this->load->view("/slideshow/".$slideshow_active."/square")?>
       
    </div>

</div>

