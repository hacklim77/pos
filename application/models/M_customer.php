<?php

    class M_customer extends CI_Model{

        public function getAllcust()
        {
            return $this->db->get('customer')->result();
        }
        
        public function getCustid($id)
        {
            return $this->db->get_where('customer', array('id_customer' => $id))->result_array();
        }

        public function inputcust()
        {
            $data = [
                "nama_customer" => $this->input->post(htmlspecialchars("nama_customer",true)),
                "level_cust" => $this->input->post(htmlspecialchars("level_cust",true)),
                "email" => $this->input->post(htmlspecialchars("email",true)),
                "telp" => $this->input->post(htmlspecialchars("telp",true)),
                "kota" => $this->input->post(htmlspecialchars("kota",true)),
                "kode_pos" => $this->input->post(htmlspecialchars("kode_pos",true)),
                "alamat" => $this->input->post(htmlspecialchars("alamat",true)),
            ];

            $this->db->insert('customer',$data);
        }
        
        public function updatecust()
        {
            $data = [
                "nama_customer" => $this->input->post(htmlspecialchars("nama_customer",true)),
                "level_cust" => $this->input->post(htmlspecialchars("level_cust",true)),
                "email" => $this->input->post(htmlspecialchars("email",true)),
                "telp" => $this->input->post(htmlspecialchars("telp",true)),
                "kota" => $this->input->post(htmlspecialchars("kota",true)),
                "kode_pos" => $this->input->post(htmlspecialchars("kode_pos",true)),
                "alamat" => $this->input->post(htmlspecialchars("alamat",true)),
            ];

            $this->db->where('id_customer', $this->input->post('id_customer'));
            $this->db->update('customer', $data);
        }
    }