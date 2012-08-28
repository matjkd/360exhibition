<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_content($title) {

        $this->db->where('menu', $title);
        $query = $this->db->get('content');
        if ($query->num_rows == 1) {
            return $query->result();
        }
    }
    
    function get_content_cat($cat) {

        $this->db->where('category', $cat);
        $this->db->order_by('date_added', 'desc');
        $query = $this->db->get('content');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_gallery($gallery) {

        $this->db->where('gallery', $gallery);
        $this->db->order_by('order');
        $query = $this->db->get('content');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_testimonials() {

        $this->db->where('category', 'testimonial');
        $query = $this->db->get('content');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_seo_links() {
        $this->db->select('menu, title, content_id');
        $this->db->where('category', 'seo');
        $query = $this->db->get('content');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_content_id($id) {

        $this->db->where('content_id', $id);
        $query = $this->db->get('content');
        if ($query->num_rows == 1)
            ; {
            return $query->result();
        }
    }

    function edit_content($id) {


        $content_update = array(
            'content' => $this->input->post('content'),
            'menu' => $this->input->post('menu'),
            'gallery' => $this->input->post('gallery'),
            'title' => $this->input->post('title'),
            'extra' => $this->input->post('extra'),
            'meta_desc' => $this->input->post('meta_desc'),
            'meta_keywords' => $this->input->post('meta_keywords'),
            'meta_title' => $this->input->post('meta_title'),
            'sidebox' => $this->input->post('sidebox'),
            'slideshow' => $this->input->post('slideshow')
        );




        $this->db->where('content_id', $id);
        $update = $this->db->update('content', $content_update);
        return $update;
    }

    function get_all_content() {
        $query = $this->db->get('content');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_all_products() {


        $query = $this->db->get('products');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }
    function add_case_study() {
    
    		
    
    	$now = time();
    	$datetime = $now;
    	$form_data = array(
    			'case_title' => set_value('title'),
    			'description' => $this->input->post('content'),
    
    			'date_added' => $datetime
    	);
    	$insert = $this->db->insert('case_studies', $form_data);
    	return $insert;
    }
    function get_case_id($id) {
    
    	$this->db->where('case_id', $id);
    	$query = $this->db->get('case_studies');
    	if ($query->num_rows == 1)
    		; {
    		return $query->result();
    	}
    }
    
    function update_case_study($id) {
    
    		
    		
    	$now = time();
    	$datetime = $now;
    	$form_data = array(
    			'case_title' => set_value('title'),
    			'description' => $this->input->post('content'),
    				
    				
    	);
    	$this->db->where('case_id', $id);
    	$update = $this->db->update('case_studies', $form_data);
    	return $update;
    }
    
    function get_case_studies() {
    	$query = $this->db->get('case_studies');
    	if ($query->num_rows > 0) {
    		return $query->result();
    	}
    }
    /**
     *
     * @param type $filename
     * @param type $blog_id
     * @return type
     */
    function add_file_to_case($filename, $blog_id, $field) {
    	$content_update = array(
    			$field => $filename
    	);
    
    	$this->db->where('case_id', $blog_id);
    	$update = $this->db->update('case_studies', $content_update);
    	return $update;
    }
    
    /**
     *
     * @param type $filename
     * @param type $blog_id
     * @return type
     */
    function add_pdf_to_case($filename, $blog_id) {
    	$content_update = array(
    			'pdf_link' => $filename
    	);
    
    	$this->db->where('case_id', $blog_id);
    	$update = $this->db->update('case_studies', $content_update);
    	return $update;
    }
    
    
    function get_all_news() {

        $this->db->where('content_type', 'news');
        $this->db->orderby('content_id', 'desc');
        $query = $this->db->get('content');
        if ($query->num_rows > 0)
            ; {
            return $query->result();
        }
    }

    function get_news($id) {

        $this->db->where('menu', $id);
        $query = $this->db->get('content');
        if ($query->num_rows > 0)
            ; {
            return $query->result();
        }
    }

    function get_service_groups() {

        $query = $this->db->get('service_groups');
        if ($query->num_rows > 0)
            ; {
            return $query->result();
        }
    }

    function get_services() {
        $query = $this->db->get('services');
        if ($query->num_rows > 0)
            ; {
            return $query->result();
        }
    }

    function latest_news() {
        $this->db->where('content_type', 'news');
        $this->db->orderby('content_id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('content');
        if ($query->num_rows == 1)
            ; {
            return $query->result();
        }
    }

    function add_content() {

        //process menu link
        $menu_link = $this->input->post('menu');
        $search = array(" ");
        $replace = "-";
        if ($menu_link == NULL) {

            $subject = set_value('title');
            $menu_link = str_replace($search, $replace, $subject);
        } else {
            $subject = $this->input->post('menu');
            $menu_link = str_replace($search, $replace, $subject);
        }

        // build array for the model
        $name = "" . $this->session->userdata('firstname') . " " . $this->session->userdata('lastname') . "";

        $now = time();
        $datetime = $now;
        $form_data = array(
            'title' => set_value('title'),
            'content' => $this->input->post('content'),
            'menu' => $menu_link,
            'category' => set_value('category'),
            'added_by' => $name,
            'gallery' => $this->input->post('gallery'),
            'date_added' => $datetime
        );
        $insert = $this->db->insert('content', $form_data);
        return $insert;
    }

    /**
     *
     * @param type $filename
     * @param type $blog_id
     * @return type 
     */
    function add_file($filename, $blog_id) {
        $content_update = array(
            'news_image' => $filename
        );

        $this->db->where('content_id', $blog_id);
        $update = $this->db->update('content', $content_update);
        return $update;
    }

    /**
     *
     * @param type $filename
     * @param type $blog_id
     * @return type 
     */
    function add_attachment($filename, $name, $blog_id) {
        $content_update = array(
            'filename' => $filename,
            'name' => $name,
            'content_id' => $blog_id
        );


        $update = $this->db->insert('attachments', $content_update);
        return $update;
    }

    function get_attachments($id) {
        $this->db->where('content_id', $id);
        $query = $this->db->get('attachments');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function delete_attachment($id) {
        $this->db->where('attachment_id', $id);
        $this->db->delete('attachments');
        return;
    }

}