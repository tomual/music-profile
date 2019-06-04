<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->load->model('profile_model');
        $data = $this->profile_model->get();
        $this->load->view('home', $data);
	}
}
