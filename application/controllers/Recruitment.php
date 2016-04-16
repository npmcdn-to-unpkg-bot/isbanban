<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recruitment extends CI_Controller {

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
				'rules'	=> 'required'
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
					'nomor_pribadi'  =>$this->input->post('nomor_pribadi'),
					'alamat_pribadi' =>$this->input->post('alamat_pribadi'),
					'email'          =>$this->input->post('email'),
					'pekerjaan'   	 =>$this->input->post('pekerjaan'),
					'asal'   		 =>$this->input->post('asal_sekolah'),
					'chapter'        =>$this->input->post('chapter'),
					'jenis_kelamin'  =>$this->input->post('jenis_kelamin'),
					'bulan_masuk'    =>'2016-04-00',
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

// Send Mail
				$this->load->library('email');
				$configMail = Array(
					'protocol'  => 'smtp',
					'smtp_host' => 'mail.smtp2go.com',
					'smtp_port' => 2525,
					'smtp_user' => 'ihsan@isbanban.org',
					'smtp_pass' => 'TWGAqI4wPReo',
					'crlf'      => "\r\n",
					'newline'   => "\r\n",
					'mailtype'  => 'html',
					'priority'  => 1
				);

				// $configMail = Array(
				//   'protocol' => 'smtp',
				//   'smtp_host' => 'mailtrap.io',
				//   'smtp_port' => 2525,
				//   'smtp_user' => '573617400c51f2f73',
				//   'smtp_pass' => '4ee968dc28496c',
				//   'crlf' => "\r\n",
				//   'newline' => "\r\n",
				//   'mailtype'  => 'html',  
				// );
				$this->email->initialize($configMail);

				$data['relawan_nama']	= $this->input->post('nama');

				$this->email->from('noreply@isbanban.org', 'Istana Belajar Anak Banten');
				$this->email->to($this->input->post('email')); 

				$this->email->subject('Pendaftaran Calon Relawan');
        		$message=$this->load->view('mail_recruitment',$data,TRUE);
				$this->email->message($message);
				$this->email->send();
				redirect('/recruitment');
			}
		}

		$this->load->view('recruitment', $data);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */