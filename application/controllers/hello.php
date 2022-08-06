<?php 

class Hello extends CI_Controller {
    
    public function index() {
        $this->load->model('coba_models');
        $data['user']=$this->coba_models->get_data();

        $this->load->view('v_user', $data);
    }
}



?>