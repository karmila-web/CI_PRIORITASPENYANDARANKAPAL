<?php 

class M_user extends CI_Model {

    public function tampil_data() {
        return $this->db->get('tb_user')->result_array();
        // return $this->db->get('tb_user')->result_array();
    }
}

?>