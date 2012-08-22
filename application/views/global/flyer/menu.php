
    		<ul>
    		<li><?=anchor('/', 'home')?></li>
                <li><?=anchor('/services', 'services')?></li>
                  <li><?=anchor('/about', 'about us')?></li>
                  <li><?=anchor('/social', 'charity')?></li>
                    <li><?=anchor('/jobs', 'jobs')?></li>
                  <li><?=anchor('/contact', 'contact')?></li>
                  
            
                  <?php $is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if($is_logged_in != 0 || $role == 1)
		{
		
                    echo anchor('admin', 'Admin');
                       
		}
                
                ?>
                   
    		</ul>

