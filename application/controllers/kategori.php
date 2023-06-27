<?php

class Kategori extends CI_Controller{

    public function laptop()
    {
        $data['laptop'] = $this->model_kategori->data_laptop()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('laptop',$data);
        $this->load->view('templates/footer');

    }  

    public function smartphone()
    {
        $data['smartphone'] = $this->model_kategori->data_smartphone()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('smartphone',$data);
        $this->load->view('templates/footer');

    }  

    public function tablet()
    {
        $data['tablet'] = $this->model_kategori->data_tablet()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('tablet',$data);
        $this->load->view('templates/footer');

    }  

    public function kamera()
    {
        $data['kamera'] = $this->model_kategori->data_kamera()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kamera',$data);
        $this->load->view('templates/footer');

    }  

}