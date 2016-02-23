<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_recruitment extends CI_Model {

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
	function getChapter()
	{
		return $this->db->get('relawan_chapter')->result();
	}

	function insert($datadb) {
		$this->db->insert('relawan', $datadb);
	}

	function referensi($datareferensi) {
		$this->db->insert('relawan_referensi', $datareferensi);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
