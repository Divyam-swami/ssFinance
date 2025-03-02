<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_contact($data) {
        return $this->db->insert('contacts', $data); // 'contact' is your table name
    }
}
