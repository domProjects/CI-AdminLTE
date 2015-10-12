<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Groups extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->lang->load('admin/groups');

        /* Title Page :: Common */
        $this->page_title->push(lang('menu_security_groups'));
        $this->data['pagetitle'] = $this->page_title->show();

        /* Breadcrumbs :: Common */
        $this->breadcrumbs->unshift(1, lang('menu_security_groups'), 'admin/groups');
    }


	public function index()
	{
        if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
        {
            redirect('auth/login', 'refresh');
        }
        else
        {
            /* Breadcrumbs */
            $this->data['breadcrumb'] = $this->breadcrumbs->show();

            $this->data['groups'] = $this->ion_auth->groups()->result();

            /* Load Template */
            $this->template->admin_render('admin/groups/index', $this->data);
        }
    }


	public function create()
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin())
		{
			redirect('auth', 'refresh');
		}

        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_groups_create'), 'admin/groups/create');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

		/* Validate form input */
		$this->form_validation->set_rules('group_name', 'lang:create_group_validation_name_label', 'required|alpha_dash');

		if ($this->form_validation->run() == TRUE)
		{
			$new_group_id = $this->ion_auth->create_group($this->input->post('group_name'), $this->input->post('description'));
			if ($new_group_id)
			{
				$this->session->set_flashdata('message', $this->ion_auth->messages());
				redirect('admin/groups', 'refresh');
			}
		}
		else
		{
            $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['group_name'] = array(
				'name'  => 'group_name',
				'id'    => 'group_name',
				'type'  => 'text',
                'class' => 'form-control',
				'value' => $this->form_validation->set_value('group_name')
			);
			$this->data['description'] = array(
				'name'  => 'description',
				'id'    => 'description',
				'type'  => 'text',
                'class' => 'form-control',
				'value' => $this->form_validation->set_value('description')
			);

            /* Load Template */
            $this->template->admin_render('admin/groups/create', $this->data);
		}
	}


	public function delete()
	{
        if ( ! $this->ion_auth->logged_in())
        {
            redirect('auth/login', 'refresh');
        }
        elseif ( ! $this->ion_auth->is_admin())
		{
            return show_error('You must be an administrator to view this page.');
        }
        else
        {
            $this->load->view('admin/groups/delete');
        }
	}


	public function edit($id)
	{
		if ( ! $this->ion_auth->logged_in() OR ! $this->ion_auth->is_admin() OR ! $id OR empty($id))
		{
			redirect('auth', 'refresh');
		}

        /* Breadcrumbs */
        $this->breadcrumbs->unshift(2, lang('menu_groups_edit'), 'admin/groups/edit');
        $this->data['breadcrumb'] = $this->breadcrumbs->show();

        /* Variables */
		$group = $this->ion_auth->group($id)->row();

		/* Validate form input */
        $this->form_validation->set_rules('group_name', $this->lang->line('edit_group_validation_name_label'), 'required|alpha_dash');

		if (isset($_POST) && ! empty($_POST))
		{
			if ($this->form_validation->run() == TRUE)
			{
				$group_update = $this->ion_auth->update_group($id, $_POST['group_name'], $_POST['group_description']);

				if ($group_update)
				{
					$this->session->set_flashdata('message', $this->lang->line('edit_group_saved'));

                    /* IN TEST */
                    $this->db->update('groups', array('bgcolor' => $_POST['group_bgcolor']), 'id = '.$id);
				}
				else
				{
					$this->session->set_flashdata('message', $this->ion_auth->errors());
				}

				redirect('admin/groups', 'refresh');
			}
		}

        $this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));
        $this->data['group']   = $group;

		$readonly = $this->config->item('admin_group', 'ion_auth') === $group->name ? 'readonly' : '';

		$this->data['group_name'] = array(
			'type'    => 'text',
			'name'    => 'group_name',
			'id'      => 'group_name',
			'value'   => $this->form_validation->set_value('group_name', $group->name),
            'class'   => 'form-control',
			$readonly => $readonly
		);
		$this->data['group_description'] = array(
			'type'  => 'text',
			'name'  => 'group_description',
			'id'    => 'group_description',
			'value' => $this->form_validation->set_value('group_description', $group->description),
            'class' => 'form-control'
		);
		$this->data['group_bgcolor'] = array(
			'type'     => 'text',
			'name'     => 'group_bgcolor',
			'id'       => 'group_bgcolor',
			'value'    => $this->form_validation->set_value('group_bgcolor', $group->bgcolor),
			'data-src' => $group->bgcolor,
            'class'    => 'form-control'
		);

        /* Load Template */
        $this->template->admin_render('admin/groups/edit', $this->data);
	}
}
