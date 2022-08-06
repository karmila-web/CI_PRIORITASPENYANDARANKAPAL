<?php 

class Controller_utama extends CI_Controller {
    
    // public function index() {
    //     $this->load->model('coba_models');
    //     $data['user']=$this->coba_models->get_data();

    //     $this->load->view('v_user', $data);
    // }

    public function index()
	{
		$this->load->view('login');
	}

    public function dashboard()
	{
		$this->load->view('templates/header');
		$this->load->view('dashboard');
		$this->load->view('templates/footer');
	}

    public function contact()
	{
        $this->load->view('templates/header');
		$this->load->view('contact');
    }

    public function developer_team()
	{
        $this->load->view('templates/header');
		$this->load->view('developer_team');
		$this->load->view('templates/footer2');
    }

    public function v_datakapal()
	{
		$this->load->view('v_datakapal');
    }

    public function v_datakriteria()
	{
		$this->load->view('v_datakriteria');
    }

    public function v_datakapalprioritas()
	{
		$this->load->view('v_datakapalprioritas');
    }

    public function v_user()
	{
        // $data['user'] = $this->m_user->tampil_data()->result();

		// $this->load->view('v_user', $data); // Meload view file .php 
	    $this->load->view('v_user');
    }

    //  function v_user(){
    //     $this->load->model('m_user');
    //     $data['v_user'] = $this->tampil_data()->getAll();
    //     $this->load->view('v_user', $data);
    //   }  

    public function v_tambahuser()
	{
		$this->load->view('v_tambahuser');
    }

    public function v_tambahdatakapal()
	{
		$this->load->view('v_tambahdatakapal');
    }
}
?>