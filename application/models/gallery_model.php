<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function do_upload() {
        $this->gallery_path = './images/temp/';
        $this->gallery_path_url = base_url() . 'images/temp/';
        
        
        $config = array(
            'allowed_types' => 'jpg|jpeg|gif|png',
            'upload_path' => $this->gallery_path,
            'max_size' => 10000
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $image_data = $this->upload->data();
        }



        //resize the images
        $config = array(
            'source_image' => $image_data['full_path'],
            'new_image' => $this->gallery_path . 'thumbs',
            'maintain_ratio' => true,
            'width' => 350,
            'height' => 200
        );

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
        $this->image_lib->clear();
    }
    
    function upload_attachment() {
        
         $this->gallery_path = './images/temp/';
        $this->gallery_path_url = base_url() . 'images/temp/';
        
        
        $config = array(
            'allowed_types' => 'doc|pdf|docx|zip',
            'upload_path' => $this->gallery_path,
            'max_size' => 50000
        );

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        } else {
            $image_data = $this->upload->data();
        }

        
        
        
    }
    
    function do_case_upload($field = 0, $height = 110) {
    
    	$this->gallery_path = './images/temp/';
    	$this->gallery_path_url = base_url() . 'images/temp/';
    
    	if($field === 0) {
    		$field = "image";
    	}
    	else {
    		$field = $field;
    	}
    
    	$config = array(
    			'allowed_types' => 'jpg|jpeg|gif|png',
    			'upload_path' => $this->gallery_path,
    			'max_size' => 10000
    	);
    
    	$this->load->library('upload', $config);
    	if (!$this->upload->do_upload($field)) {
    		$error = array('error' => $this->upload->display_errors());
    		print_r($error);
    	} else {
    
    		$image_data = $this->upload->data();
    	}
    
    
    
    	//resize the images
    	$config = array(
    			'source_image' => $image_data['full_path'],
    			'new_image' => $this->gallery_path . 'thumbs/'.$image_data['orig_name'],
    			'maintain_ratio' => true,
    
    			'height' => $height
    	);
    	$this->load->library('image_lib', $config);
    	$this->image_lib->initialize($config);
    	$this->image_lib->clear();
    	$this->image_lib->initialize($config);
    		
    	if ( ! $this->image_lib->resize())
    	{
    		echo $this->image_lib->display_errors();
    	}
    	$this->image_lib->clear();
    
    
    
    }
    
    function do_upload_pdf() {
    	$this->gallery_path = './images/temp/';
    	$this->gallery_path_url = base_url() . 'images/temp/';
    
    
    	$config = array(
    			'allowed_types' => 'pdf',
    			'upload_path' => $this->gallery_path,
    			'max_size' => 100000
    	);
    
    	$this->load->library('upload', $config);
    	if (!$this->upload->do_upload('pdf')) {
    		$error = array('error' => $this->upload->display_errors());
    		print_r($error);
    	} else {
    		$image_data = $this->upload->data();
    	}
    
    
    
    		
    }

}
