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
			$this->load->view('user/student-dash');
		}
	
		public function tonis()
		{
			$this->load->view('user/tonis');
		}

		public function lolanes()
		{
			$this->load->view('user/lolanes');
		}

		public function shawarma()
		{
			$this->load->view('user/shawarma');
		}

		public function cart()
		{
			$this->load->view('user/cart');
		}

		public function checkout()
		{
			$this->load->view('user/checkout');
		}

		public function rest()
		{
			$this->load->model('cartmodel');
			$data['result'] = $this->cartmodel->findAll();
			$this->load->view('user/restaurant-menu', $data);
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

		public function login()
		{
			$this->load->model('HomeModel');
			
				$u=$this->input->post("userId");
				$p=$this->input->post("password");

			$this->HomeModel->login($u, $p);
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