<?php
class HomeModel extends CI_Model 
{	
	public function __construct()
	{
		parent::__construct();
	}

    public function login($u,$p)
		{
			$u=$this->input->post("userId");
            $p=$this->input->post("password");

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array ('ID' => $u));
			$query = $this->db->get();
			$queryResult = $query->result_array();
			foreach ($queryResult as $users){
				$userType = $users['Type'];
			}
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
								'Name' => $userName,
								'ID' => $userID,
								'Gender'=> $userGender,
								'Type' => $userType,
								'Email' => $userEmail
							);
							$this->session->set_userdata($userArray);						
							redirect("Users/dash");
							
						}
						elseif($userType === "Restaurant Owner"){
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
						}else if($userType === "Administrator"){
							foreach ($queryResult as $users){
								$userType  = $users['Type'];
								$userID= $users['ID'];
								$userName = $users['Name'];
								$userEmail = $users['Email'];
								$userGender = $users['Gender'];
							}
							
							$userArray = array(
								'Name' => $userName,
								'ID' => $userID,
								'Gender'=> $userGender,
								'Type' => $userType,
								'Email' => $userEmail
							);
							$this->session->set_userdata($userArray);						
							redirect("admin/overview");
							
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
    }
?>