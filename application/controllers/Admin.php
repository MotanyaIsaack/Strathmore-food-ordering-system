<?php
    class Admin extends CI_CONTROLLER{

        public function __construct(){
            parent::__construct();
            $this->load->model('admin_model');
        }
        public function overview(){
            $data['count_restaurants'] = $this->admin_model->count_restaurants();
            $data['count_students'] = $this->admin_model->count_students();

            $this->load->view('admin/templates/header');
            $this->load->view('admin/templates/top-header');
            $this->load->view('admin/templates/sidenav');
            $this->load->view('admin/overview',$data);
            $this->load->view('admin/templates/footer');
        }
        public function restaurants(){

            $this->form_validation->set_rules('ID','National ID','trim|required|is_unique[users.ID]',array(
                'is_unique' => 'This %s already exists'
            ));
            $this->form_validation->set_rules('Firstname','First Name','trim|required'
            );
            $this->form_validation->set_rules('Lastname','Last Name','trim|required'
            );
            $this->form_validation->set_rules('Email','Email','trim|required|is_unique[users.email]',array(
                'is_unique' => 'This %s already exists'
            ));
            
            $this->form_validation->set_rules('Gender','Gender','trim|required'
            );
            
            $this->form_validation->set_rules('Password','Password','trim|required'
            );
            $this->form_validation->set_rules('Type','Type','trim|required'
            );

            if($this->form_validation->run() === FALSE){
                $this->load->view('admin/templates/header');
                $this->load->view('admin/templates/top-header');
                $this->load->view('admin/templates/sidenav');
                $this->load->view('admin/restaurants');
                $this->load->view('admin/templates/footer');
            }else{
                //Encrypt Password
                $Password = $this->input->post('Password');
                $Enc_Password = password_hash($Password,PASSWORD_DEFAULT);
                $Status = 1;

                $data = array(
                    'ID' => $this->input->post('ID'),
                    'Name' => $this->input->post('Firstname').' '.$this->input->post('Lastname'),
                    'Email' => $this->input->post('Email'),
                    'Gender' => $this->input->post('Gender'),
                    'Password' => $Enc_Password,
                    'Type' => $this->input->post('Type'),
                    'Status'=> $Status
                );
                $body = '
                <p>Dear '.$data['Name'].',</p>
                <p>You have been registered to the Strathmore Food Ordering System as a/an '.$data['Type'].'.</p>
                <p>These are your credentials: <br>
                <strong>ID(National ID): </strong> '.$data['ID'].'<br>
                <strong>Password: </strong>'.$Password.'</p>
                <a href="'.base_url().'">Click here to login</a>
                ';
                $settings = array(
                    'to' => $this->input->post('Email'),
                    'subject' => 'ACCOUNT REGISTRATION',
                    'body' => $body
                );

                // Send email to user
                $sent = send_email($settings);
                if($sent){
                    $this->admin_model->register($Enc_Password,$Status);

                    //Set session message
                    $this->session->set_flashdata('user_registered','New user has been registered');
                }else{
                    //Set session message
                    $this->session->set_flashdata('failed_register','Could not finish registration. Try again later');
                }
                redirect('admin/restaurants');
            }
        }
    }

?>