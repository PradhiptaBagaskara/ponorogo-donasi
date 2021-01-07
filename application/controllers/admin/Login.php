<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){

        parent::__construct();
        $this->load->model('admin/MdlLogin');
    }

    public function index(){

        if($this->session->has_userdata('hak_akses') == 'admin') {
			redirect(base_url('admin/'));
        }
        
        $this->load->view('admin/auth/login');
    }

    public function test(){

        $username = "admin";
        $password = "password";
        $pass = md5($password);

        $cek_admin = $this->MdlLogin->authAdmin($username, $pass);

        return var_dump($cek_admin);
      
    }
    public function auth(){

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $pass = md5($password);

        $cek_admin = $this->MdlLogin->authAdmin($username, $pass);

        if(sizeof($cek_admin->result_array()) == 1) {
            
            $sess_data = [];
            foreach($cek_admin->row() as $data => $key) {
                $sess_data[$data] = $key;
            }
            // return var_dump($sess_data);
            $this->session->set_userdata($sess_data);
            // return var_dump($this->session->userdata());

                if($this->session->userdata('hak_akses') == 'admin') {
                    return redirect(base_url('admin'));
                } else {
                    $this->session->set_flashdata('message', 'User not including admin');
                    return redirect($this->agent->referrer());
                }
            // }
        }
        else{
            // return var_dump($cek_admin);

            $this->session->set_flashdata('message', 'Akses ditolak');
            redirect($this->agent->referrer());
        }
    }

    public function logout(){
        if($this->session->userdata('hak_akses') == 'admin') {
            $this->session->sess_destroy();
        }

        redirect($this->agent->referrer());
    }
}

?>