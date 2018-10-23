<?php  

	class Users extends CI_Controller
	{
		public function view(){

			$this->load->view('templates/header');
			$this->load->view('user/login');
			$this->load->view('templates/footer');
		}

		public function register(){
			$this->load->view('templates/header');
			$this->load->view('user/register');
			$this->load->view('templates/footer');
		}
	
		public function dash()
		{
			if($this->session->userdata('id')){
			$this->load->view('user/student-dash');
			}
			else{
				redirect('Users/view');
			}
		}
	
		public function tonis()
		{
			if($this->session->userdata('id')){
			$this->load->view('user/tonis');
			}
			else{
				redirect('Users/view');
			}
		}

		public function lolanes()
		{
			if($this->session->userdata('id')){
				$this->load->view('user/lolanes');
			}
			else{
				redirect('Users/view');
			}
		}

		public function shawarma()
		{
			if($this->session->userdata('id')){
			$this->load->view('user/shawarma');
			}
			else{
				redirect('Users/view');
			}
		}

		public function cart()
		{
			if($this->session->userdata('id')){
			$this->load->view('user/cart');
			}
			else{
				redirect('Users/view');
			}
		}

		public function checkout()
		{
			if($this->session->userdata('id')){
				$this->load->view('user/checkout');
			}
			else{
				redirect('Users/view');
			}
		}

		public function rest()
		{
			if($this->session->userdata('id')){
			$this->load->model('cartmodel');
			$data['result'] = $this->cartmodel->findAll();
			$this->load->view('user/restaurant-menu', $data);
			}
			else{
				redirect('Users/view');
			}
		}
		
		public function logout()
		{
			$this->load->view('user/exit');
			$this->session->sess_destroy();
			$this->cart->destroy();
		}
		
		public function __construct()
		{
			//call CodeIgniter's default Constructor
			parent::__construct();
	
			//load libraries manually
			$this->load->database();
			$this->load->library('session');
	
			//load Model
			$this->load->model('Insertdata');
			$this->load->model('user_model');
		}
		
		/*
		 * Function that deals with the registration of Students
		 */
		public function form_validation()
		{
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));


			$this->form_validation->set_rules('pass', 'Password', 'required|min_length[8]', array("required"=>"minimum length is 8 characters"));
			$this->form_validation->set_rules('cpass', 'Confirm Password', 'required|matches[pass]');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('ID', 'School ID number', 'required');

			if ($this->form_validation->run() == FALSE)
			{
				//$this->load->view('register');
				echo "error";
			}
				
			else
			{
				$this->load->model('Insertdata');
				$data = array (
					$i=$this->input->post('ID'),
					$n=$this->input->post('name'),
					$e=$this->input->post('email'),
					$g=$this->input->post('sex'),
					$uPass=$this->input->post('pass'),
					$t="Student",
					$s="1",
					$p=password_hash($uPass, PASSWORD_BCRYPT)
				);

				$this->Insertdata->saverecords($data);	

			}
		}
		/*
		 *	Function that grants users access levels depending on their user types
		 */
		public function login()
		{
			$this->load->model('HomeModel');
			
				$u=$this->input->post("userId");
				$p=$this->input->post("password");

			$user = $query ->row();
				if ($user)
				{
					if(password_verify($_POST['password'], $user->Password))
					{
						//echo "Successful Login";
						if($userType === "Student"){
							foreach ($queryResult as $users){
								$userType  = $users['Type'];
								$userID= $users['ID'];
								$userName = $users['Name'];
								$userEmail = $users['Email'];
								$userGender = $users['Gender'];
							}
							
							$userArray = array(
								'name' => $userName,
								'id' => $userID,
								'gender'=> $userGender,
								'type' => $userType,
								'email' => $userEmail
							);
							$this->session->set_userdata($userArray);						
							redirect("Users/dash");
							
						}
						else{
							$this->db->select("*");
							$this->db->from('restaurants');
							$this->db->where(array ('OwnerID' => $u));
							$restaurantQuery = $this->db->get();
							$rResult = $restaurantQuery->result_array();
							foreach($rResult as $rows){
								$rID = $rows['RestaurantID'];
								$rName = $rows['Name'];
								$rDescription = $rows['Description'];
								$rOID = $rows['OwnerID'];
								$rLocation = $rows['Location'];
								$rRating = $rows['rating'];
							}
							foreach ($queryResult as $users){
								$userType  = $users['Type'];
								$userID= $users['ID'];
								$userName = $users['Name'];
								$userEmail = $users['Email'];
								$userGender = $users['Gender'];
							}
							
							$userArray = array(
								'name' => $userName,
								'id' => $userID,
								'gender'=> $userGender,
								'type' => $userType,
								'email' => $userEmail,
								'rID' => $rID,
								'rName' => $rName,
								'rDescription' => $rDescription,
								'rOID' => $rOID,
								'rLocation' => $rLocation,
								'rRating' => $rRating
							);
							$this->session->set_userdata($userArray);
							redirect("Restaurant/view");
						}
					}
					else
					{
						echo "Invalid Password";
					}

				}
				else {
					echo "Sorry. No login";
				}
		}

		public function buy($id)
        {
			$this->load->model('cartmodel');
			$product = $this->cartmodel->find($id);
			$data = array(
				'id'   => $product->ItemID,
				'qty'     => $product->Quantity,
				'price'   => $product->Price,
				'name'    => $product->Name,
			);
			$this->cart->insert($data);
			$this->load->view('user/cart');

			// $this->cartmodel->insert($data);	   WAS TRYING TO USE THIS TO SEND TO DB
        }

		public function delete($rowid)
		{
			$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
			$this->load->view('user/cart');
		}

		public function update()
		{
			$i = 1;
			foreach ($this->cart->contents() as $items)
				{
					$this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty'.$i]));
					$i++;
				}
				$this->load->view('user/cart');
		}

	}
?>