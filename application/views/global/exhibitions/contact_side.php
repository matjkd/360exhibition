<style>
#contactSideBox {
	display: block;
	position: fixed;
	right: -300px;
	top: 180px;
	height: 150px;
	width: 350px;
	background: #555;
	opacity: 0.5;
	z-index:1000000;
}


#contactTitle {
float:left;
width:50px;

height: 150px;
background:#fff;
}
#contactTitle img{
margin:5px 0 5px 20px;
}
#calltoAction  {

text-align:center;
}
#calltoAction img {

margin:20px 0 10px 0px;
}

#calltoActionLinks {
color:#fff;


}


#calltoActionLinks a {
text-decoration:none;
color:#fff;
}
.dropshadow {
-moz-box-shadow: 2px 4px 14px #000000;
-webkit-box-shadow: 2px 4px 14px #000000;
box-shadow: 2px 4px 14px #000000;

}
</style>

<div id="contactSideBox" class="dropshadow">
	<div id="contactTitle">
	<img src="<?=base_url()?>images/icons/contact_us_90.png"/>
	</div>
<div id="calltoAction">

<img src="<?=base_url()?>images/icons/contact_side.png"/>
<div  id="calltoActionLinks"><a href="mailto:sales@access360.co.uk">EMAIL US</a> | <span id="callclick">CALL US</span> 

</div>
<div id="phoneNumber"><h3>0845 074 5656</h3></div>
</div>
</div>
