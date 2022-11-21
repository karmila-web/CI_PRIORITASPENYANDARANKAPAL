<?php 

class M_datakapal extends CI_Model {

    public function tampil_datakapal() {
        return $this->db->get('tb_data_kapal')->result();
    }


}

?>