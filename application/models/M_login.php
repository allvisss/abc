<?php

class M_login extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $pass) {     
        $this->db->from('login');
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $this->db->limit(1);
        $result = $this->db->get()->row();
        return $result;
    }

    public function getdashboarddata($id) {
        $this->db->from('nhanvien');
        $this->db->where('MaNV',$id);
        $this->db->limit(1);
        return $this->db->get()->row();
    }
}
