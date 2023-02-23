<?php 
class manc extends CI_Controller{
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
    }
}
