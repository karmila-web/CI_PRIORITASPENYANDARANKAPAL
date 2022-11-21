<?php 

class Controller_utama extends CI_Controller {

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

    // SOURCE CODE UNTUK LOAD CONTROLLER AKSI DATA KAPAL
    public function v_datakapal()
	{
        $this->load->model('m_datakapal');
        $data['datakapal'] = $this->m_datakapal->tampil_datakapal();

        $this->load->view('templates/header_sb');
        $this->load->view('v_datakapal', $data);
        $this->load->view('templates/footer_sb');
    }

    public function v_tambahdatakapal()
	{
        $this->load->view('templates/header_sb');
        $this->load->view('v_tambahdatakapal');
        $this->load->view('templates/footer_sb');
    }

    public function aksitambahdatakapal()
	{
        $this->load->model('m_datakapal');
        $nama_kapal = $this->input->post('nama_kapal');
        $jenis_kapal = $this->input->post('jenis_kapal');
        $pengangkutan = $this->input->post('pengangkutan');
        $LOA = $this->input->post('LOA');

        $data = [
                    'nama_kapal'           => $nama_kapal,
                    'jenis_kapal'          => $jenis_kapal,
                    'pengangkutan'         => $pengangkutan,
                    'LOA'                  => $LOA
        ];

        $this->m_datakapal->input_data($data, 'tb_data_kapal');
        redirect('controller_utama/v_datakapal');
    }

    public function hapus_datakapal($id_kapal) {
        $this->load->model('m_datakapal');
        $where = ['id_kapal'  =>  $id_kapal];
        $this->m_datakapal->hapus_datakapal($where, 'tb_data_kapal');
        redirect('controller_utama/v_datakapal');
    }

    public function v_editdatakapal($id_kapal) {
        $this->load->model('m_datakapal');

        $where = ['id_kapal' => $id_kapal];
        $data['datakapal']   = $this->m_datakapal->edit_datakapal($where, 'tb_data_kapal')->result();

        $this->load->view('v_editdatakapal', $data);
    }

    public function update_datakapal() {
        $this->load->model('m_datakapal');

        $id_kapal       = $this->input->post('id_kapal');
        $nama_kapal     = $this->input->post('nama_kapal');
        $jenis_kapal    = $this->input->post('jenis_kapal');
        $pengangkutan   = $this->input->post('pengangkutan');
        // $p_dermaga      = $this->input->post('p_dermaga');
        $LOA            = $this->input->post('LOA');
    

    $data = [
                'nama_kapal'     =>  $nama_kapal,
                'jenis_kapal'    =>  $jenis_kapal,
                'pengangkutan'   =>  $pengangkutan,
                // 'p_dermaga'    =>  $usernamep_dermaga,
                'LOA'            =>  $LOA
    ];

    $where = [
                'id_kapal'  =>  $id_kapal
    ];

    $this->m_datakapal->update_datakapal($where,$data,'tb_data_kapal');
        redirect('controller_utama/v_datakapal');
    }

    // SOURCE CODE UNTUK LOAD CONTROLLER AKSI DATA KRITERIA
    public function v_datakriteria()
	{
		$this->load->view('templates/header_sb');
		$this->load->view('v_datakriteria');
		$this->load->view('templates/footer_sb');
    }

    // SOURCE CODE UNTUK LOAD CONTROLLER AKSI DATA KAPAL PRIORITAS
    public function v_datakapalprioritas()
	{
        $this->load->view('templates/header_sb');
		$this->load->view('v_datakapalprioritas');
        $this->load->view('templates/footer_sb');
    }

    // SOURCE CODE UNTUK LOAD CONTROLLER AKSI 
    function v_user(){
        $this->load->model('m_user');
        $data['user'] = $this->m_user->tampil_user();

        $this->load->view('templates/header_sb');
        $this->load->view('v_user', $data);
        $this->load->view('templates/footer_sb');
    }  

    public function v_tambahuser()
	{
        $this->load->view('templates/header_sb');
		$this->load->view('v_tambahuser');
        $this->load->view('templates/footer_sb');
    }

    public function aksitambahuser()
	{
        $nama_user = $this->input->post('nama_user');
        $status_user = $this->input->post('status_user');
        $jabatan = $this->input->post('jabatan');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $data = [
                    'nama_user'            => $nama_user,
                    'status_user'          => $status_user,
                    'jabatan'              => $jabatan,
                    'username'             => $username,
                    'password'             => $password
        ];

        $this->m_user->input_data($data, 'tb_user');
        redirect('controller_utama/v_user');
    }

    public function hapus_datauser($id_user) {
        $where = ['id_user'  =>  $id_user];
        $this->m_user->hapus_datauser($where, 'tb_user');
        redirect('controller_utama/v_user');
    }

    public function v_edituser($id_user) {
        $where = ['id_user' => $id_user];
        $data['user'] = $this->m_user->edit_datauser($where, 'tb_user')->result();

        $this->load->view('v_edituser', $data);
    }

    public function update_user() {
        $id_user     = $this->input->post('id_user');
        $nama_user   = $this->input->post('nama_user');
        $status_user = $this->input->post('status_user');
        $jabatan     = $this->input->post('jabatan');
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
    

    $data = [
                'nama_user'     =>  $nama_user,
                'status_user'   =>  $status_user,
                'jabatan'       =>  $jabatan,
                'username'      =>  $username,
                'password'      =>  $password  
    ];

    $where = [
                'id_user'  =>  $id_user
    ];

    $this->m_user->update_datauser($where,$data,'tb_user');
    redirect('controller_utama/v_user');

    }

    public function kembali_user() {
        redirect('controller_utama/v_user');
    }
}
?>