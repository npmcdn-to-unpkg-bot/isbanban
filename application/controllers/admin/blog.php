<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog extends CI_Controller {

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
		$this->load->model('admin/m_blog');
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'blog',
			'getAll'		=> $this->m_blog->getAll(),
		];

		$this->load->view('admin/header', $data);
		$this->load->view('admin/blog/index');
		$this->load->view('admin/footer');
	}

	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'blog',
			'getCategory'	=> $this->m_blog->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'judul',
				'label'	=> 'Judul',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'kategori',
				'label'	=> 'Kategori',
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
		$config['upload_path']   = './uploads/blog';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {

			if($this->form_validation->run()) {
				if($this->upload->do_upload('gambar')) {
					$path    = 'uploads/blog/';
					$dataImg = $this->upload->data();

					$datadb	= array(
						'judul'      =>$this->input->post('judul'),
						'kategori'   =>$this->input->post('kategori'),
						'konten'     =>$this->input->post('konten'),
						'path_foto'  =>$path.$dataImg['file_name'],
						'created_at' =>date('Y-m-d'),
						'slug'       =>strtolower(url_title($this->input->post('judul'))),
						'parameter_code' =>md5($this->input->post('judul')),
					);


					$this->m_blog->insert($datadb);
					$this->session->set_flashdata('success', true);
					redirect('admin/blog');

				} else {

					if(!$this->upload->display_errors()) {
						$datadb	= array(
							'judul'      =>$this->input->post('judul'),
							'kategori'   =>$this->input->post('kategori'),
							'konten'     =>$this->input->post('konten'),
							'created_at' =>date('Y-m-d'),
							'slug'       =>strtolower(url_title($this->input->post('judul'))),
							'parameter_code' =>md5($this->input->post('judul')),
						);

						$this->m_blog->insert($datadb);
						$this->session->set_flashdata('success', true);
						redirect('admin/blog');

					}
				}
			}
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/blog/add');
		$this->load->view('admin/footer');
	}

	function edit($parameter_code)
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'blog',
			'getThis'		=> $this->m_blog->getThis($parameter_code),
			'getCategory'	=> $this->m_blog->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'judul',
				'label'	=> 'Judul',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'kategori',
				'label'	=> 'Kategori',
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
		$config['upload_path']   = './uploads/blog';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {
			if($this->form_validation->run()) {
				if($_FILES['gambar']['name']) {
					if($this->upload->do_upload('gambar')) {
						$path    = 'uploads/blog/';
						$dataImg = $this->upload->data();

						$datadb	= array(
							'judul'          =>$this->input->post('judul'),
							'kategori'       =>$this->input->post('kategori'),
							'konten'         =>$this->input->post('konten'),
							'path_foto'      =>$path.$dataImg['file_name'],
							'updated_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('judul'))),
						);

						$this->m_blog->update($parameter_code, $datadb);
						$this->session->set_flashdata('success-edit', true);
						redirect('admin/blog');
					}
				} else {
					$datadb	= array(
						'judul'      =>$this->input->post('judul'),
						'kategori'   =>$this->input->post('kategori'),
						'konten'     =>$this->input->post('konten'),
						'updated_at' =>date('Y-m-d'),
						'slug'       =>strtolower(url_title($this->input->post('judul'))),
					);

					$this->m_blog->update($parameter_code, $datadb);
					$this->session->set_flashdata('success-edit', true);
					redirect('admin/blog');
				}
			}
		}

		$this->load->view('admin/header', $data);
		$this->load->view('admin/blog/edit');
		$this->load->view('admin/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */