<?php 
class ManC extends CI_Controller{
    public function index(){
        $this->load->view('User/index');
    }
    public function about(){
        $this->load->view('User/about-us');
    }
    public function contact(){
        $this->load->view('User/contact-us');
    }
    public function services(){
        $this->load->view('User/our-services');
    }
}
