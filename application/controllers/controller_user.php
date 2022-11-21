<?php 

class Controller_user extends CI_Controller {

    public function index()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/halaman_utama');
		$this->load->view('user/templates/footer');
	}

    public function contact()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/contact');
		$this->load->view('user/templates/footer');
	}
    
    public function team()
	{
		$this->load->view('user/templates/header');
		$this->load->view('user/developer_team');
		$this->load->view('user/templates/footer2');
	}

    public function datakapalprioritas()
	{
        $this->load->view('user/templates/header_sb');
		$this->load->view('user/v_datakapalprioritas');
        $this->load->view('user/templates/footer_sb');
    }

    public function prosedur()
    {
        $this->load->view('user/templates/header_sb');
        $this->load->view('user/v_prosedur');
        $this->load->view('user/templates/footer_sb');
    }

}
?>