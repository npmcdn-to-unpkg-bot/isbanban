<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Partners extends CI_Controller {

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
		$this->load->model('admin/m_partners');
		
		if(!$this->session->userdata('logged_in')) {
			redirect('/auth');
		}
	}

	function index()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'partners',
			'icon'			=> 'fa-male',
			'pagetitle'		=> 'Partners',
			'page'			=> 'pages/admin/partners/index',
			'getAll'		=> $this->m_partners->getAll(),
		];

		$this->load->view('layout/backend', $data);
	}

	function add()
	{
		$data	= [
			'title'			=> 'Istana Belajar Anak Banten',
			'role'			=> 'partners',
			'icon'			=> 'fa-male',
			'pagetitle'		=> 'Add Partners',
			'page'			=> 'pages/admin/partners/add',
			'getCategory'	=> $this->m_partners->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'partner_name',
				'label'	=> 'Name',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'partner_category',
				'label'	=> 'Category',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'partner_url',
				'label'	=> 'Url',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/partners';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {

			if($this->form_validation->run()) {
				if($this->upload->do_upload('gambar')) {
					$path    = 'uploads/partners/';
					$dataImg = $this->upload->data();

					$datadb	= array(
						'name'           =>$this->input->post('partner_name'),
						'category_id'    =>$this->input->post('partner_category'),
						'link'           =>$this->input->post('partner_url'),
						'thumbnail'      =>$path.$dataImg['file_name'],
						'created_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('partner_name'))),
						'parameter_code' =>md5($this->input->post('partner_name').date('d-m-Y')),
					);

					$this->m_partners->insert($datadb);
					$this->session->set_flashdata('success', true);
					redirect('admin/partners');

				} else {

					if(!$this->upload->display_errors()) {
						$datadb	= array(
							'name'           =>$this->input->post('partner_name'),
							'category_id'    =>$this->input->post('partner_category'),
							'link'           =>$this->input->post('partner_url'),
							'created_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('partner_name'))),
							'parameter_code' =>md5($this->input->post('partner_name').date('d-m-Y')),

						);

						$this->m_partners->insert($datadb);
						$this->session->set_flashdata('success', true);
						redirect('admin/partners');

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
			'role'			=> 'partners',
			'icon'			=> 'fa-male',
			'pagetitle'		=> 'Edit Partners',
			'page'			=> 'pages/admin/partners/edit',
			'getThis'		=> $this->m_partners->getThis($parameter_code),
			'getCategory'	=> $this->m_partners->getCategory(),
		];

		// Form Validation Settings
		$config = array(
			array(
				'field'	=> 'partner_name',
				'label'	=> 'Name',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'partner_category',
				'label'	=> 'Category',
				'rules'	=> 'required'
			),

			array(
				'field'	=> 'partner_url',
				'label'	=> 'Url',
				'rules'	=> 'required'
			),
		);
		$this->form_validation->set_rules($config);

		// File Uploads Settings
		$config['upload_path']   = './uploads/partners';
		$config['encrypt_name']  = true;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if($this->input->post()) {
			if($this->form_validation->run()) {
				if($_FILES['gambar']['name']) {
					if($this->upload->do_upload('gambar')) {
						$path    = 'uploads/partners/';
						$dataImg = $this->upload->data();

						$datadb	= array(
							'name'           =>$this->input->post('partner_name'),
							'category_id'    =>$this->input->post('partner_category'),
							'link'           =>$this->input->post('partner_url'),
							'thumbnail'      =>$path.$dataImg['file_name'],
							'updated_at'     =>date('Y-m-d'),
							'slug'           =>strtolower(url_title($this->input->post('partner_name'))),
							'parameter_code' =>md5($this->input->post('partner_name').date('d-m-Y')),
						);

						$this->m_partners->update($parameter_code, $datadb);
						$this->session->set_flashdata('success-edit', true);
						redirect('admin/partners');
					}
				} else {
					$datadb	= array(
						'name'           =>$this->input->post('partner_name'),
						'category_id'    =>$this->input->post('partner_category'),
						'link'           =>$this->input->post('partner_url'),
						'updated_at'     =>date('Y-m-d'),
						'slug'           =>strtolower(url_title($this->input->post('partner_name'))),
						'parameter_code' =>md5($this->input->post('partner_name').date('d-m-Y')),
					);


					$this->m_partners->update($parameter_code, $datadb);
					$this->session->set_flashdata('success-edit', true);
					redirect('admin/partners');
				}
			}
		}

		$this->load->view('layout/backend', $data);
	}

	function delete($parameter_code)
	{
		$this->m_partners->delete($parameter_code);
		redirect('admin/partners');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */