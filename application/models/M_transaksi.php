<?php

    class M_transaksi extends CI_Model{

        function jtrans()
        {
            $this->db->select('*');
            $this->db->from('transaksi');
            $this->db->join('toko','toko.id_toko = transaksi.order_id_toko');
            $this->db->join('barang','barang.id_barang = transaksi.order_id_barang');
            $this->db->join('customer','customer.id_customer = transaksi.order_id_cust');
            $this->db->join('bank','bank.id_bank = transaksi.order_id_bank');
            $this->db->join('kurir','kurir.id_kurir = transaksi.order_id_kurir');
            return $this->db->get();
        }

    }