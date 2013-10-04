<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class upload_model extends CI_Model {
    
    function upload_model() {
        parent::__construct();
    }
            
    function do_upload() {
        $config['upload_path'] = './user_uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1024';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $config['encrypt_name'] = 'TRUE';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('file');
        $file_data = $this->upload->data();
        $image_data['new_name'] = $file_data['file_name'];

        //$this->db->where('user_id', $uid);
        //$this->db->update('users', array('profile_pic' => $image_data['new_name']));
    }

}

?>
