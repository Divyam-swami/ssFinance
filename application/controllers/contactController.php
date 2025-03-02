<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('ContactModel');
        header('Content-Type: application/json'); // Set response type to JSON
    }

    public function add_contact() {
        $data = array(
            'Firstname'   => $this->input->post('fname'),
            'Lastname'    => $this->input->post('lname'),
            'email'       => $this->input->post('email'),
            'phone'       => $this->input->post('phone'),
            'designation' => $this->input->post('designation'),
            'message'     => $this->input->post('message')
        );
    
        // Debugging: Check if values are being received
        file_put_contents('debug_log.txt', json_encode($data) . PHP_EOL, FILE_APPEND);
    
        if (in_array(null, $data, true) || in_array('', $data, true)) {
            echo json_encode(['status' => 'error', 'message' => 'All fields are required']);
            return;
        }
    
        $this->load->model('ContactModel');
        if ($this->ContactModel->insert_contact($data)) {
            echo json_encode(['status' => 'success', 'message' => 'Contact added successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to add contact']);
        }
    }
    
}
