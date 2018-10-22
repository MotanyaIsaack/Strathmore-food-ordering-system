<?
    class Upload extends CI_Controller{
        public function __construt(){
            parent:: __construct();
        }
        public function uploadView(){
            $this->load->view("restaurant/restaurant-settings", array('error' => ' ' ));
            
        }
        public function do_upload(){
            $config = array(
                'upload_path' => "./uploads",
                'allowed_types' => "gif|jpg|png|jpeg|pdf",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                // 'max_height' => "768",
                // 'max_width' => "1024"
            );
            $this->load->library('upload', $config);
            if($this->upload->do_upload())
            {
                $data = array('upload_data' => $this->upload->data());
                $this->load->view('restaurant/upload_success',$data);
            }
            // else
            // {
            //     $error = array('error' => $this->upload->display_errors());
            //     $this->load->view('restaurant/restaurant-settings', $error);
            // }
        }
    }
    
?>