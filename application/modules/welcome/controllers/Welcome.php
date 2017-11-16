<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct()
	{
		parent:: __construct();
		if(!$this->ion_auth->logged_in())
        {
            redirect(site_url('login'));
        }
	}

	public function index()
	{
		//$data['content'] = 'cumi';
		$this->load->admin('template');
	}
}
