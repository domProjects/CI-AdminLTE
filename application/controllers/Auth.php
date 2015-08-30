<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	function __construct()
	{
		parent::__construct();

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}


	function index()
	{
        if ( ! $this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            redirect('/', 'refresh');
        }
	}


    function login()
	{
        if ( ! $this->ion_auth->logged_in())
        {
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == TRUE)
            {
                $remember = (bool) $this->input->post('remember');

                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
                {
                    if ( ! $this->ion_auth->is_admin())
                    {
                        $this->session->set_flashdata('message', $this->ion_auth->messages());
                        redirect('/', 'refresh');
                    }
                    else
                    {
                        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
                        $this->_render_page('auth/choice', $this->data);
                    }
                }
                else
                {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
				    redirect('auth/login', 'refresh');
                }
            }
            else
            {
                $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                $this->data['identity'] = array('name' => 'identity',
                    'id'    => 'identity',
				    'type'  => 'text',
				    'value' => $this->form_validation->set_value('identity'),
                );
                $this->data['password'] = array('name' => 'password',
                    'id'   => 'password',
				    'type' => 'password',
                );

                $this->_render_page('auth/login', $this->data);
            }
        }
        else
        {
            redirect('/', 'refresh');
        }
   }


    function logout($src)
	{
        $logout = $this->ion_auth->logout();

        $this->session->set_flashdata('message', $this->ion_auth->messages());

        if ($src == 'admin')
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            redirect('/', 'refresh');
        }
	}




    function _render_page($view, $data=null, $returnhtml=false)//I think this makes more sense
	{
		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html;//This will return html on 3rd argument being true
	}

}
