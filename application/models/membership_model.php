<?php

class Membership_model extends CI_Model {

    function _prep_password($password) {
        return sha1($password . $this->config->item('encryption_key'));
    }

    function validate() {
        $this->db->where('username', $this->input->post('username'));
        $this->db->where('password', $this->_prep_password($this->input->post('password')));
        $query = $this->db->get('users');

        if ($query->num_rows == 1) {
            return true;
        }
    }

    function list_users() {

        $query = $this->db->get('users');
        if ($query->num_rows > 0) {
            return $query->result();
        }
    }

    function get_member($id) {

        $this->db->where('user_id', $id);
        $query = $this->db->get('users');
        if ($query->num_rows == 1) {
            return $query->result();
        }
    }

    function create_member() {
        $shapassword = $this->_prep_password($this->input->post('password'));
        $new_member_insert_data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'role' => $this->input->post('role'),
            'password' => $shapassword,
            'registerDate' => $this->input->post('registerDate'),
        );

        $insert = $this->db->insert('users', $new_member_insert_data);
        return $insert;
    }

    function update_member($id) {
        
        if ($this->input->post('password') != NULL) {
            $shapassword = $this->_prep_password($this->input->post('password'));
            $update_password_data = array(
                'password' => $shapassword
            );
$this->db->where('user_id', $id);
            $updatepassword = $this->db->update('users', $update_password_data);
        } else {
            
        }
        $new_member_update_data = array(
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'role' => $this->input->post('role'),
            'registerDate' => $this->input->post('registerDate'),
        );
$this->db->where('user_id', $id);
        $update = $this->db->update('users', $new_member_update_data);
        return $update;
    }

}