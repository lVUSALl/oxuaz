<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class test_m extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function set($key){
        $this->db->select('*');
        $this->db->like('n_name', $key);
        $this->db->or_like('n_description', $key);
        return $this->db->get('news')->result();
    }
}