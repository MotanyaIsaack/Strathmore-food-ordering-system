<?php
    class Admin_model extends CI_Model
	{
         //Load database
         public function __construct(){
            $this->load->database();
        }

        //Register restaurant
        public function register($enc_password,$type,$status){
            $data = array(
                'ID' => $this->input->post('ID'),
                'Name' => $this->input->post('Firstname').' '.$this->input->post('Lastname'),
                'Email' => $this->input->post('Email'),
                'Gender' => $this->input->post('Gender'),
                'Password' => $enc_password,
                'Type' => $type,
                'Status' => $status
            );
            $user_insert = $this->db->insert('users',$data);
            return $user_insert;
        }
        public function getRestaurant(){
            
        }

    }
?>