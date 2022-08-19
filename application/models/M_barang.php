<?php

    class M_barang extends CI_Model{

        public function getAllBarang()
        {
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->join('kategori_brg','kategori_brg.id_kategori = barang.brg_id_kategori');      
            $query = $this->db->get()->result();
            return $query;
        }

        public function getAllktgbrg()
        {
            return $this->db->get('kategori_brg')->result_array();
        }
        
        public function getktgbrgid($id)
        {
            //$this->db->where('id_kategori',$id)
            $this->db->get_where('kategori_brg',['id_kategori' => $id]);
        }

        public function insertktg()
        {
            $data = [
                "kode_barang" => $this->input->post('kode_barang'),
                "kategori_barang" => $this->input->post('kategori_barang')
            ];

            $this->db->insert('kategori_brg',$data);
        }

        public function updatektg()
        {
            $data = [
                "kode_barang" => $this->input->post('kode_barang'),
                "kategori_barang" => $this->input->post('kategori_barang')
            ];

            $this->db->where('id_kategori',$this->input->post('id_kategori'));
            $this->db->update('kategori_brg',$data);
        }

        public function insertbrg()
        {
            $data = [
                "nama_barang" => $this->input->post('nama_barang'),
                "ket_barang" => $this->input->post('ket_barang'),
                "stok" => $this->input->post('stok'),
                "hrg_jual" => $this->input->post('hrg_jual'),
                "hrg_beli" => $this->input->post('hrg_beli'),
                "hrg_normal" => $this->input->post('hrg_normal'),
                "hrg_reseller" => $this->input->post('hrg_reseller'),
                "hrg_grosir" => $this->input->post('hrg_grosir'),
                "tanggal" => date('Y-M-d'),
                "brg_id_kategori" => $this->input->post('kategori_barang'),
                "status" => $this->input->post('status')
            ];

            $this->db->insert('barang',$data);
        }

    }