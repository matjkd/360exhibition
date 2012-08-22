<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Captcha_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function initiate_captcha() {
        $vals = array(
            'img_path' => './images/captcha/',
            'img_url' => '' . base_url() . 'images/captcha/'
        );

        $cap = create_captcha($vals);

        $data = array(
            'captcha_time' => $cap['time'],
            'ip_address' => $this->input->ip_address(),
            'word' => $cap['word']
        );

        $query = $this->db->insert_string('captcha', $data);
        $this->db->query($query);

        return $cap;
    }

    function check($word, $ip, $date) {
        // First, delete old captchas
        $expiration = time() - 7200; // Two hour limit
        $this->db->where('captcha_time <', $expiration);
        $this->db->delete('captcha');

        // Then see if a captcha exists:

        $sql = "SELECT COUNT(*) AS count FROM ignite_captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";


        $binds = array($_POST['captcha'], $this->input->ip_address(), $expiration);
        $query = $this->db->query($sql, $binds);
        $row = $query->row();
        if ($row->count == 0) {
            //return true to indicate failure, sounds backwards I know. 
            return TRUE;
        } else {
            //return false to indicate it hasn't failed
            return FALSE;
        }
    }

}