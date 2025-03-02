<?php

class User_model extends CI_Model {
    public function get_users() {
        $query = $this->db->get('users'); // 'users' is the table name
        return $query->result();
    }
}
