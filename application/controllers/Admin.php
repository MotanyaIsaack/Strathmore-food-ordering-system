<?php
    class Admin extends CI_Controller{
        public function overview(){
            $this->load->view('admin/header');
            $this->load->view('admin/top-header');
            $this->load->view('admin/sidenav');
			$this->load->view('admin/overview');
			$this->load->view('admin/footer');
        }
    }


?>