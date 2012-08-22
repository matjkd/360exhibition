<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Timetable_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function add_entry() {
        //process menu link
        // build array for the model


        $now = time();
        $datetime = $now;
        $form_data = array(
            'day' => $this->input->post('day'),
            'timetable_category' => $this->input->post('timetableCategory'),
            'from' => $this->input->post('startTime'),
            'to' => $this->input->post('endTime'),
            'class' => $this->input->post('className'),
            'description' => $this->input->post('description'),
            'instructor' => $this->input->post('instructor'),
            'level' => $this->input->post('level'),
            'where' => $this->input->post('location'),
            'date_added' => $datetime
        );
        $insert = $this->db->insert('timetables', $form_data);
        return $insert;
    }

    function get_timetable($category) {

        $this->db->order_by('from');
        $this->db->where('timetable_category', $category);
        $this->db->join('content', 'content.content_id = timetables.description', 'left');
        $query = $this->db->get('timetables');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_timetable_days($category) {

        $this->db->order_by('day');
        $this->db->where('timetable_category', $category);
        $query = $this->db->get('timetables');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function update_timetable($id) {
        $timetable_update = array(
            'timetable_category' => $this->input->post('timetableCategory'),
            'day' => $this->input->post('day'),
            'from' => $this->input->post('startTime'),
            'to' => $this->input->post('endTime'),
            'class' => $this->input->post('className'),
            'description' => $this->input->post('description'),
            'instructor' => $this->input->post('instructor'),
            'level' => $this->input->post('level'),
            'where' => $this->input->post('location')
        );




        $this->db->where('timetable_id', $id);
        $update = $this->db->update('timetables', $timetable_update);
        return $update;
    }

    function get_entry($id) {
        $this->db->order_by('from');
        $this->db->where('timetable_id', $id);
        $query = $this->db->get('timetables');
        if ($query->num_rows == 1) {
            return $query->result();
        }
    }

    function delete_timetable($id) {
        $this->db->where('timetable_id', $id);
        $this->db->delete('timetables');
        return;
    }

}