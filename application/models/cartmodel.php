<?php
class cartmodel extends CI_Model 
{	
	public function __construct()
	{
		parent::__construct();
	}

	function findAll()
	{
		return $this->db->get ('menu')->result();
		// $results = "SELECT ItemID,Name,Price,Quantity from menu";
		// return $results;
	}

	function find($id)
	{
		$this->db->where('ItemID', $id);
		return $this->db->get ('menu')->row();

	}

	// function insert($data)
	// {
	// 	$this->load->model('cartmodel');
	// 	$product = $this->cartmodel->find($id);

	// 		$data = array(
	// 			'id'   => $product->ItemID,
	// 			'qty'     => $product->Quantity,
	// 			'price'   => $product->Price,            THE FUNCTION I WAS USING TO INPUT TO DB
	// 			'name'    => $product->Name,
	// 			$cart = "",
	// 			$pay = "0",
	// 			$order = "0"
	// 		);
	// 	$query="insert into cart values('id','qty','price','name','$cart','$pay','$order')";
	// 	$this->db->query($query);
	// }
}
?>