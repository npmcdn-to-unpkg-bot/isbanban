<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_event extends CI_Model {

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
		return $this->db->get('event')->result();
	}

	function insert($data)
	{
		return $this->db->insert('event', $data);
	}

	function getThis($parameter_code)
	{
		return $this->db->get_where('event', array('parameter_code' => $parameter_code))->result();
	}

	function update($parameter_code, $data)
	{
		return $this->db->where('parameter_code', $parameter_code)->update('event', $data);
	}

	function delete($parameter_code)
	{
		$this->db->delete('event', array('parameter_code'=>$parameter_code));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
