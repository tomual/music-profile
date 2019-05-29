<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function index()
	{
        set_title('Page');
		$this->load->view('page');
	}


	public function one()
	{
        set_title('Page');
		$this->load->view('home');
	}

	public function two()
	{
        set_title('Page');
		$this->load->view('home2');
	}

	public function three()
	{
        set_title('Page');
		$this->load->view('home3');
	}

	public function four()
	{
        set_title('Page');
		$this->load->view('home4');
	}

	public function five()
	{
        set_title('Page');
		$this->load->view('home5');
	}
}
