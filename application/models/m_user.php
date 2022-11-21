<?php 

class M_user extends CI_Model {

    public function tampil_user() {
        return $this->db->get('tb_user')->result();
    }

    public function input_data($data,$table) {
        $this->db->insert($table,$data);
    }

    public function hapus_datauser($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    } 

    public function edit_datauser($where, $table) {
        return $this->db->get_where($table,$where);
    }

    public function update_datauser($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }


}

?>