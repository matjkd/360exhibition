<?php

class MY_Controller extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('admin_model');
        $this->load->library('postmark');

        $admindata = $this->admin_model->get_admin(1);
        foreach ($admindata as $row):

            $config_data['config_company_name'] = $row->company_name;
            $config_data['config_company_short'] = $row->company_name_short;

            $config_data['config_address1'] = $row->address1;
            $config_data['config_address2'] = $row->address2;
            $config_data['config_address3'] = $row->address3;
            $config_data['config_address4'] = $row->address4;
            $config_data['config_address5'] = $row->address5;

            $config_data['config_address'] = "" . $row->address1 . ", " . $row->address2 . ", " . $row->address3 . ", " . $row->address4 . ", " . $row->address5 . "";

            $config_data['config_version'] = "0.0.9";
            $config_data['bucket'] = $row->bucket;
            $config_data['config_email'] = $row->main_email;
            $config_data['config_website'] = $row->web_address;
            $config_data['config_phone'] = $row->main_phone;
            $config_data['config_theme'] = $row->company_theme;
            $config_data['config_logo'] = $row->company_logo;
            $config_data['config_doc_root'] = $row->doc_root;
            $config_data['maps_api'] = $row->mapsapi;
            //age of company
            $startdate = $row->startyear;
            $currentyear = date('Y');
            $age = $currentyear - $startdate;
            $config_data['age'] = $age;
            $this->config_theme = $row->company_theme;
            $this->bucket = $row->bucket;
            $this->config_email = $row->main_email;
            $this->config_base_path = $row->doc_root;

            $this->config_company_name = $row->company_name;
            $this->load->vars($config_data);

        endforeach;
    }

}