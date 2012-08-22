<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Timetable extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('captcha_model');
        $this->load->model('content_model');
        $this->load->model('timetable_model');
    }

    public function index() {
        redirect('timetable/main');
    }

    public function main() {
        $segment_active = $this->uri->segment(3);
        if ($segment_active != NULL) {
            $data['menu'] = $this->uri->segment(3);
        } else {
            $data['menu'] = 'studio';
        }

        $menu = $data['menu'] . '_timetable';
        $this->get_content_data($menu);
        $data['timetable'] = $this->timetable_model->get_timetable($data['menu']);
        $data['days'] = $this->timetable_model->get_timetable_days($data['menu']);
        $data['main_content'] = "admin/timetables";
        $data['slideshow'] = 'header/slideshow';


        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function get_content_data($menu) {
        $data['content'] = $this->content_model->get_content($menu);
        foreach ($data['content'] as $row):

            $data['title'] = $row->title;
            $data['sidebox'] = $row->sidebox;
            $data['metatitle'] = $row->meta_title;

            $data['meta_keywords'] = $row->meta_desc;
            $data['meta_description'] = $row->meta_keywords;
            $data['slideshow_active'] = $row->slideshow;



        endforeach;
        $this->load->vars($data);
        return $data;
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */