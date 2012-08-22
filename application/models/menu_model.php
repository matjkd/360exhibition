<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menu_model extends CI_Model {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function add_menu()
    {
          $new_menu = array(
			'menu_title' => $this->input->post('title'),
			'startdate' => $this->input->post('startdate_unix'),
			'enddate' => $this->input->post('enddate_unix'),
			'menu' => $this->input->post('content'),
              	'published' => $this->input->post('published')
		);

		$insert =$this->db->insert('menus', $new_menu);
                return $insert;
    }

    function update_menu()
    {
        $id = $this->input->post('menu_id');
        $this->db->where('menu_id', $id);
	$update_menu = array(

				'menu_title' => $this->input->post('title'),
			'startdate' => $this->input->post('startdate_unix'),
			'enddate' => $this->input->post('enddate_unix'),
			'menu' => $this->input->post('content'),
              	'published' => $this->input->post('published')


		);

		$update = $this->db->update('menus', $update_menu);


		return $update;
    }
    function get_menus()
    {
$this->db->order_by('order', 'asc');
		$query = $this->db->get('menus');
		if($query->num_rows > 0);
			{
				return $query->result();
			}

		return FALSE;
    }
      function get_menu($id)
    {
                $this->db->where('menu_id', $id);
		$query = $this->db->get('menus');
		if($query->num_rows == 1);
			{
				return $query->result();
			}

		return FALSE;
    }
}