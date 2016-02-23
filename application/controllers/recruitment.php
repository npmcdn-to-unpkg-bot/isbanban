<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class recruitment extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent:: __construct();
		$this->load->model('m_recruitment');
		$this->session->set_userdata('form', true);
	}

	function index()
	{

		$data	= [
			'getChapter'	=> $this->m_recruitment->getChapter(),
		];

		$config	= array(
			array(
				'field'	=> 'nama',
				'label'	=> 'Nama',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'jenis_kelamin',
				'label'	=> 'Jenis Kelamin',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'tempat_lahir',
				'label'	=> 'Tempat Lahir',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'tanggal_lahir',
				'label'	=> 'Tanggal Lahir',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'alamat_pribadi',
				'label'	=> 'Alamat',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'agama',
				'label'	=> 'Agama',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'golongan_darah',
				'label'	=> 'Golongan Darah',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'nomor_pribadi',
				'label'	=> 'Nomor Telefon',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'email',
				'label'	=> 'Alamat Email',
				'rules'	=> 'required|email'
			),

			array(
				'field'	=> 'chapter',
				'label'	=> 'Domisili Pilihan',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);




		if($this->input->post()) {

			// Generate Slug
			$slug        = strtolower(url_title($this->input->post('nama')));

			// Generate Random String
			$randomCode  = random_string('numeric', 4);

			// Get Chapter
			$chapter     = $this->input->post('chapter');
			
			// Get Bulan Masuk
			$date        = date('Y-m-d');
			$dateExplode = explode("-", $date);
			
			// Result
			$cleanCode   = $chapter.$randomCode.$dateExplode[0];

			if($this->form_validation->run()) {

				$datadb	= array(
					'nama'           =>$this->input->post('nama'),
					'tempat_lahir'   =>$this->input->post('tempat_lahir'),
					'tanggal_lahir'  =>$this->input->post('tanggal_lahir'),
					'golongan_darah' =>$this->input->post('golongan_darah'),
					'agama'          =>$this->input->post('agama'),
					'nomor_pribadi'  =>"+62".$this->input->post('nomor_pribadi'),
					'alamat_pribadi' =>$this->input->post('alamat_pribadi'),
					'email'          =>$this->input->post('email'),
					'pekerjaan'   	 =>$this->input->post('pekerjaan'),
					'asal'   		 =>$this->input->post('asal_sekolah'),
					'chapter'        =>$this->input->post('chapter'),
					'jenis_kelamin'  =>$this->input->post('jenis_kelamin'),
					'bulan_masuk'    =>$date,
					'alasan'    	 =>$this->input->post('alasan'),
					'kode'  		 =>$cleanCode,
					'created_at'     =>$date,
					'slug'           =>strtolower(url_title($this->input->post('nama'))),
					'parameter_code' =>md5($this->input->post('nama'))
				);

				$datareferensi	= array(
					'kode_relawan'	=>$cleanCode,
					'referensi'		=>$this->input->post('referensi')
				);

				$this->m_recruitment->insert($datadb);
				$this->m_recruitment->referensi($datareferensi);
				$this->session->set_flashdata('success', true);
				redirect('/recruitment');
			}
		}

		$this->load->view('header', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */