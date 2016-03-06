<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Volunteer extends CI_Controller {

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
		$this->load->model('admin/m_volunteer');

		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'volunteer',
			'getAll'		=> $this->m_volunteer->getAll(),
			'getChapter'	=> $this->m_volunteer->getChapter(),
			'getDepartment'	=> $this->m_volunteer->getDepartment(),
			'getPosition'	=> $this->m_volunteer->getPosition()
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/volunteer/data');
		$this->load->view('admin/footer');
	}

	function recruitment()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'oprec',
			'getAll'		=> $this->m_volunteer->getRecruitment(),
		];


		$this->load->view('admin/header', $data);
		$this->load->view('admin/volunteer/recruitment/index');
		$this->load->view('admin/footer');
	}

	function add()
	{

		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'volunteer',
			'getAll'		=> $this->m_volunteer->getAll(),
			'getChapter'	=> $this->m_volunteer->getChapter(),
			'getDepartment'	=> $this->m_volunteer->getDepartment(),
			'getPosition'	=> $this->m_volunteer->getPosition()
		];

		$slug		= strtolower(url_title($this->input->post('nama')));
		$randomCode = random_string('numeric', 4);

		$chapter = $this->input->post('chapter');
		
// Get Bulan Masuk
		$date = $this->input->post('bulan_masuk');
		$dateExplode = explode("-", $date);


// Generate Clean Code For Volunteer		
		$cleanCode	= $chapter.$randomCode.$dateExplode[0];

		$config	= array(
				array(
					'field'	=> 'nama',
					'label'	=> 'Nama Relawan',
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
					'field'	=> 'jenis_kelamin',
					'label'	=> 'Jenis Kelamin',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'golongan_darah',
					'label'	=> 'Golongan Darah',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'alamat_pribadi',
					'label'	=> 'Alamat Pribadi',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'agama',
					'label'	=> 'Agama',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'email',
					'label'	=> 'Email',
					'rules'	=> 'required|valid_email'
				),

				array(
					'field'	=> 'nomor_pribadi',
					'label'	=> 'Nomor Pribadi',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'bulan_masuk',
					'label'	=> 'Bulan Bergabung',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'chapter',
					'label'	=> 'Chapter',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'alasan',
					'label'	=> 'Alasan Bergabung',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'visi',
					'label'	=> 'Mimpi Untuk Isbanban',
					'rules'	=> 'required'
				),
		);
		$this->form_validation->set_rules($config);

// File Uploads Settings
		$config['upload_path']   = './uploads/relawan/';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);	

		
		if($this->form_validation->run()) {

			if($this->upload->do_upload('gambar')) {

				$path    = "uploads/relawan/";
				$dataImg = $this->upload->data();

				$data	= array(
					'nama'            => $this->input->post('nama'),
					'tempat_lahir'    => $this->input->post('tempat_lahir'),
					'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
					'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
					'golongan_darah'  => $this->input->post('golongan_darah'),
					'alamat_pribadi'  => $this->input->post('alamat_pribadi'),
					'agama'           => $this->input->post('agama'),
					'asal'            => $this->input->post('asal'),
					'pekerjaan'       => $this->input->post('pekerjaan'),
					'email'           => $this->input->post('email'),
					'nomor_pribadi'   => $this->input->post('nomor_pribadi'),
					'bulan_masuk'     => $this->input->post('bulan_masuk'),
					'chapter'         => $this->input->post('chapter'),
					'visi'            => $this->input->post('visi'),
					'alasan'          => $this->input->post('alasan'),
					'facebook_link'   => $this->input->post('facebook_link'),
					'twitter_link'    => $this->input->post('twitter_link'),
					'instagram_link'  => $this->input->post('instagram_link'),
					'alamat_orangtua' => $this->input->post('alamat_orangtua'),
					'nomor_orangtua'  => $this->input->post('nomor_orangtua'),
					'created_at'      => date('Y-m-d'),
					'path_foto'		  => $path.$dataImg['file_name'],
					'kode'            => $cleanCode,
					'slug'            => url_title(strtolower($this->input->post('nama'))),
					'parameter_code'  => md5($cleanCode.$slug),
				);


			} else {

				$data	= array(
					'nama'            => $this->input->post('nama'),
					'tempat_lahir'    => $this->input->post('tempat_lahir'),
					'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
					'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
					'golongan_darah'  => $this->input->post('golongan_darah'),
					'alamat_pribadi'  => $this->input->post('alamat_pribadi'),
					'agama'           => $this->input->post('agama'),
					'asal'            => $this->input->post('asal'),
					'pekerjaan'       => $this->input->post('pekerjaan'),
					'email'           => $this->input->post('email'),
					'nomor_pribadi'   => $this->input->post('nomor_pribadi'),
					'bulan_masuk'     => $this->input->post('bulan_masuk'),
					'chapter'         => $this->input->post('chapter'),
					'visi'            => $this->input->post('visi'),
					'alasan'          => $this->input->post('alasan'),
					'facebook_link'   => $this->input->post('facebook_link'),
					'twitter_link'    => $this->input->post('twitter_link'),
					'instagram_link'  => $this->input->post('instagram_link'),
					'alamat_orangtua' => $this->input->post('alamat_orangtua'),
					'nomor_orangtua'  => $this->input->post('nomor_orangtua'),
					'created_at'      => date('Y-m-d'),
					'kode'            => $cleanCode,
					'slug'            => url_title(strtolower($this->input->post('nama'))),
					'parameter_code'  => md5($cleanCode.$slug),
				);
			

			}

			$this->m_volunteer->insert($data);
			$this->session->set_flashdata('SIR', 'Berhasil Insert Data Relawan');
			redirect('/admin/volunteer');
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/volunteer/index');
		$this->load->view('admin/footer');
	}

	function edit($parameter_code) {

		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'volunteer',
			'getThis'		=> $this->m_volunteer->getByParameter($parameter_code),
			'getChapter'	=> $this->m_volunteer->getChapter(),
			'getDepartment'	=> $this->m_volunteer->getDepartment(),
			'getPosition'	=> $this->m_volunteer->getPosition()
		];


// configuration data
		$config	= array(
				array(
					'field'	=> 'nama',
					'label'	=> 'Nama Relawan',
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
					'field'	=> 'jenis_kelamin',
					'label'	=> 'Jenis Kelamin',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'golongan_darah',
					'label'	=> 'Golongan Darah',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'alamat_pribadi',
					'label'	=> 'Alamat Pribadi',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'agama',
					'label'	=> 'Agama',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'email',
					'label'	=> 'Email',
					'rules'	=> 'required|valid_email'
				),

				array(
					'field'	=> 'nomor_pribadi',
					'label'	=> 'Nomor Pribadi',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'bulan_masuk',
					'label'	=> 'Bulan Bergabung',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'chapter',
					'label'	=> 'Chapter',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'alasan',
					'label'	=> 'Alasan',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'visi',
					'label'	=> 'Visi',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'alamat_orangtua',
					'label'	=> 'Alamat Orang Tua',
					'rules'	=> 'required'
				),

				array(
					'field'	=> 'nomor_orangtua',
					'label'	=> 'Nomor Orang Tua',
					'rules'	=> 'required'
				)
		);
		$this->form_validation->set_rules($config);


// File Uploads Settings
		$config['upload_path']   = './uploads/relawan/';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);


		if($this->input->post()) {
			if($this->form_validation->run()) {

				if($_FILES['gambar']['name']) {
					if($this->upload->do_upload('gambar')) {

						$path 	 = "uploads/relawan/";
						$dataImg = $this->upload->data();
							
						$datadb	= array(
							'nama'            => $this->input->post('nama'),
							'tempat_lahir'    => $this->input->post('tempat_lahir'),
							'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
							'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
							'golongan_darah'  => $this->input->post('golongan_darah'),
							'alamat_pribadi'  => $this->input->post('alamat_pribadi'),
							'agama'           => $this->input->post('agama'),
							'asal'            => $this->input->post('asal'),
							'pekerjaan'       => $this->input->post('pekerjaan'),
							'email'           => $this->input->post('email'),
							'nomor_pribadi'   => $this->input->post('nomor_pribadi'),
							'bulan_masuk'     => $this->input->post('bulan_masuk'),
							'chapter'         => $this->input->post('chapter'),
							'departemen'      => $this->input->post('departemen'),
							'posisi'      	  => $this->input->post('posisi'),
							'alasan'          => $this->input->post('alasan'),
							'visi'            => $this->input->post('visi'),
							'path_foto'		  => $path.$dataImg['file_name'],
							'facebook_link'   => $this->input->post('facebook_link'),
							'twitter_link'    => $this->input->post('twitter_link'),
							'instagram_link'  => $this->input->post('instagram_link'),
							'alamat_orangtua' => $this->input->post('alamat_orangtua'),
							'nomor_orangtua'  => $this->input->post('nomor_orangtua'),
							'updated_at'      => date('Y-m-d'),
							'slug'            => url_title(strtolower($this->input->post('nama'))),
						);
					}

				} else {

					$datadb	= array(
							'nama'            => $this->input->post('nama'),
							'tempat_lahir'    => $this->input->post('tempat_lahir'),
							'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
							'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
							'golongan_darah'  => $this->input->post('golongan_darah'),
							'alamat_pribadi'  => $this->input->post('alamat_pribadi'),
							'agama'           => $this->input->post('agama'),
							'asal'            => $this->input->post('asal'),
							'pekerjaan'       => $this->input->post('pekerjaan'),
							'email'           => $this->input->post('email'),
							'nomor_pribadi'   => $this->input->post('nomor_pribadi'),
							'bulan_masuk'     => $this->input->post('bulan_masuk'),
							'chapter'         => $this->input->post('chapter'),
							'departemen'      => $this->input->post('departemen'),
							'posisi'      	  => $this->input->post('posisi'),
							'alasan'          => $this->input->post('alasan'),
							'visi'            => $this->input->post('visi'),
							'facebook_link'   => $this->input->post('facebook_link'),
							'twitter_link'    => $this->input->post('twitter_link'),
							'instagram_link'  => $this->input->post('instagram_link'),
							'alamat_orangtua' => $this->input->post('alamat_orangtua'),
							'nomor_orangtua'  => $this->input->post('nomor_orangtua'),
							'updated_at'      => date('Y-m-d'),
							'slug'            => url_title(strtolower($this->input->post('nama'))),
						);
				}

				$this->m_volunteer->update($datadb, $parameter_code);
				$this->session->set_flashdata('SIR', 'Berhasil update data relawan');
				redirect('/admin/volunteer');
			}
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/volunteer/detail');
		$this->load->view('admin/footer');
	}

	function view($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'volunteer',
			'getThis'		=> $this->m_volunteer->getByParameter($parameter_code),
			'getChapter'	=> $this->m_volunteer->getChapter(),
			'getDepartment'	=> $this->m_volunteer->getDepartment(),
			'getPosition'	=> $this->m_volunteer->getPosition()
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/volunteer/view');
		$this->load->view('admin/footer');
	}

	function delete($parameter_code)
	{
		$this->m_volunteer->delete($parameter_code);
		redirect('admin/volunteer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */