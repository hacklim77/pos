<?php

	/**
	 * 
	 */
	class Model_mhs extends CI_Model
	{
		public function getAllmahasiswa()
		{
			return $this->db->get('mahasiswa')->result_array(); 
		}

		public function insertData()
		{
			$data = array(
				"nama" => $this->input->post("nama",true),
				"nim" => $this->input->post("nim",true),
				"prodi" => $this->input->post("prodi",true)
			);

			$this->db->insert('mahasiswa',$data); 
		}
	}