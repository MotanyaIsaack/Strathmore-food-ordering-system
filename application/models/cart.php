<?php
class cart extends CI_Model 
{
	function insert($data)
	{
        $data = array (
                // $u=$this->input->post(''),
				$i=$this->input->post('ItemID'),
				$n=$this->input->post('Name'),
				$p=$this->input->post('Price')
			);

        $query="Insert into cart values('$i','$n','$p')";
	    $this->db->query($query);

        echo "Added!";
    }
}
?>