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
            /* Load */
            $this->load->config('admin/dp_config');
            $this->load->config('common/dp_config');

            /* Valid form */
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            /* Data */
            $this->data['title']               = $this->config->item('title');
            $this->data['title_lg']            = $this->config->item('title_lg');
            $this->data['auth_social_network'] = $this->config->item('auth_social_network');
            $this->data['forgot_password']     = $this->config->item('forgot_password');
            $this->data['new_membership']      = $this->config->item('new_membership');

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
                        /* Data */
                        $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

                        /* Load Template */
                        $this->template->auth_render('auth/choice', $this->data);
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

                $this->data['identity'] = array(
                    'name'        => 'identity',
                    'id'          => 'identity',
                    'type'        => 'email',
                    'value'       => $this->form_validation->set_value('identity'),
                    'class'       => 'form-control',
                    'placeholder' => lang('auth_your_email')
                );
                $this->data['password'] = array(
                    'name'        => 'password',
                    'id'          => 'password',
                    'type'        => 'password',
                    'class'       => 'form-control',
                    'placeholder' => lang('auth_your_password')
                );

                /* Load Template */
                $this->template->auth_render('auth/login', $this->data);
            }
        }
        else
        {
            redirect('/', 'refresh');
        }
   }


    function logout($src = NULL)
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

}
