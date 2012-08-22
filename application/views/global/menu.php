
    		<ul>
    		<li><?=anchor('/', 'Eagle Pub')?></li>
                <li><?=anchor('about', 'About')?></li>
                  <li><?=anchor('menu', 'Menu')?></li>
                 <li><?=anchor('gallery', 'Gallery')?></li>
                  <li><?=anchor('events', 'Events')?></li>
                   <li><?=anchor('contact', 'Contact')?></li>
                  <?php $is_logged_in = $this->session->userdata('is_logged_in');
		$role = $this->session->userdata('role');
		if($is_logged_in != 0 || $role == 1)
		{
		
                    echo anchor('admin', 'Admin');
                       
		}
                
                ?>
                   
    		</ul>
