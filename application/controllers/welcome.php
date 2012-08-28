<?php
  
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');
  
  class Welcome extends MY_Controller {
    
    function __construct() {
      parent::__construct();
      $this->load->model('captcha_model');
    }
    
    public function index() {
      $segment_active = $this->uri->segment(2);
      if ($segment_active != NULL) {
        $data['menu'] = $this->uri->segment(2);
      } else {
        $data['menu'] = 'access360';
      }
      
      $data['news'] = $this->content_model->get_content_cat('news');
      
      
      $this->get_content_data($data['menu']);
      if ($data['menu'] == 'news') {
        $data['news'] = $this->content_model->get_content_cat('news');
      }
      $data['captcha'] = $this->captcha_model->initiate_captcha();
      $data['seo_links'] = $this->content_model->get_seo_links();
      $data['testimonials'] = $this->content_model->get_testimonials();
      
      $data['sidebar'] = "sidebox/side";
      $data['main_content'] = "global/" . $this->config_theme . "/content";
      $data['cats'] = $this->products_model->get_cats();
      $data['products'] = $this->products_model->get_all_products();
      $data['section2'] = 'global/links';
      if ($this->session->flashdata('message')) {
        $data['message'] = $this->session->flashdata('message');
      }
      
    //  $data['slideshow'] = 'header/slideshow';
      $this->load->vars($data);
      $this->load->view('template/main');
    }
    
    function get_content_data($menu) {
      $data['content'] = $this->content_model->get_content($menu);
      $data['case_studies'] = $this->content_model->get_case_studies();
      foreach ($data['content'] as $row):
               
               $data['title'] = $row->title;
               $data['sidebox'] = $row->sidebox;
               $data['metatitle'] = $row->meta_title;
               $data['slideshow_active'] = $row->slideshow;
               $data['meta_keywords'] = $row->meta_desc;
               $data['meta_description'] = $row->meta_keywords;
               $data['slideshow'] = $row->slideshow;
               $data['content_id'] = $row->content_id;
               $data['hide_top'] = $row->hide_top;
               
               endforeach;
      
      $data['attachments'] = $this->content_model->get_attachments($data['content_id']);
    $this->load->vars($data);
    return $data;
  }
  
  function test() {
    $data['main_content'] = 'slideshow/slideshow';
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
  function home() {
    
    $segment_active = $this->uri->segment(3);
    if ($segment_active != NULL) {
      $data['menu'] = $this->uri->segment(3);
    } else {
      $data['menu'] = $this->uri->segment(1);
    }
    
    
    $this->get_content_data($data['menu']);
    if ($data['menu'] == 'news') {
      $data['news'] = $this->content_model->get_content_cat('news');
    }
    $data['captcha'] = $this->captcha_model->initiate_captcha();
    
    
    $data['sidebar'] = "sidebox/side";
    $data['main_content'] = "global/" . $this->config_theme . "/content";
    //$data['cats'] = $this->products_model->get_cats();
    //$data['products'] = $this->products_model->get_all_products();
    $data['section2'] = 'global/links';
    $data['seo_links'] = $this->content_model->get_seo_links();
    if ($this->session->flashdata('message')) {
      $data['message'] = $this->session->flashdata('message');
    }
    
    //$data['slideshow'] = 'header/slideshow';
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
  function gallery() {
  	$segment_active = $this->uri->segment(3);
  	if ($segment_active != NULL) {
  		$gallery = $this->uri->segment(3);
  	} else {
  		$gallery = 'portable';
  	}
    $data['content'] = $this->content_model->get_gallery($gallery);
    if ($data['content'] != NULL) {
      foreach ($data['content'] as $row):
               
               if ($row->title != NULL) {
                 $data['title'] = $row->title;
               }
               $data['sidebox'] = 'extra/systems_left';
               
               if ($row->meta_title != NULL) {
                 $data['metatitle'] = $row->meta_title;
               }
               
               if ($row->meta_keywords != NULL) {
                 $data['meta_keywords'] = $row->meta_keywords;
               }
               
               if ($row->meta_desc != NULL) {
                 $data['meta_description'] = $row->meta_desc;
               }
               
               $data['slideshow_active'] = $row->slideshow;
               endforeach;
    }
      
      
      $data['main_content'] = "global/gallery";
      $this->load->vars($data);
      $this->load->view('template/main');
      }
  
   function main() {
    $segment_active = $this->uri->segment(3);
    if ($segment_active != NULL) {
      $data['menu'] = $this->uri->segment(3);
    } else {
      $data['menu'] = 'home';
    }
    
    $data['content'] = $this->content_model->get_content($data['menu']);
    $data['captcha'] = $this->captcha_model->initiate_captcha();
    foreach ($data['content'] as $row):
             
             $data['title'] = $row->title;
             $data['sidebox'] = $row->sidebox;
             $data['metatitle'] = $row->meta_title;
             
             endforeach;
    $data['main_content'] = "global/" . $this->config_theme . "/content";
  $data['cats'] = $this->products_model->get_cats();
  $data['products'] = $this->products_model->get_all_products();
  $data['section2'] = 'global/links';
  if ($this->session->flashdata('message')) {
    $data['message'] = $this->session->flashdata('message');
  }
  
  $data['slideshow'] = 'header/slideshow';
  $this->load->vars($data);
  $this->load->view('template/main');
  }
  
  function login() {
    if ($this->session->flashdata('message')) {
      $data['message'] = $this->session->flashdata('message');
    }
    $id = 'login';
    $data['content'] = $this->content_model->get_content($id);
    $data['main_content'] = "user/login_form";
    $data['title'] = "Login to Eagle";
    
    $data['page'] = "login";
    $this->load->vars($data);
    $this->load->view('template/main');
  }
  
  }
  
  /* End of file welcome.php */
  /* Location: ./application/controllers/welcome.php */
