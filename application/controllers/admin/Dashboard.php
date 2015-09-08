<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        /* Load :: Common */
        $this->load->model('admin/dashboard_model');
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Title Page */
            $this->page_title->push(lang('menu_dashboard'));
            $this->data['pagetitle'] = $this->page_title->show();

            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            /* Data */
            $this->data['count_users']  = $this->dashboard_model->get_count_record('users');
            $this->data['count_groups'] = $this->dashboard_model->get_count_record('groups');
            $this->data['disk_use']     = $this->dashboard_model->disk_space_use();


            /* TEST */
            $this->data['url_exist']    = is_url_exist('http://www.domprojects.com');


            /* Load Template */
            $this->template->admin_render('admin/dashboard/index', $this->data);
        }
	}
}
