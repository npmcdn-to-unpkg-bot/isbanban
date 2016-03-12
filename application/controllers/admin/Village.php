<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Village extends CI_Controller {

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
		$this->load->model('admin/m_village');
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	public function index()
	{
		$data	= [
			'title'      => 'Istana Belajar Anak Banten',
			'role'		 => 'village',
			'getAll'     => $this->m_village->getAll(),
		];


		$this->load->view('admin/header', $data);
		$this->load->view('admin/village/index');
		$this->load->view('admin/footer');
	}

	public function add()
	{
		$data	= [
			'title'  => 'Istana Belajar Anak Banten',
			'role'		 => 'village',
			'getChapter' => $this->m_village->getChapter(),
		];


		// config form validation
		$config	= array(
			array(
				"field"	=> "nama",
				"label"	=> "Nama Desa",
				"rules"	=> "required"
			),

			array(
				"field"	=> "lokasi",
				"label"	=> "Lokasi Desa",
				"rules"	=> "required"
			),

			array(
				"field"	=> "latitude",
				"label"	=> "Latitude",
				"rules"	=> "required"
			),

			array(
				"field"	=> "longitude",
				"label"	=> "Longitude",
				"rules"	=> "required"
			)
		);
		$this->form_validation->set_rules($config);


		// config file upload
		$configFile['upload_path']   = './uploads/desa';
		$configFile['allowed_types'] = 'gif|jpg|png';
		$configFile['max_size']      = '2000';
		$configFile['encrypt_name']  = true;
		$this->load->library('upload', $configFile);


		if($this->input->post()) {

			if($this->form_validation->run()) {

				if($this->upload->do_upload('gambar')) {

					$dataImg	= $this->upload->data();
					$path 		= "uploads/desa/";

					$datadb	= array(
						'nama'           =>$this->input->post('nama'),
						'lokasi'         =>$this->input->post('lokasi'),
						'latitude'       =>$this->input->post('latitude'),
						'longitude'      =>$this->input->post('longitude'),
						'detail'         =>$this->input->post('detail'),
						'picture_path'   =>$path.$dataImg['file_name'],
						'created_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('nama'))),
						'parameter_code' =>md5($this->input->post('nama')),
					);

				} else {

					$datadb	= array(
						'nama'           =>$this->input->post('nama'),
						'lokasi'         =>$this->input->post('lokasi'),
						'latitude'       =>$this->input->post('latitude'),
						'longitude'      =>$this->input->post('longitude'),
						'detail'         =>$this->input->post('detail'),
						'created_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('nama'))),
						'parameter_code' =>md5($this->input->post('nama')),
					);
				}

				$this->m_village->insert($datadb);
				$this->session->set_flashdata('success', true);
				redirect('admin/village');
			
			}
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/village/add');
		$this->load->view('admin/footer');
	}

	public function edit($parameter_code)
	{
		$data	= [
			'title'      => 'Istana Belajar Anak Banten',
			'role'		 => 'village',
			'getThis'    => $this->m_village->getThis($parameter_code),
			'getChapter' => $this->m_village->getChapter(),
		];


		// config form validation
		$config	= array(
			array(
				"field"	=> "nama",
				"label"	=> "Nama Desa",
				"rules"	=> "required"
			),

			array(
				"field"	=> "lokasi",
				"label"	=> "Lokasi Desa",
				"rules"	=> "required"
			),

			array(
				"field"	=> "latitude",
				"label"	=> "Latitude",
				"rules"	=> "required"
			),

			array(
				"field"	=> "longitude",
				"label"	=> "Longitude",
				"rules"	=> "required"
			)
		);
		$this->form_validation->set_rules($config);


		// config file upload
		$configFile['upload_path']   = './uploads/desa';
		$configFile['allowed_types'] = 'gif|jpg|png';
		$configFile['max_size']      = '2000';
		$configFile['encrypt_name']  = true;
		$this->load->library('upload', $configFile);


		if($this->input->post()) {

			if($this->form_validation->run()) {


				if(!empty($_FILES['gambar']['tmp_name'])) {

					if($this->upload->do_upload('gambar')) {
						$dataImg	= $this->upload->data();
						$path 		= "uploads/desa/";

						$datadb	= array(
							'nama'           =>$this->input->post('nama'),
							'lokasi'         =>$this->input->post('lokasi'),
							'latitude'       =>$this->input->post('latitude'),
							'longitude'      =>$this->input->post('longitude'),
							'detail'         =>$this->input->post('detail'),
							'picture_path'   =>$path.$dataImg['file_name'],
							'updated_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('nama'))),
							'parameter_code' =>md5($this->input->post('nama')),
						);

					} 

				} else {

					$datadb	= array(
						'nama'           =>$this->input->post('nama'),
						'lokasi'         =>$this->input->post('lokasi'),
						'latitude'       =>$this->input->post('latitude'),
						'longitude'      =>$this->input->post('longitude'),
						'detail'         =>$this->input->post('detail'),
						'updated_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('nama'))),
						'parameter_code' =>md5($this->input->post('nama')),
					);
				}

				$this->m_village->update($datadb, $parameter_code);
				$this->session->set_flashdata('success', true);
				redirect('admin/village');
			
			}
		}


		$this->load->view('admin/header', $data);
		$this->load->view('admin/village/edit');
		$this->load->view('admin/footer');
	}


	public function delete($parameter_code)
	{
		$this->m_village->delete($parameter_code);
		redirect(base_url().'admin/village/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */