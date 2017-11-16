<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->form_validation->set_rules('identity', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == TRUE)
        {
            $identity = $this->input->post('identity');
            $password = $this->input->post('password');
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($identity, $password, $remember))
            {
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect(site_url('welcome'));
            }
            else
            {
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect(site_url('login'));
            }
        }
        else
        {
            $this->load->admin('login');
        }
    }

    public function logout()
    {
        $this->ion_auth->logout();
        redirect(site_url('login'));
    }

}
