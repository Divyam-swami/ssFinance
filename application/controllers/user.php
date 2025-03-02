<?php
class User extends CI_Controller {
    public function index() {
        $this->load->model('User_model');  
        $users = $this->User_model->get_users();  
        print_r($users); // Display fetched users
    }
}
