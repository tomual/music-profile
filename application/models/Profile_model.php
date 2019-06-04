<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('file');
    }

    function save($data)
    {
        $data = json_encode($data);
        return write_file('application/profile', $data);
    }

    function get()
    {
        $data = read_file('application/profile');
        return json_decode($data);
    }
}
