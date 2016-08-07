<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Feedback extends CI_Controller {

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
		$this->load->model('admin/m_feedback');
		
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'feedback',
			'icon'			=> 'fa-comments',
			'pagetitle'		=> 'Feedback',
			'page'			=> 'pages/admin/feedback/index',
			'getAll'		=> $this->m_feedback->getAll(),
		];

		$this->load->view('layout/backend', $data);
	}

	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'feedback',
			'icon'			=> 'fa-comments',
			'pagetitle'		=> 'Add Feedback',
			'page'			=> 'pages/admin/feedback/add',
			'getCategory'	=> $this->m_feedback->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'nama',
				'label'	=> 'Nama',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'role',
				'label'	=> 'Roles',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'quote',
				'label'	=> 'Quotes',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'id_detail',
				'label'	=> 'Link Blog',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/testimoni';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {

			if($this->form_validation->run()) {
				if($this->upload->do_upload('gambar')) {
					$path    = 'uploads/testimoni/';
					$dataImg = $this->upload->data();

					$datadb	= array(
						'nama'       =>$this->input->post('nama'),
						'role'   	 =>$this->input->post('role'),
						'quote'      =>$this->input->post('quote'),
						'id_detail'  =>$this->input->post('id_detail'),
						'path_foto'  =>$path.$dataImg['file_name'],
						'created_at' =>date('Y-m-d'),
						'slug'       =>strtolower(url_title($this->input->post('nama'))),
						'parameter_code' =>md5($this->input->post('nama')),
					);

					$this->m_feedback->insert($datadb);
					$this->session->set_flashdata('success', true);
					redirect('admin/feedback');

				} else {

					if(!$this->upload->display_errors()) {
						$datadb	= array(
							'nama'       =>$this->input->post('nama'),
							'role'   	 =>$this->input->post('role'),
							'quote'      =>$this->input->post('quote'),
							'id_detail'  =>$this->input->post('id_detail'),
							'created_at' =>date('Y-m-d'),
							'slug'       =>strtolower(url_title($this->input->post('judul'))),
							'parameter_code' =>md5($this->input->post('judul')),
						);

						$this->m_feedback->insert($datadb);
						$this->session->set_flashdata('success', true);
						redirect('admin/feedback');
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
			'role'			=> 'feedback',
			'icon'			=> 'fa-comments',
			'pagetitle'		=> 'Edit Feedback',
			'page'			=> 'pages/admin/feedback/edit',
			'getThis'		=> $this->m_feedback->getThis($parameter_code),
			'getCategory'	=> $this->m_feedback->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'nama',
				'label'	=> 'Nama',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'role',
				'label'	=> 'Roles',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'quote',
				'label'	=> 'Quotes',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'id_detail',
				'label'	=> 'Link Blog',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/testimoni';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {
			if($this->form_validation->run()) {
				if($_FILES['gambar']['name']) {
					if($this->upload->do_upload('gambar')) {
						$path    = 'uploads/testimoni/';
						$dataImg = $this->upload->data();

						$datadb	= array(
							'nama'       	 =>$this->input->post('nama'),
							'role'   		 =>$this->input->post('role'),
							'quote'      	 =>$this->input->post('quote'),
							'id_detail' 	 =>$this->input->post('id_detail'),
							'path_foto'  	 =>$path.$dataImg['file_name'],
							'updated_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('judul'))),
						);

						$this->m_feedback->update($parameter_code, $datadb);
						$this->session->set_flashdata('success-edit', true);
						redirect('admin/feedback');
					}
				} else {
					$datadb	= array(
						'nama'       =>$this->input->post('nama'),
						'role'   	 =>$this->input->post('role'),
						'quote'      =>$this->input->post('quote'),
						'id_detail'  =>$this->input->post('id_detail'),
						'updated_at' =>date('Y-m-d'),
						'slug'       =>strtolower(url_title($this->input->post('judul'))),
					);

					$this->m_feedback->update($parameter_code, $datadb);
					$this->session->set_flashdata('success-edit', true);
					redirect('admin/feedback');
				}
			}
		}

		$this->load->view('layout/backend', $data);
	}

	function delete($parameter_code)
	{
		$this->m_feedback->delete($parameter_code);
		redirect('admin/feedback');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */