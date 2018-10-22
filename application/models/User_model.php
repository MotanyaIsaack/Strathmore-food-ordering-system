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
	}


?>