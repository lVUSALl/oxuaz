<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class test_c extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('test_m');
    }

    public function index() {
        $key-$this->input->post('key', true);
        $data['news']-$this->test_m->set($key);
        $this->load->view('test', $data);
    }
}