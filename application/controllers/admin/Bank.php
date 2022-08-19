<?php

    class Bank extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('M_bank');
            $this->load->library('form_validation');
        }
        
        public function index()
        {
            $data['title'] = 'Administrator || Bank';
            $data['subhead'] = 'Bank';
            $data['bank'] = $this->M_bank->getAllbank();

            $this->admin_temp->load('admin/template','admin/bank/index',$data);
        }

        public function tambah()
        {
            $this->form_validation->set_rules('nama_bank','Nama Bank','required');
            $this->form_validation->set_rules('norek','Nomor Rekening','required');
            $this->form_validation->set_rules('nama','Atas Nama','required');

            if ($this->form_validation->run() == FALSE) {
                
            $data['title'] = 'Administrator || Bank';
            $data['subhead'] = 'Bank';
            $data['bank'] = $this->M_bank->getAllbank();

            $this->admin_temp->load('admin/template','admin/bank/index',$data);
            
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Bank Gagal ditambahkan.
                </div>');  

            }
            else{

            $this->M_bank->insertbank();
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Bank berhasil ditambahkan.
                </div>');
            redirect('admin/bank');    
            }
        }

        public function edit()
        {
            $this->form_validation->set_rules('nama_bank','Nama Bank','required');
            $this->form_validation->set_rules('norek','Nomor Rekening','required');
            $this->form_validation->set_rules('nama','Atas Nama','required');

            if ($this->form_validation->run() == FALSE) {
                
            $data['title'] = 'Administrator || Bank';
            $data['subhead'] = 'Bank';
            $data['bank'] = $this->M_bank->getAllbank();

            $this->admin_temp->load('admin/template','admin/bank/index',$data);
            
            $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-ban"></i> Gagal!</h5>
                Data Bank Gagal diubah.
                </div>');  

            }
            else{

            $this->M_bank->updatebank();
            $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Sukses!</h5>
                Data Bank berhasil diubah.
                </div>');
            redirect('admin/bank');    
            }
        }

    }