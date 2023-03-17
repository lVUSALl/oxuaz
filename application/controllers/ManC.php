<?php 
class manc extends CI_Controller{

    public function __construct() {
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
        $data['get_all_course'] = $this->user_course->get_all_course();
        // print_r("<pre>");
        // print_r($data['get_all_course']);
        // die;
        $this->load->view('user/our-services', $data);
    }
    // public function scourse(){
    //     $this->load->view('user/course-single');
    // }
    public function single_course($id){
        $id = $this->security->xss_clean($id);
        $product_id = $this->uri->segment(2);

        if(!is_numeric($product_id)){
            redirect(base_url('home'));
        }

        $data['get_5_course'] = $this->user_course->get_5_course();
        $data['single_course'] = $this->user_course->get_single_course($id);
        $data['get_all_categories'] = $this->user_course->get_all_categories();
        // print_r('<pre>');
        // print_r($data['single_course']);
        // die();

        if($data['single_course']){
            $this->load->view('user/course-single', $data);
        } else {
            redirect(base_url('index'));
        }
        
    }
}
