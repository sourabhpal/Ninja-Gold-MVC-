<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process_Money extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$building = $this->input->post('building');

		if ($building == 'farm')
		{
			$gold = rand(10,20);
		}
		if ($building == 'cave')
		{
			$gold = rand(5,10);
		}
		if ($building == 'house')
		{
			$gold = rand(2,5);
		}
		if ($building == 'casino')
		{
			if (rand(1,100) <= 70)
			{
				$gold = rand(-50,0);
			}
			else
			{
				$gold = rand(0,50);
			}
		}
		$array = array();
		$array = $this->session->userdata('messages');
		if ($gold < 0)
		{
			$temp = 0 - $gold;
			$message = "<span class = 'alert-danger'>You have entered a {$building} and lost {$temp} golds.</span><br>";
		}
		else
		{
			$message = "<span class = 'alert-success'>You have entered a {$building} and earned {$gold} golds.</span><br>";
		}
		array_push($array, $message);
		$this->session->set_userdata('messages', $array);
		$gold += $this->session->userdata('gold');
		$this->session->set_userdata('gold', $gold);
		redirect('/');
	}
}
