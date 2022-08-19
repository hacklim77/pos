<?php

    class Kategori extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('M_barang');   
        }

        public function index()
        {
            $data['title'] = 'Administrator || Kategori';
            $data['subhead'] = 'Kategori Barang';
            
            $data['kategori'] = $this->M_barang->getAllktgbrg();
            /* $data['getktg'] = $this->M_barang->getktgbrgid($id)->row_array() */

            $this->admin_temp->load('admin/template','admin/kategori/index',$data);
        }

        public function tambah()
        {
            $this->form_validation->set_rules('kategori_barang','Kategori Barang','required');
            $this->form_validation->set_rules('kode_barang','Kode Barang','required');

            if ($this->form_validation->run('submit') == FALSE) {
                $data['title'] = 'Administrator || Kategori';
                $data['subhead'] = 'Kategori Barang';
                $this->admin_temp->load('admin/template','admin/kategori/index',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Gagal ditambahkan.
                </div>');      
            } else{
                $this->M_barang->insertktg();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Berhasil ditambahkan.
                </div>');
                redirect('admin/kategori');           
            }
            
        }

        public function edit()
        {
            $this->form_validation->set_rules('kategori_barang','Kategori Barang','required');
            $this->form_validation->set_rules('kode_barang','Kode Barang','required');
            
            if ($this->form_validation->run('submit') == FALSE) {
                
                $data['title'] = 'Administrator || Kategori';
                $data['subhead'] = 'Kategori Barang';

                $this->admin_temp->load('admin/template','admin/kategori/index',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Gagal diupdate.
                </div>');
            } 
            else{
                $this->M_barang->updatektg();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Berhasil diupdate.
                </div>');
                redirect('admin/kategori');           
            }
        }

    }