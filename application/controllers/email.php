<?php
  
  class Email extends My_Controller {
    
    function __Construct() {
      parent::__Construct();
      
      $this->load->model('captcha_model');
    }
    
    function index() {
      
    }
    
    function get_content_data($menu) {
      $data['content'] = $this->content_model->get_content($menu);
      foreach ($data['content'] as $row):
               
               $data['title'] = $row->title;
               $data['sidebox'] = $row->sidebox;
               $data['metatitle'] = $row->meta_title;
               $data['slideshow_active'] = $row->slideshow;
               $data['meta_keywords'] = $row->meta_desc;
               $data['meta_description'] = $row->meta_keywords;
               $data['slideshow'] = $row->slideshow;
               
               
               endforeach;
      $this->load->vars($data);
    return $data;
  }
  
  
  function home() {
    
    
    $data['menu'] = "contact";
    
    
    $data['content'] = $this->content_model->get_content($data['menu']);
    $data['captcha'] = $this->captcha_model->initiate_captcha();
    $data['testimonials'] = $this->content_model->get_testimonials();
    foreach ($data['content'] as $row):
             
             $data['title'] = $row->title;
             $data['sidebox'] = $row->sidebox;
             $data['metatitle'] = $row->meta_title;
             $data['meta_description'] = $row->meta_desc;
             $data['meta_keywords'] = $row->meta_keywords;
             $data['slideshow_active'] = $row->slideshow;
             endforeach;
    $data['sidebar'] = "sidebox/side";
  $data['main_content'] = "global/" . $this->config_theme . "/content";
  //$data['cats'] = $this->products_model->get_cats();
  //$data['products'] = $this->products_model->get_all_products();
  $data['section2'] = 'global/links';
  $data['seo_links'] = $this->content_model->get_seo_links();
  if ($this->session->flashdata('message')) {
    $data['message'] = $this->session->flashdata('message');
  }
  
  $data['slideshow'] = 'header/slideshow';
  $this->load->vars($data);
  $this->load->view('template/main');
  }
  /**
  * 
  */
  function send() {
    $this->form_validation->set_rules('name', 'name', 'trim|required');
    $this->form_validation->set_rules('phone', 'phone', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('subject', 'subject', 'trim');
    $this->form_validation->set_rules('message', 'message', 'trim');
    $this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
    $this->form_validation->set_rules('interest', 'interest');
    $this->form_validation->set_rules('mailinglist', 'mailinglist');
    
    $data['name'] = $this->input->post('name');
    $data['phone'] = $this->input->post('phone');
    $data['mobile'] = $this->input->post('mobile');
    $data['email'] = $this->input->post('email');
    $data['subject'] = $this->input->post('subject');
    $data['message'] = $this->input->post('message');
    $data['mailinglist'] = $this->input->post('mailinglist');
    $data['interest'] = $this->input->post('interest');
    if ($data['interest'] != NULL) {
      $interests = implode(", ", $data['interest']);
    } else {
      $interests = "None Selected";
    }
    
    if ($data['mailinglist'] != NULL) {
      $mailinglist = implode(", ", $data['mailinglist']);
    } else {
      $mailinglist = "None Selected";
    }
    
    $word = $this->input->post('captcha');
    $time = $this->input->post('time');
    $ip_address = $this->input->post('ip_address');
    
    if ($this->form_validation->run() == FALSE) {
      
      
      $this->session->set_flashdata('message', validation_errors());
      $this->home();
    } else {
      
      // check captcha
      // if it returns true the captcha has failed
      if ($this->captcha_model->check($word, $ip_address, $time)) {
        $this->session->set_flashdata('message', 'The captcha was wrong');
        redirect('welcome/main/contact', 'refresh');
      }
      
      // end check captcha  
      
      $config_email = $this->config_email;
      $config_company_name = $this->config_company_name;
      
      $this->postmark->from($config_email, $config_company_name);
      
      //echo "from($config_email, $config_company_name)<br/>";  
      
      $this->postmark->to($config_email);
      
      
      
      //$this->postmark->cc('mat@redstudio.co.uk');
      
      
      $this->postmark->subject('' . $config_company_name . 'Contact Form');
      $this->postmark->message_html("The contact form has been filled in
        <br/>
        Name: " . $data['name'] . "
                        <br/>
                        Phone: " . $data['phone'] . "
                                         <br/>
                                         email: " . $data['email'] . "
                                                          <br/>
                                                          Areas of Interest: " . $interests . "
                                                          <br/>
                                                          
                                                          subject: " . $data['subject'] . "
                                                                             <br/><br/>
                                                                             Message: " . $data['message'] . " 
                                                                                                <br/>" . $mailinglist . " 
                                                                                                ");
      $this->postmark->send();
      
      $this->session->set_flashdata('message', 'Your message has been sent. Thank you.');
      redirect('welcome/main/contact', 'refresh');
    }
  }
  
  function quote() {
    $this->form_validation->set_rules('name', 'name', 'trim|required');
    $this->form_validation->set_rules('phone', 'phone', 'trim|required');
    $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
    $this->form_validation->set_rules('qsubject', 'subject', 'trim');
    $this->form_validation->set_rules('qmessage', 'message', 'trim');
    $this->form_validation->set_rules('captcha', 'captcha', 'trim|required');
    
    $data['name'] = $this->input->post('name');
    $data['phone'] = $this->input->post('phone');
    $data['email'] = $this->input->post('email');
    $data['subject'] = $this->input->post('qsubject');
    $data['message'] = $this->input->post('qmessage');
    $data['interest'] = $this->input->post('interest');
    $word = $this->input->post('captcha');
    $time = $this->input->post('time');
    $ip_address = $this->input->post('ip_address');
    
    if ($this->form_validation->run() == FALSE) {
      
      
      $this->session->set_flashdata('message', validation_errors());
      redirect('welcome/main/contact', 'refresh');
    } else {
      
      // check captcha
      // if it returns true the captcha has failed
      if ($this->captcha_model->check($word, $ip_address, $time)) {
        $this->session->set_flashdata('message', 'The captcha was wrong');
        redirect('welcome/main/contact', 'refresh');
      }
      
      // end check captcha  
      
      $config_email = $this->config_email;
      $config_company_name = $this->config_company_name;
      
      $this->postmark->from($config_email, $config_company_name);
      
      //echo "from($config_email, $config_company_name)<br/>";  
      // $this->postmark->to($config_email);
      
      
      
      $this->postmark->cc('mat@redstudio.co.uk');
      
      
      $this->postmark->subject('' . $config_company_name . 'Quote Form');
      $this->postmark->message_html("Someone has requested a Quote
        <br/>
        Name: " . $data['name'] . "
                        <br/>
                        Phone: " . $data['phone'] . "
                                         <br/>
                                         email: " . $data['email'] . "
                                                          <br/>
                                                          subject: " . $data['subject'] . "
                                                                             <br/>
                                                                             Areas of Interest: " . $data['interest'] . "
                                                                                                          <br/><br/>
                                                                                                          Message: " . $data['message'] . " 
                                                                                                                             
                                                                                                                             
                                                                                                                             ");
      $this->postmark->send();
      
      $this->session->set_flashdata('message', 'Your message has been sent. Thank you.');
      redirect('welcome/', 'refresh');
    }
  }
  
  }
  