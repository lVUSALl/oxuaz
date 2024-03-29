<?php 
class user_course extends CI_Model {
    public function get_all_course(){
        return $this->db
            ->select('n_id, n_title, n_description, n_category, n_status, n_img, a_name, c_teacher, c_time')
            ->order_by('n_id', 'DESC')
            ->join('admin', 'admin.a_id = news.n_updater_id', 'left')
            ->get('news')->result_array();
    }
    
    public function get_single_course($id){
        return $this->db
        ->where('n_id',$id)
        ->get('news')->row_array();
        
    }

    public function get_5_course(){
        return $this->db
            ->limit(5)
            ->select('n_id,n_title,n_description,n_date,n_category,n_img,n_file_ext,a_name')
            ->order_by('n_id', 'DESC')
            ->join('admin', 'admin.a_id = news.n_creator_id', 'left')
            ->get('news')->result_array();
    }
    
    public function get_category($category){
        return $this->db->where('n_category', $category)->get('news')->result_array();
    }
    
    public function get_all_categories(){
        return $this->db->get('category')->result_array();
    }
}