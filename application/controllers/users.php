<?php  
	/**
	 * 
	 */
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
	}
	

?>