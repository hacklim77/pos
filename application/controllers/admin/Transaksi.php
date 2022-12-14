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

        public function tambah()
        {
            $this->form_validation->set_rules('level_cust','Level Customer','required');
            $this->form_validation->set_rules('nama_customer','Nama Customer','required');
            $this->form_validation->set_rules('email','Email Customer','required');
            $this->form_validation->set_rules('kota','Kota','required');
            $this->form_validation->set_rules('kode_pos','Kode Pos','required');
            $this->form_validation->set_rules('telp','Telepon','required');
            $this->form_validation->set_rules('alamat','Alamat','required');

            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Administrator || Customer';
                $data['subhead'] = 'Tambah Customer';
                $data['level'] = ['Dropshiper','Reseller','Pribadi'];
                
                $this->admin_temp->load('admin/template','admin/customer/tambah',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Customer Gagal ditambahkan.
                </div>');
            } 
            else{

                $this->M_customer->inputcust();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Customer berhasil ditambahkan.
                </div>');
                redirect('admin/customer');
            }
        }

        public function cetak()
        {
            $data['title'] = 'Administrator || Cetak';
            $data['subhead'] = 'Transaksi';
            
            //$data['customer'] = $this->M_barang->getAllBarang();

            $this->admin_temp->load('admin/template','admin/transaksi/cetak',$data);
        }

    }