<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_partners extends CI_Model {

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
		$sql = "
			SELECT 
				partners.*, 
				partners_category.name as category_name
			FROM partners
			LEFT JOIN partners_category
			ON partners.category_id=partners_category.id
		";
		return $this->db->query($sql)->result();
		// return $this->db->get('partners')->result();
	}

	function insert($data)
	{
		return $this->db->insert('partners', $data);
	}

	function getThis($parameter_code)
	{
		return $this->db->get_where('partners', array('parameter_code' => $parameter_code))->result();
	}

	function getCategory()
	{
		return $this->db->get('partners_category')->result();
	}

	function update($parameter_code, $data)
	{
		return $this->db->where('parameter_code', $parameter_code)->update('partners', $data);
	}

	function delete($parameter_code)
	{
		$this->db->delete('partners', array('parameter_code'=>$parameter_code));
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
