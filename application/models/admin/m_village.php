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

	function getThis($parameter_code)
	{
		return $this->db->get_where('desa', array('parameter_code' => $parameter_code))->result();
	}

	function getChapter()
	{
		return $this->db->get('relawan_chapter')->result();
	}

	function insert($datadb)
	{
		return $this->db->insert('desa', $datadb);
	}

	function update($data, $parameter_code)
	{
		return $this->db->where('parameter_code', $parameter_code)->update('desa', $data);
	}

	function delete($parameter_code)
	{
		return $this->db->delete('desa', array('parameter_code' => $parameter_code));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
