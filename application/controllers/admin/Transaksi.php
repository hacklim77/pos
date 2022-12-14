<?php

    class Transaksi extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_transaksi');   
        }

        public function index()
        {
            $data['title'] = 'Administrator || Transaksi';
            $data['subhead'] = 'Transaksi';
            
            $data['transaksi'] = $this->M_transaksi->jtrans()->result();

            $this->admin_temp->load('admin/template','admin/transaksi/index',$data);
        }

        public function cetak()
        {
            $data['title'] = 'Administrator || Cetak';
            $data['subhead'] = 'Transaksi';
            
            //$data['customer'] = $this->M_barang->getAllBarang();

            $this->admin_temp->load('admin/template','admin/transaksi/cetak',$data);
        }

    }