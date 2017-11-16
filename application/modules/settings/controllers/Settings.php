<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MX_Controller {

	public function __construct()
	{
		parent:: __construct();
		if(!$this->ion_auth->logged_in())
        {
            redirect(site_url('login'));
        }
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Settings';
		$data['content'] = $this->load->view('datatable', '', true);
		$this->load->admin('template', $data);

	}

	public function profile()
	{
		$this->form_validation->set_rules('name', 'name', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']');
		$this->form_validation->set_rules('password_confirm', 'password confirm', 'matches[password]');

		if($this->form_validation->run() == TRUE)
		{
			$id = get_user('id');
			$data = array(
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
			);

			if ($this->input->post('password'))
            {
				$data['password'] = $this->input->post('password');
            }

            if($this->ion_auth->update($id, $data))
            {
                $this->session->set_flashdata('succes', $this->ion_auth->messages());
                redirect(current_url());
            }
            else
            {
                $this->session->set_flashdata('error', $this->ion_auth->errors());
                redirect(current_url());
            }
		}
		else
		{
			$data['title'] = 'Profile';
			$data['content'] = $this->load->view('profile', '', TRUE);
			$this->load->admin('template', $data);
		}


	}
}
