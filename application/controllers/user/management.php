<?php

class Management extends MY_Controller {

    function Management() {
        parent::__Construct();
        $id = 'management';
        $this->load->library(array('encrypt', 'form_validation'));
        $this->load->model('content_model');
        $this->load->model('membership_model');
        $this->is_logged_in();
    }

    function index() {
        if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }


        $data['update_user'] = 0;


        $data['main_content'] = "admin/user_management";
        $data['pages'] = $this->content_model->get_all_content();
        $data['userlist'] = $this->membership_model->list_users();
        $data['seo_links'] = $this->content_model->get_seo_links();
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function edit_user($user_id = NULL) {
        if ($this->session->flashdata('message')) {
            $data['message'] = $this->session->flashdata('message');
        }

        if ($user_id != NULL) {

            $data['update_user'] = 1;
            $userinfo = $this->membership_model->get_member($user_id);
            if ($userinfo) {
                foreach ($userinfo as $row):
                    $data['user_id'] = $row->user_id;
                    $data['firstname'] = $row->firstname;
                    $data['lastname'] = $row->lastname;
                    $data['username'] = $row->username;
                    $data['email'] = $row->email;
                endforeach;
            }
            else {
                $data['update_user'] = 0;
            }
        } else {
            $data['update_user'] = 0;
        }


        $data['main_content'] = "admin/user_management";
        $data['pages'] = $this->content_model->get_all_content();
        $data['userlist'] = $this->membership_model->list_users();
        $data['seo_links'] = $this->content_model->get_seo_links();
        $this->load->vars($data);
        $this->load->view('template/main');
    }

    function update_member() {

        $member_id = $this->input->post('user_id');
        // field name, error message, validation rules
        $this->form_validation->set_rules('firstname', 'Name', 'trim|required');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');


        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|matches[password]');


        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', "form validation error " . validation_errors());
  $data['message'] = validation_errors();
            $this->edit_user($member_id);
        } else {

            $query = $this->membership_model->update_member($member_id);
            if ($query) {
                $this->session->set_flashdata('message', "updated");
                  $data['message'] = "updated";
                $this->edit_user($member_id);
                //$this->template->load('template', 'user/signup_successful');
            } else {
                $this->session->set_flashdata('message', "update failed.");
                 $data['message'] = "update failed";
                $this->edit_user($member_id);
                //$this->template->load('template', 'user/register');		
            }
        }
    }

    function is_logged_in() {
        $is_logged_in = $this->session->userdata('is_logged_in');
        $role = $this->session->userdata('role');
        if (!isset($is_logged_in) || $role != 1) {
            $data['message'] = "You don't have permission";
            redirect('welcome/login', 'refresh');
        }
    }

}