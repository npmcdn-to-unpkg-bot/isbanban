<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

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
		$this->load->model('m_blog');
	}

	function index()
	{
		$this->load->library('pagination');
		$total_row 		= $this->m_blog->countAll();

		$config 				 = array();
		$config['display_pages'] = FALSE;
		$config["base_url"] 	 = base_url()."blog/page/";
		$config["total_rows"] 	 = $total_row;
		$config["per_page"]		 = 12;
		$config["first_link"]	 = FALSE;
		$config["last_link"]	 = FALSE;
		$config["prev_link"]	 = FALSE;
		$config["next_link"]	= '<p><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></p>';
		$config["next_tag_open"] = '<div class="sparator">';
		$config["next_tag_close"]= '</div>';

		$this->pagination->initialize($config);

		if($this->uri->segment(2)) {
			$pages = ($this->uri->segment(2));
		} else {
			$pages = 0;
		}

		$data	= [
			'title'			=> 'Blogs',
			'current'		=> 'blog',
			'role'			=> 'normal',
			'meta_image'	=> '',
			'page'			=> 'pages/blog/index',
			'meta_url'		=> base_url().'blog',
			'getAll'		=> $this->m_blog->getAll($pages, $config["per_page"]),
		];

		$this->load->view('layout/default', $data);

	}

	function page($number = FALSE) {
		$this->load->library('pagination');
		$total_row 		= $this->m_blog->countAll();

		if($number == FALSE) {
			redirect('blog');
		}

		$config 				= array();
		$config['display_pages']= FALSE;
		$config["base_url"] 	= base_url()."blog/page/";
		$config["total_rows"] 	= $total_row;
		$config["per_page"]		= 12;
		$config["first_link"]	= FALSE;
		$config["last_link"]	= FALSE;
		$config["prev_link"]	= FALSE;
		$config["next_link"]	= '<p><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></p>';
		$config["next_tag_open"]= '<div class="sparator">';
		$config["next_tag_close"]= '</div>';
		$this->pagination->initialize($config);

		if($this->uri->segment(3)) {
			$pages = ($this->uri->segment(3));
		} else {
			$pages = 0;
		}

		$data	= [
			'title'			=> 'Blog',
			'role'			=> 'normal',
			'page'			=> 'pages/blog/index',
			'getAll'		=> $this->m_blog->getAll($pages, $config["per_page"]),
		];

		$this->load->view('layout/default', $data);
	}


	function detail($slug = FALSE) {
		$data	= [
			'title'			=> 'Blogs',
			'current'		=> 'blog',
			'role'			=> 'normal',
			'page'			=> 'pages/blog/detail',
			'getThis'		=> $this->m_blog->getThis($slug),
			'getRandom'		=> $this->m_blog->getRandom(),
		];

		if($slug == FALSE) {
			redirect('blog');
		}

		if($this->m_blog->checkThis($slug) == 0) {
			redirect('404');
		}

		$feed = $this->m_blog->getThis($slug);

		foreach($feed as $row) {
			$data['meta_image']	= base_url().$row->path_foto;
			$data['meta_url']	= base_url()."blog/detail/".$row->slug;
			$data['title']		= ucfirst($row->judul);
		}

		$this->load->view('layout/default', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */