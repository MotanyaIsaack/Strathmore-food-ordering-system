<?php  
	/**
	 * 
	 */
	class User_model extends CI_Model
	{	
		public function get_users(){
			$sql = "SELECT * FROM users";
			$query = $this->db->query($sql);
			return $query->num_fields();
		}
		public function fetch_users($u){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array ('ID' => $u));
			$query = $this->db->get();
			$queryResult = $query->result_array();
			return $queryResult;
		}
	}


?>