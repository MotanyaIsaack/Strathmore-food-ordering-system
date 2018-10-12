<?php

    class Restaurant extends CI_Controller
    {
        public function view()
        {
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-owner');
            $this->load->view('restaurant/footer');
        }
        
        public function viewMenu()
        {
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-menu');
            $this->load->view('restaurant/footer');
        }
        public function viewOrder(){
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-orders');
            $this->load->view('restaurant/footer');
        }
        public function viewPayments(){
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-payments');
            $this->load->view('restaurant/footer');
        }
        public function viewSettings(){
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-settings');
            $this->load->view('restaurant/footer');
        }
    }
?>