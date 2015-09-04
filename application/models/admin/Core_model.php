<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }


    public function get_file_install()
    {     
        if (file_exists('install.php'))
        {
            $val = '<div class="row">';
            $val.= '<div class="col-md-12">';
            $val.= '<div class="alert alert-danger">';
            $val.= '<h4><i class="icon fa fa-warning"></i>' . lang('actions_security_error') . '</h4>';
            $val.= '<p>' . sprintf(lang('actions_file_install_exist'), '<a href="#" class="btn btn-warning btn-flat btn-xs">' . strtolower(lang('actions_delete')) . '</a>') . '</p>';
            $val.= '</div>';
            $val.= '</div>';
            $val.= '</div>';

            return $val;
        }
    }
}
