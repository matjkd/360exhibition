<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('get_maincontent_data'))
{
 function get_maincontent_data($menu) {
      $ci=& get_instance();
        $ci->load->database(); 
        $data['content'] = $this->content_model->get_content($menu);
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
            $data['sidebox'] = $row->sidebox;
            $data['metatitle'] = $row->meta_title;

            $data['meta_keywords'] = $row->meta_desc;
            $data['meta_description'] = $row->meta_keywords;
            $data['slideshow'] = $row->slideshow;
            

        endforeach;
        $this->load->vars($data);
        return $data;
    }
}