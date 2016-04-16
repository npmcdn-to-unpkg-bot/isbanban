<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_village extends CI_Model {

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
	
	function getAll()
	{
		return $this->db->get('desa')->result();
	}

	function getThis($slug)
	{
		return $this->db->where(array('slug'=>$slug))->get('desa')->result();
	}

	function checkThis($slug)
	{
		return $this->db->where(array('slug'=>$slug))->get('desa')->num_rows();
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
