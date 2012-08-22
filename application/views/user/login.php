
		
	     <?php 

$is_logged_in = $this->session->userdata('is_logged_in');
if(!isset($is_logged_in) || $is_logged_in != true)
		{
			
			?>
			<a href='<?=base_url()?>welcome/login'>Login</a>
	<?php 
			
		}	

		else
			{
				echo 'Hello '; 
				echo $this->session->userdata('firstname');
				echo ' '; 
				echo $this->session->userdata('lastname');
				echo ' | ';?>
				 
				 
				<a href='<?=base_url()?>user/login/logout' >Logout</a>
				
			
				<?php 
			}
?>
      

