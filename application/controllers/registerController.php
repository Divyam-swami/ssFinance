<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('RegisterModel');
        header('Content-Type: application/json'); // Set response type to JSON
    }

}