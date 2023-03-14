<?php
class ajaxsearch_model extends CI_Model {
    function fetch_data($query){
        $this->db->select('*');
        $this->db->from("news");
        if($query != '') {
            $this->db->like('n_title', $query);
            $this->db->or_like('n_description', $query);
            $this->db->or_like('n_categroy', $query);
            $this->db->or_like('c_teacher', $query);
        }
        $this->db->order_by('CustomerID', 'DESC');
        return $this->db->get();
    }
}
?>