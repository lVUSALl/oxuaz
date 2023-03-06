<?php 
class user_course extends CI_Model {
    public function get_all_course(){
        return $this->db
            ->select('n_id, n_title, n_description, n_date, n_category, n_img, n_file_ext, a_name')
            ->order_by('n_id', 'DESC')
            ->join('admin', 'admin.a_id = news.n_updater_id', 'left')
            ->get('news')->result_array();
    }
}