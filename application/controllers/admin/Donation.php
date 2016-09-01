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
			'icon'			=> 'fa-heart-o',
			'pagetitle'		=> 'Donation',
			'page'			=> 'pages/admin/donation/index',
			'getAll'		=> $this->m_donation->getAll()
		];

		$this->load->view('layout/backend', $data);
	}


	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'icon'			=> 'fa-heart-o',
			'pagetitle'		=> 'Add Donation',
			'page'			=> 'pages/admin/donation/insert',
			'getCategory'	=> $this->m_donation->getDonationCategory(),
			'getBank'		=> $this->m_donation->getBankAccount()
		];

		// Create Unique Confirm Code
		$seed = str_split('abcdefghjkmnpqrstuvwxyz'.'ABCDEFGHJKMNPQRSTUVWXYZ');
	    shuffle($seed);
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
			// $this->form_validation->set_rules('donatur_rekening', 'Nomor Rekening', 'required');
			// $this->form_validation->set_rules('donatur_pemilik', 'Rekening Donatur', 'required');
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

		$this->load->view('layout/backend', $data);
	}


	function view($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'icon'			=> 'fa-heart-o',
			'pagetitle'		=> 'Donation Detail',
			'page'			=> 'pages/admin/donation/view',
			'getThis'		=> $this->m_donation->getThis($parameter_code)
		];

		$this->load->view('layout/backend', $data);
	}

	function edit($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'donation',
			'icon'			=> 'fa-heart-o',
			'pagetitle'		=> 'Edit Donation',
			'page'			=> 'pages/admin/donation/edit',
			'getThis'		=> $this->m_donation->getThis($parameter_code),
			'getCategory'	=> $this->m_donation->getDonationCategory(),
			'getBank'		=> $this->m_donation->getBankAccount()
		];


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
			// $this->form_validation->set_rules('donatur_rekening', 'Nomor Rekening', 'required');
			// $this->form_validation->set_rules('donatur_pemilik', 'Pemiliki Rekening', 'required');
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

				if($this->m_donation->update($parameter_code, $datadb)) {
					$this->session->set_flashdata('success-edit', true);
					redirect('admin/donation');
				}
			}
		}

		$this->load->view('layout/backend', $data);
	}

	function generate($parameter_code, $confirm_code)
	{
		$getThis = $this->db->get_where('donasi', array('confirm_code' => $confirm_code))->result();
		foreach($getThis as $row) {
			$data['confirm_code']		 	 = $row->confirm_code;
			$data['donasi_date']		 	 = $row->created_at;
			$data['confirmed_date']		 	 = $row->confirmed_at;
			$data['donatur_nama']		 	 = $row->nama;
			$data['donasi_cash']		 	 = $row->donasi_banyak;
			$data['donatur_number']			 = $row->telefon;
			$data['donatur_email']			 = $row->email;
			$data['donatur_message']		 = $row->pesan;
			$data['donatur_rekening_nama']	 = $row->donasi_nama_rekening;
			$data['donatur_rekening_nomor']	 = $row->donasi_nomor_rekening;
		}

		$this->do_pdf($data);
		$this->session->set_flashdata('success-generate', true);
		redirect(base_url().'admin/donation/view/'.$parameter_code);
	}

	function deliver($parameter_code, $confirm_code) 
	{
		$getThis = $this->db->get_where('donasi', array('confirm_code' => $confirm_code))->result();
		foreach($getThis as $row) {
			$data['confirm_code']	= $row->confirm_code;
			$data['donatur_email']	= $row->email;
			$data['donatur_nama']	= $row->nama;
		}

		// Config Mail
		$this->load->library('email');
		$configMail = Array(
			'protocol'  => 'smtp',
			'smtp_host' => 'mail.smtp2go.com',
			'smtp_port' => 587,
			'smtp_user' => 'ihsan@isbanban.org',
			'smtp_pass' => 'TWGAqI4wPReo',
			'crlf'      => "\r\n",
			'newline'   => "\r\n",
			'mailtype'  => 'html',
		);
		
		// $configMail = Array(
		//   'protocol' 	=> 'smtp',
		//   'smtp_host' 	=> 'mailtrap.io',
		//   'smtp_port' 	=> 2525,
		//   'smtp_user' 	=> '573617400c51f2f73',
		//   'smtp_pass' 	=> '4ee968dc28496c',
		//   'crlf' 		=> "\r\n",
		//   'newline' 	=> "\r\n",
		//   'mailtype'	=> 'html'
		// );
		$this->email->initialize($configMail);

		// Attach PDF
		$data['path_pdf'] 	= base_url().'uploads/pdf/donation-confirmed-'.$data['confirm_code'].".pdf";

		// Mail Settings
		$this->email->from('admin@isbanban.org', 'Istana Belajar Anak Banten');
		$this->email->to($data['donatur_email']); 
		$this->email->cc('funding@isbanban.org'); 
		$this->email->subject('Halo '.$data['donatur_nama'].', donasi anda telah kami terima');
		
		$data['page']	= 'pages/mail/donation-success';
		$message 		= $this->load->view('layout/mail', $data, TRUE);

		$this->email->message($message);
		$this->email->attach($data['path_pdf']);

		if($this->email->send()) {
			$this->session->set_flashdata('success-deliver', true);
			redirect(base_url().'admin/donation/view/'.$parameter_code);
		}
	}

	function do_pdf($data) {
		//load the view and saved it into $html variable
		$data['page']	= 'pages/pdf/donation-success';
		$html 			= $this->load->view('layout/pdf2', $data, true);

		// $pdfFilePath = "donation-request-"+$data['confirm_code']+".pdf";
		$path 		= 'uploads/pdf/';
		if(!is_dir($path))
	    {
	      mkdir($path,0755,TRUE);
	    } 
		$pdfFilePath = $path."donation-confirmed-".$data['confirm_code'].".pdf";

        //load mPDF library
		$this->load->library('m_pdf');

		$style  	= base_url().'template/assets/print.css';
        $stylesheet = file_get_contents($style);

       	//generate the PDF from the given html
		// $this->m_pdf->pdf->WriteHTML($stylesheet, 2);
		$this->m_pdf->pdf->WriteHTML($html);

        //download it.
		// $this->m_pdf->pdf->Output($pdfFilePath, "D");
		$this->m_pdf->pdf->Output($pdfFilePath, "F");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */