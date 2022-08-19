<?php

    class Barang extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_barang');
            $this->load->library('form_validation','url');
        }

        public function index()
        {
            $data['title'] = 'Administrator || Barang';
            $data['subhead'] = 'Barang';
            
            
            $data['barang'] = $this->M_barang->getAllBarang();

            $this->admin_temp->load('admin/template','admin/barang/index',$data);
        }

        public function tambahBarang()
        {
            $this->form_validation->set_rules('nama_barang','Nama Barang','required');
           /*  $this->form_validation->set_rules('ket_barang','Nama Customer','required');
            $this->form_validation->set_rules('kategori_barang','Kategori','required');
            $this->form_validation->set_rules('hrg_jual','Harga Jual','required');
            $this->form_validation->set_rules('hrg_reseller','Harga Beli','required');
            $this->form_validation->set_rules('hrg_grosir','Harga Grosir','required');
            $this->form_validation->set_rules('hrg_beli','Harga Beli','required');
            $this->form_validation->set_rules('hrg_normal','Harga Normal','required'); */

            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Administrator || Barang';
                $data['subhead'] = 'Tambah Barang';
                
                $data['barang'] = $this->M_barang->getAllBarang();
                $data['kategori'] = $this->M_barang->getAllktgbrg();
                $data['status'] = ['Ready','Habis'];

                $this->admin_temp->load('admin/template','admin/barang/tambah',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Barang Gagal ditambahkan.
                </div>');
            }

            else{
                $this->M_barang->insertbrg();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Barang berhasil ditambahkan.
                </div>');
                redirect('admin/barang');
            }

        }


    }