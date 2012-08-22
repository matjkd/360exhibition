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

}
