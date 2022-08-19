<?php

    class Dashboard extends CI_Controller{

        public function index()
        {
            $data['title'] = 'Administrator || Dashboard';
            $data['subhead'] = 'Dashboard';
            $this->admin_temp->load('admin/template','admin/dashboard/index',$data);
        }


    }