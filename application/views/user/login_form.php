<style type="text/css">
		.toggler { width: 500px; height: 200px; position: relative;}
		#button { padding: .5em 1em; text-decoration: none; }
		#effect { text-align: left; width: 280px; margin:20px 0; padding: 0.4em; position: relative; }
		#effect h4 { margin: 0; padding: 0.4em; text-align: left; }
		.ui-effects-transfer { border: 2px dotted gray; } 
	</style>
        <h4>Login</h4>
<div id="effect" >

<?php 

$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in == true)
		{
			echo "you are logged in. <a href='".base_url()."user/login/logout'>logout</a>";
		}	
		else
		{
			echo form_open(base_url().'user/login/validate_credentials');
			echo "Username<br/>";
			echo form_input('username', '');?>
			<br/>
			<?php 
			echo "Password<br/>";
			echo form_password('password', '');?>
			<br/>
			<?php
			echo form_submit('submit', 'Login');
			echo form_close();
		}
			?>
			
</div>