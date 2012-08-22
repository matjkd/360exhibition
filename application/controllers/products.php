<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		
	}
	
	function index()
	{
		redirect('welcome/home', 'refresh');
	}
	function main()
	{
		$segment_active = $this->uri->segment(3);
		if ($segment_active!=NULL)
			{
				$data['menu'] = $this->uri->segment(3);
			}
		else
			{
				$this->session->set_flashdata('message', "No Product Selected.");	
				redirect('welcome/home', 'refresh');
			}
		
		
		$data['content'] = $this->products_model->get_product($data['menu']);
		
		foreach($data['content'] as $row):
			
			$data['title'] = $row->product_name;
			$data['sidebox'] = $row->sidebox;
		
		endforeach;
		$data['main_content'] = "global/product";
		$data['cats'] = $this->products_model->get_cats();
		$data['products'] = $this->products_model->get_all_products();
		$data['section2'] = 'global/links';
		
		
		$data['slideshow'] = 'header/slideshow';	
		$this->load->vars($data);
		$this->load->view('template/main');
		
	}
}