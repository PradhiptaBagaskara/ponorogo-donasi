<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlLogin extends CI_Model 
{
    public function authAdmin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('data_admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $query = $this->db->query("SELECT * FROM data_admin WHERE username = '$username' AND password = '$password'");
        $query = $this->db->get();
        return $query;
    }
}

?>