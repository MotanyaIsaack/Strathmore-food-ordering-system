<?php
    class Restaurant extends CI_Controller{
        public function view(){
            $this->load->view('restaurant/header');
            $this->load->view('restaurant/restaurant-owner');
            $this->load->view('restaurant/footer');
        }
    }
?>