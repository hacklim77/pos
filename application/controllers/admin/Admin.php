<?php

    class Admin extends CI_Controller{

        public function __construct()
        {
            parent::__construct();   
        }
        
        public function index()
        {
            $data['title'] = 'Administrator || Admin';
            $data['subhead'] = 'Admin';
            
            //$data['ekspedisi'] = $this->M_ekspedisi->getallEksp();

            $this->admin_temp->load('admin/template','admin/admin/index',$data);
        }
        
        public function toko()
        {
            $data['title'] = 'Administrator || Toko';
            $data['subhead'] = 'Toko';
            
            //$data['ekspedisi'] = $this->M_ekspedisi->getallEksp();

            $this->admin_temp->load('admin/template','admin/profil/index',$data);
        }

    }