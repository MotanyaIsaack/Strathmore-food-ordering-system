<?php

    class Restaurant extends CI_Controller
    {   
        public function __construct(){
            parent:: __construct();
            $this->load->database();
            $this->load->model('RestaurantModel');
            $this->load->library('upload');
        }
        public function view()
        {
            $this->result['data']= $this->RestaurantModel->getRestaurantDetails();
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-owner',$this->result);
            $this->load->view('restaurant/footer');
        }
        
        public function viewMenu()
        {
            $this->result['data']= $this->RestaurantModel->getRestaurantDetails();
            $this->result['items'] = $this->RestaurantModel->getMenu();
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-menu',$this->result);
            $this->load->view('restaurant/footer');
        }
        public function viewOrder(){
            $this->result['data']= $this->RestaurantModel->getRestaurantDetails();
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-orders',$this->result);
            $this->load->view('restaurant/footer');
        }
        public function viewPayments(){
            $this->result['data']= $this->RestaurantModel->getRestaurantDetails();
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-payments',$this->result);
            $this->load->view('restaurant/footer');
        }
        public function viewSettings(){
            $this->result['data']= $this->RestaurantModel->getRestaurantDetails();
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-settings',$this->result);
            $this->load->view('restaurant/footer');
           
        }
        public function logout()
		{
			$this->load->view('user/exit');
			$this->session->sess_destroy();
		}
        public function createMenu(){
            $fName = $this->input->post('foodName');
            $fPrice = $this->input->post('foodPrice');
            $this->RestaurantModel->addMenu($fName, $fPrice);
            redirect("Restaurant/viewMenu");
        }
        public function changeShopName(){
            $new = array(
                'Name'=> $this->input->post('shopName')
            );
            $this->RestaurantModel->updateShopName($new);
           // $this->session->set_userdata('rName',$shopName);
           redirect("Restaurant/viewSettings");
        }
    }
?>