<?php 
class manc extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('user_course');
        $this->load->helper(array('form','url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
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

    // function contactform() {
    //     //set validation rules
    //     $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
    //     $this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
    //     $this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
        
    //     //run validation on post data
    //     if ($this->form_validation->run() == FALSE){   //validation fails
    //         $this->load->view('contact_form_view');
    //     }
    //     else {
    //         //insert the contact form data into database
    //         $data = array(
    //             'name' => $this->input->post('name'),
    //             'email' => $this->input->post('email'),
    //             'subject' => $this->input->post('subject'),
    //             'message' => $this->input->post('message')
    //         );

    //         if ($this->db->insert('contacts', $data)) {
    //             // success
    //             $this->session->set_flashdata('msg','<div class="alert alert-success text-center">We received your message! Will get back to you shortly!!!</div>');
    //             redirect('contactform/index');
    //         }
    //         else {
    //             // error
    //             $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Some Error.  Please try again later!!!</div>');
    //             redirect('contactform/index');
    //         }
    //     }
    // }
    
    //custom callback to accept only alphabets and space input
    function alpha_space_only($str) {
        if (!preg_match("/^[a-zA-Z ]+$/",$str)){
            $this->form_validation->set_message('alpha_space_only', 'The %s field must contain only alphabets and space');
            return FALSE;
        }
        else{
            return TRUE;
        }
    }
}
