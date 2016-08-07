<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller {

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
		$this->load->model('admin/m_event');
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'event',
			'icon'			=> 'fa-calendar-o',
			'pagetitle'		=> 'Events',
			'page'			=> 'pages/admin/event/index',
			'getAll'		=> $this->m_event->getAll(),
		];

		$this->load->view('layout/backend', $data);
	}

	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'event',
			'icon'			=> 'fa-calendar-o',
			'pagetitle'		=> 'Add Event',
			'page'			=> 'pages/admin/event/add'
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'judul',
				'label'	=> 'Judul',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'tanggal',
				'label'	=> 'Tanggal',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'lokasi',
				'label'	=> 'Lokasi',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'latitude',
				'label'	=> 'Latitude',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'longitude',
				'label'	=> 'Longitude',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'konten',
				'label'	=> 'Konten',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/event';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {

			if($this->form_validation->run()) {
				if($this->upload->do_upload('gambar')) {
					$path    = 'uploads/event/';
					$dataImg = $this->upload->data();

					$datadb	= array(
						'judul'          =>$this->input->post('judul'),
						'tanggal'        =>$this->input->post('tanggal'),
						'lokasi'         =>$this->input->post('lokasi'),
						'latitude'       =>$this->input->post('latitude'),
						'longitude'      =>$this->input->post('longitude'),
						'konten'         =>$this->input->post('konten'),
						'path_foto'      =>$path.$dataImg['file_name'],
						'created_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('judul'))),
						'parameter_code' =>md5($this->input->post('judul')),
					);


					$this->m_event->insert($datadb);
					$this->session->set_flashdata('success', true);
					redirect('admin/event');

				} else {

					if(!$this->upload->display_errors()) {
						$datadb	= array(
							'judul'          =>$this->input->post('judul'),
							'tanggal'        =>$this->input->post('tanggal'),
							'lokasi'         =>$this->input->post('lokasi'),
							'latitude'       =>$this->input->post('latitude'),
							'longitude'      =>$this->input->post('longitude'),
							'konten'         =>$this->input->post('konten'),
							'path_foto'      =>$path.$dataImg['file_name'],
							'created_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('judul'))),
							'parameter_code' =>md5($this->input->post('judul')),
						);

						$this->m_event->insert($datadb);
						$this->session->set_flashdata('success', true);
						redirect('admin/event');

					}
				}
			}
		}

		$this->load->view('layout/backend', $data);
	}

	function edit($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'		 	=> 'event',
			'icon'			=> 'fa-calendar-o',
			'pagetitle'		=> 'Edit Event',
			'page'			=> 'pages/admin/event/edit',
			'getThis'		=> $this->m_event->getThis($parameter_code),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'judul',
				'label'	=> 'Judul',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'tanggal',
				'label'	=> 'Tanggal',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'lokasi',
				'label'	=> 'Lokasi',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'latitude',
				'label'	=> 'Latitude',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'longitude',
				'label'	=> 'Longitude',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'konten',
				'label'	=> 'Konten',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/event';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {
			if($this->form_validation->run()) {
				if($_FILES['gambar']['name']) {
					if($this->upload->do_upload('gambar')) {
						$path    = 'uploads/event/';
						$dataImg = $this->upload->data();

						$datadb	= array(
							'judul'          =>$this->input->post('judul'),
							'tanggal'        =>$this->input->post('tanggal'),
							'lokasi'         =>$this->input->post('lokasi'),
							'latitude'       =>$this->input->post('latitude'),
							'longitude'      =>$this->input->post('longitude'),
							'konten'         =>$this->input->post('konten'),
							'path_foto'      =>$path.$dataImg['file_name'],
							'updated_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('judul'))),
						);

						$this->m_event->update($parameter_code, $datadb);
						$this->session->set_flashdata('success-edit', true);
						redirect('admin/event');
					}
				} else {
					$datadb	= array(
						'judul'          =>$this->input->post('judul'),
						'tanggal'        =>$this->input->post('tanggal'),
						'lokasi'         =>$this->input->post('lokasi'),
						'latitude'       =>$this->input->post('latitude'),
						'longitude'      =>$this->input->post('longitude'),
						'konten'         =>$this->input->post('konten'),
						'updated_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('judul'))),
					);

					$this->m_event->update($parameter_code, $datadb);
					$this->session->set_flashdata('success-edit', true);
					redirect('admin/event');
				}
			}
		}

		$this->load->view('layout/backend', $data);
	}

	function delete($parameter_code)
	{
		$this->m_event->delete($parameter_code);
		redirect('admin/event');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */