<?php

class uploadcontroller extends CI_Controller {

    public function uploadcontroller() {
        
        parent::__construct();
    }
    

    public function uploadfile(){
        
        $this->load->view('uploadView.php');
    }
    
    public function uploadAction(){
        
        $this->load->model('upload_model');
        $this->upload_model->do_upload();
        redirect('uploadcontroller/uploadfile');
    }

}

?>
