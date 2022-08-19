<?php

    class Ekspedisi extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('M_ekspedisi');   
        }
        
        public function index()
        {
            $data['title'] = 'Administrator || Ekspedisi';
            $data['subhead'] = 'Ekspedisi';
            
            $data['ekspedisi'] = $this->M_ekspedisi->getallEksp();

            $this->admin_temp->load('admin/template','admin/kurir/index',$data);
        }

        public function tambah()
        {
            $this->form_validation->set_rules('agen','Ekspedisi','required');

            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Administrator || Ekspedisi';
                $data['subhead'] = 'Ekspedisi';
                
                $data['ekspedisi'] = $this->M_ekspedisi->getallEksp();
    
                $this->admin_temp->load('admin/template','admin/kurir/index',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Ekspedisi Gagal ditambahkan.
                </div>');  
            }
            else {
                $this->M_ekspedisi->inputEks();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Ekspedisi berhasil ditambahkan.
                </div>');
                redirect('admin/ekspedisi');
            }
            
        }

        public function edit()
        {
            $this->form_validation->set_rules('agen','Ekspedisi','required');

            if ($this->form_validation->run() == FALSE) {
                
                $data['title'] = 'Administrator || Ekspedisi';
                $data['subhead'] = 'Ekspedisi';
                
                $data['ekspedisi'] = $this->M_ekspedisi->getallEksp();
    
                $this->admin_temp->load('admin/template','admin/kurir/index',$data);
                $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Ekspedisi Gagal diubah.
                </div>');  
            }
            else {
                $this->M_ekspedisi->updateEks();
                $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Ekspedisi berhasil diubah.
                </div>');
                redirect('admin/ekspedisi');
            }
            
        }

    }