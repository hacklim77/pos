<?php

    class Laporan extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            //$this->load->model('M_barang');   
        }

        public function index()
        {
            $data['title'] = 'Administrator || Laporan';
            $data['subhead'] = 'Laporan';
            
            //$data['customer'] = $this->M_barang->getAllBarang();

            $this->admin_temp->load('admin/template','admin/laporan/index',$data);
        }

    }