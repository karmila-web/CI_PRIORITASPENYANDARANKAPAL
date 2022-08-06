<?php 

class Coba_models extends CI_Model {
    public function get_data() {
        return $this->db->get('tb_user')->result_array();
    }
}

?>