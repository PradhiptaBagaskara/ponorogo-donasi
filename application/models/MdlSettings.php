<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlSettings extends CI_Model {

    public function __construct() {
        
        parent::__construct();
    }

    public function get()
    {
        $this->db->from("data_settings");

        return $this->db->get();

    }

    public function getBank()
    {
        $this->db->from("data_settings");

        $this->db->where('code', 'bank');
        return $this->db->get();
    }

    public function updateSettings($id,$array)
    {
        $db = $this->db->where('id', $id);
        $db->update("data_settings", $array);
    }
    public function getWA()
    {
        $this->db->from("data_settings");

        $this->db->where('code', 'wa');
        return $this->db->get()->row();
    }

    public function getAbout()
    {
        $this->db->from("data_settings");

        $this->db->where('code', 'about');
        return $this->db->get();
    }
    

}

?>