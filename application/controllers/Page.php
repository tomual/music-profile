<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->library('session');
		$this->load->model('profile_model');
    }

	public function edit()
	{
		if (!$this->session->userdata('authorized')) {
			redirect('authorize');
		}

		if ($this->input->method() == 'post') {
			$data = $this->input->post();

			$this->profile_model->save($data);
			$this->session->set_flashdata('success', 'Profile has been updated.');
		}

		$data = $this->profile_model->get();
        set_title('Edit');
		$this->load->view('edit', $data);
	}

	public function authorize()
	{
		if ($this->input->method() == 'post') {
			$passphrase = $this->input->post('passphrase');
			if ($passphrase == $this->config->item('passphrase')) {
				$this->session->set_userdata('authorized', true);
				redirect('edit');
			} else {
				$this->session->set_flashdata('error', 'Incorrect passphrase.');
			}
		}
        set_title('Authorize');
		$this->load->view('passphrase');
	}
}
