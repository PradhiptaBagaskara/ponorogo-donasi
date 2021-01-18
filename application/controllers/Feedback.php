<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('MdlFeedback');
        $this->go_hell();

    }


    private function go_hell()
    {
              $header = $this->input->request_headers();
        if (array_key_exists("X-Requested-With", $header)) {
            if ($header['X-Requested-With'] != "com.inatama.ponorogoaksi") {
                redirect(base_url('/admin'));
            }
        }else{
            redirect(base_url('/admin'));

        }
    }

    public function register(){

        $this->load->view('feedback');
    }

    public function tambah(){

        $nama_feedback= $this->input->post('nama_feedback');
        $no_telp_feedback = $this->input->post('no_telp_feedback');
        $pesan_feedback = $this->input->post('pesan_feedback');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');
        
        $dataInsert = array(

            'id_feedback' => '',
            'nama_feedback' => $nama_feedback,
            'no_telp_feedback' => $no_telp_feedback,
            'pesan_feedback' => $pesan_feedback,
            'tgl_feedback' => $dateNow,
        );

        $this->MdlFeedback->insert('data_feedback', $dataInsert);
        $this->session->set_flashdata('message_success', 'terimah kasih masukan anda sudah terkirim');
        return redirect($this->agent->referrer());
    }

}


?>