<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Original extends Public_Controller {

    public function __construct()
    {
        parent::__construct();
    }


	public function index()
	{
		$this->load->view('public/home');
	}
}
