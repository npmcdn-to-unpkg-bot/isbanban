<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {

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
		$this->load->model('admin/m_donation');
		date_default_timezone_set('Asia/Jakarta');
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getAll'		=> $this->m_donation->getAll()
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/index');
		$this->load->view('admin/footer');
	}


	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getCategory'	=> $this->m_donation->getDonationCategory(),
			'getBank'		=> $this->m_donation->getBankAccount()
		];

// Create Unique Confirm Code
		$seed = str_split('abcdefghjkmnpqrstuvwxyz'.'ABCDEFGHJKMNPQRSTUVWXYZ');
	    shuffle($seed); // probably optional since array_is randomized; this may be redundant
	    $rand = '';
	    foreach (array_rand($seed, 5) as $k) $rand .= $seed[$k];

	    $confirm_code	= $rand.date('hi');


// Validation Configuration
		$config	= array(
			array(
				'field'	=> 'donatur_nama',
				'label'	=> 'Nama',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_telefon',
				'label'	=> 'Nomor Telefon',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_email',
				'label'	=> 'Email',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'tanggal_donasi',
				'label'	=> 'Tanggal Donasi',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'status_donasi',
				'label'	=> 'Status Donasi',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donasi_jenis',
				'label'	=> 'Jenis Donasi',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);


// Additional Validation If Status confirmed
		if($this->input->post('status_donasi')==1) {
			$this->form_validation->set_rules('tanggal_konfirmasi', 'Tanggal Konfirmasi', 'required');
			$confirmed_at = $this->input->post('tanggal_konfirmasi');
		} else {
			$confirmed_at = "";
		}

// Additional Validation If Donation is Money
		if($this->input->post('donasi_jenis')==3) {
			$this->form_validation->set_rules('donasi_banyak_uang', 'Jumlah Donasi', 'required');
			$this->form_validation->set_rules('donatur_rekening', 'Nomor Rekening', 'required');
			$this->form_validation->set_rules('donatur_pemilik', 'Rekening Donatur', 'required');
			$this->form_validation->set_rules('donasi_ke', 'Rekening Tujuan', 'required');
			$countMuch = $this->input->post('donasi_banyak_uang');
		} else {
			$this->form_validation->set_rules('donasi_banyak_buku', 'Jumlah Donasi', 'required');
			$countMuch = $this->input->post('donasi_banyak_buku');
		}



		if($this->input->post()) {
			if($this->form_validation->run()) {

				$datadb	= array(
					'nama'      			=>$this->input->post('donatur_nama'),
					'telefon'   			=>$this->input->post('donatur_telefon'),
					'email' 	  			=>$this->input->post('donatur_email'),
					'pesan'   				=>$this->input->post('donatur_pesan'),
					'created_at'   			=>$this->input->post('tanggal_donasi'),
					'confirmed_at'   		=>$confirmed_at,
					'status'  				=>$this->input->post('status_donasi'),
					'id_jenis'   			=>$this->input->post('donasi_jenis'),
					'donasi_banyak' 		=>$countMuch,
					'donasi_nomor_rekening' =>$this->input->post('donatur_rekening'),
					'donasi_nama_rekening'	=>$this->input->post('donatur_pemilik'),
					'donasi_transfer'   	=>$this->input->post('donasi_ke'),
					'confirm_code'     		=>$confirm_code,
					'parameter_code'      	=>strtolower(md5((url_title($this->input->post('donatur_nama').$this->input->post('tanggal_donasi').$this->input->post('tanggal_konfirmasi'))))),
				);

				$this->m_donation->insert($datadb);
				$this->session->set_flashdata('success', true);
				redirect('admin/donation');
			}	
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/insert');
		$this->load->view('admin/footer');
	}


	function view($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getThis'		=> $this->m_donation->getThis($parameter_code)
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/view');
		$this->load->view('admin/footer');
	}

	function edit($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'getThis'		=> $this->m_donation->getThis($parameter_code),
			'getCategory'	=> $this->m_donation->getDonationCategory(),
			'getBank'		=> $this->m_donation->getBankAccount()
		];


// Validation Configuration
		$config	= array(
			array(
				'field'	=> 'donatur_nama',
				'label'	=> 'Nama',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_telefon',
				'label'	=> 'Nomor Telefon',
				'rules'	=> 'required'
			),
			array(
				'field'	=> 'donatur_email',
				'label'	=> 'Email',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);


		if($this->input->post('status_donasi') == 0) {
			$this->form_validation->set_rules('status_donasi', 'Status', 'required');
			$this->form_validation->set_rules('tanggal_konfirmasi', 'Tanggal Konfirmasi', 'required');

			$status_donasi 		= $this->input->post('status_donasi');
			$tanggal_konfirmasi	= $this->input->post('tanggal_konfirmasi');
		} else {
			$this->form_validation->set_rules('tanggal_konfirmasi', 'Tanggal Konfirmasi', 'required');

			$status_donasi 		= $this->input->post('status_donasi');
			$tanggal_konfirmasi	= $this->input->post('tanggal_konfirmasi');

		}



// Additional Validation For Donation
		if($this->input->post('jenis_donasi')==1) {
			$this->form_validation->set_rules('donasi_banyak_buku', 'Banyak Buku', 'required');
			$countMuch = $this->input->post('donasi_banyak_buku');

		} else if($this->input->post('jenis_donasi')==3) {
			$this->form_validation->set_rules('donasi_banyak_uang', 'Jumlah Donasi', 'required');
			$this->form_validation->set_rules('donatur_rekening', 'Nomor Rekening', 'required');
			$this->form_validation->set_rules('donatur_pemilik', 'Pemiliki Rekening', 'required');
			$this->form_validation->set_rules('donasi_ke', 'Rekening Tujuan', 'required');
			$countMuch = $this->input->post('donasi_banyak_uang');
		}

		if($this->input->post()) {
			if($this->form_validation->run()) {

				$datadb	= array(
					'nama'      			=>$this->input->post('donatur_nama'),
					'telefon'   			=>$this->input->post('donatur_telefon'),
					'email' 	  			=>$this->input->post('donatur_email'),
					'pesan'   				=>$this->input->post('donatur_pesan'),
					'confirmed_at'   		=>$tanggal_konfirmasi,
					'status'  				=>$status_donasi,
					'donasi_banyak' 		=>$countMuch,
					'donasi_nomor_rekening' =>$this->input->post('donatur_rekening'),
					'donasi_nama_rekening'	=>$this->input->post('donatur_pemilik'),
					'donasi_transfer'   	=>$this->input->post('donasi_ke'),
				);

				$this->m_donation->update($parameter_code, $datadb);
				$this->session->set_flashdata('succes-edit', true);
				redirect('admin/donation');
			}
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/donation/edit');
		$this->load->view('admin/footer');
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */