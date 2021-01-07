<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('MdlSettings');
        $this->model = $this->MdlSettings;

    }

    public function index(){

        $getDataSettings = $this->model->get()->result();
        $data['settings'] = $getDataSettings;

        $this->load->view('admin/settings/settings', $data);
    }

    public function update(){
        $data = $this->input->post();
        $insert = [];
        foreach ($data as $key => $value) {
            $id = explode('id_', $key);
            if (sizeof($id) > 1) {
                $update = ['value'=> $data['value_'.$id[1]], 'description'=>$data['an_'.$id[1]]];
                $this->model->updateSettings($id[1], $update);
                
            }
        }
        $this->session->set_flashdata('message', 'Setting telah diubah');
        return redirect(base_url('admin/settings'));



    }
}
?>