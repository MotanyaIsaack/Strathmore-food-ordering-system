<?php
    class RestaurantModel extends CI_Model{
        public function getRestaurantDetails(){
            $this->db->select("*");
            $this->db->from("restaurants");
            $this->db->where("OwnerID",$this->session->userdata('id'));
            $query  = $this->db->get();
            return $query->result();
        }
        
        public function addMenu($food, $price){
            $rID= $this->session->userdata('rID');
            $query =  "INSERT INTO menu VALUES ('','$food','$rID','$price')";
            $this->db->query($query);
            
        }
        public function getMenu(){
            $rID = $this->session->userdata('rID');
            $this->db->select("*");
            $this->db->from("menu");
            $this->db->where("RestaurantID", $rID);
            $query = $this->db->get();
            return $query->result();
        }
        public function updateShopName($newName){
            // $data = array(
            //     'Name' => $newName
            // );
            $rID = $this->session->userdata('rID');
            //$this->db->set('Name',$newname);
            $this->db->where('RestaurantID', $rID);
            $this->db->update('restaurants',$newName);
        }
        
    }
?>