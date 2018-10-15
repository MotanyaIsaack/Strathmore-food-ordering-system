<?php
    class Admin extends CI_Controller{
        public function overview(){
            $this->load->view('admin/header');
            $this->load->view('admin/top-header');
            $this->load->view('admin/sidenav');
			$this->load->view('admin/overview');
			$this->load->view('admin/footer');
        }
        public function restaurant(){
            // $this->load->view('admin/header');
            // $this->load->view('admin/top-header');
            // $this->load->view('admin/sidenav');
			// $this->load->view('admin/restaurant');
            // $this->load->view('admin/footer');
            
        /*
            Setting Validation Rules            
        */
        $this->form_validation->set_rules('Firstname','First Name','trim|required');
        $this->form_validation->set_rules('Lastname','Last Name','trim|required');
        $this->form_validation->set_rules('Email','Email'
        ,'trim|required|valid_email|is_unique[users.Email]',array(
            'is_unique' => 'This %s already exists'
        ));
        $this->form_validation->set_rules('Gender','Gender','trim|required'
        );
        $this->form_validation->set_rules('Password','Password','trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/header');
            $this->load->view('admin/top-header');
            $this->load->view('admin/sidenav');
			$this->load->view('admin/restaurant');
            $this->load->view('admin/footer');
        } else {
            # code...
            $password = $this->input->post("Password");
            $enc_password = password_hash($password,PASSWORD_DEFAULT);
            $type = "Restaurant Owner";
            $status = 1;

           $data = array(
                'Name' => $this->input->post('Firstname').' '.$this->input->post('Lastname'),
                'Email' => $this->input->post('Email'),
                'Gender' => $this->input->post('Gender'),
                'Password' => $password,
                'Type' => $type,
                'Status' => $status
            );

            $body = '
                <p>Dear '.$data['Name'].',</p>
                <p>You have been registered to the Strathmore Food Ordering System as a/an '.$data['Type'].'.</p>
                <p>These are your credentials: <br>
                <strong>Password: </strong>'.$data['Password'].'</p>
                <a href="'.base_url().'">Click here to login</a> 
                
                ';
                $settings = array(
                    'to' => $this->input->post('Email'),
                    'subject' => 'ACCOUNT REGISTRATION',
                    'body' => $body
                );
                $sent = send_email($settings);
                if($sent){
                    $this->admin_model->register($enc_password,$type,$status);


                    //Set session message
                    $this->session->set_flashdata('user_registered','New user has been registered');
                }else{
                    //Set session message
                    $this->session->set_flashdata('failed_register','Could not finish registration. Try again later');
                }
                redirect('admin/restaurant');
        }
        



        }
    }


?>