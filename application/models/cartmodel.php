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

	function insert()
	{
		$this->load->model('cartmodel');
		// $this->cart->;
		foreach ($this->cart->contents() as $items): 
			$id = $items['id'];
			$Name = $items['name'];
			$Quantity = $items['qty'];
			$Price = $items['price'];

			$data = array(
				'ItemID' => $id,
				'Quantity' => $Quantity,
				'Price' => $Price,
				'Name' => $Name,
				'OrderStatus' =>0
			);
			print_r($data);
			$insert = $this->db->insert('cart',$data);
			return $insert;

		endforeach; 

		// $query="Insert into cart (ItemID,Quantity,Price,Name,CartID,PaymentStatus,OrderStatus) values('id','qty','price','name','$cart','$pay','$order')";
		// $this->db->query($query);
	}
}
?>