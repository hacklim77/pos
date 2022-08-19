<?php

    class M_bank extends CI_Model{

        public function getAllbank()
        {
            return $this->db->get('bank')->result_array();
        }

        public function insertbank()
        {
            $data = [
                "nama_bank" => $this->input->post('nama_bank'),
                "norek" => $this->input->post('norek'),
                "nama" => $this->input->post('nama')
            ];

            $this->db->insert('bank',$data);
        }

        public function updatebank()
        {
            $data = [
                "nama_bank" => $this->input->post('nama_bank'),
                "norek" => $this->input->post('norek'),
                "nama" => $this->input->post('nama')
            ];

            $this->db->where('id_bank',$this->input->post('id_bank'));
            $this->db->update('bank',$data);
        }
    }