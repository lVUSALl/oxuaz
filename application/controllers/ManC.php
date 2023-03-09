<?php 
class manc extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_course');
    }

    public function index(){
        $this->load->view('user/index');
    }
    public function about(){
        $this->load->view('user/about-us');
    }
    public function contact(){
        $this->load->view('user/contact-us');
    }
    public function services(){
        $this->load->view('user/our-services');

        $data['get_all_course'] = $this->user_course->get_all_course();
        print_r("<pre>");
        print_r($data['get_all_course']);
        die;
    }
}
