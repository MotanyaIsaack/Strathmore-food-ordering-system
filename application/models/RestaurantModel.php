<?php
    class RestaurantModel extends CI_Model{
        public function getRestaurantDetails(){
            $this->db->select("*");
            $this->db->from("restaurants");
            $this->db->where("RestaurantID",'3');
            $query  = $this->db->get();
            return $query->result();
        }
        
    }
?>