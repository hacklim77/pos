<?php

    class M_ekspedisi extends CI_Model{

        public function getallEksp()
        {
            return $this->db->get('kurir')->result_array();
        }

        public function inputEks()
        {
            $data = ["agen" => $this->input->post('agen')];

            $this->db->insert('kurir',$data);
        }

        public function updateEks()
        {
            $data = ["agen" => $this->input->post('agen')];

            $this->db->where('id_kurir',$this->input->post('id_kurir'));
            $this->db->update('kurir',$data);
        }

    }