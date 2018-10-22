<?php
    class Admin_model extends CI_Model{
        //Load the database
        public function __construct(){
            $this->load->database();
        }

        public function register($Enc_Password,$Status){
            
            $data = array(
                'ID' => $this->input->post('ID'),
                'Name' => $this->input->post('Firstname').' '.$this->input->post('Lastname'),
                'Email' => $this->input->post('Email'),
                'Gender' => $this->input->post('Gender'),
                'Password' => $Enc_Password,
                'Type' => $this->input->post('Type'),
                'Status'=> $Status
            );
            $insert = $this->db->insert('users',$data);
            return $insert;
        }
        public function count_restaurants(){
            $Type = "Restaurant Owner";
            $this->db->from('users');
            $this->db->where(array('Type'=>$Type));
            return $this->db->count_all_results();
        }
        public function count_students(){
            $Type = "Student";
            $this->db->from('users');
            $this->db->where(array('Type'=>$Type));
            return $this->db->count_all_results();
        }
    }

?>