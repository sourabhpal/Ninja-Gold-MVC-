<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		if (!$this->session->userdata('gold'))
		{
			$this->session->set_userdata('gold',0);
		}
		if (!$this->session->userdata('messages'))
		{
			$array = array();
			$this->session->set_userdata('messages', $array);
		}
		$this->load->view('game');		
	}
}

//end of main controller