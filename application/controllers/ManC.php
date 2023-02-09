<?php 
class ManC extends CI_Controller{
    public function index(){
        echo "Hello World !";
    }
    public function about(){
        echo "About Metodu";
    }
    public function contact(){
        echo "Kontankt";
    }
    public function cs(){
        $this->load->view('User/home');
    }
}
