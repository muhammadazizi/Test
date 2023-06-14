<?php

class barang_model extends CI_model
{
	public function getAllBarang(){
		return $this->db->get('barang')->result_array();
	}

	public function tambahdata(){
		$data = [
			"nama_produk"=>$this->input->post('nama_produk',true),
			"harga"=>$this->input->post('harga',true),
			"kategori"=>$this->input->post('kategori',true),
			"status"=>$this->input->post('status',true)
		];

		$this->db->insert('barang',$data);
	}

	public function hapusdata($id_produk){
		$this->db->where('id_produk',$id_produk);
		$this->db->delete('barang');

	}

	public function getbarang($id_produk){
		return  $this->db->get_where('barang',['id_produk'=>$id_produk])->row_array();
	}

	public function ubahdata(){
		$data = [
			"nama_produk"=>$this->input->post('nama_produk',true),
			"harga"=>$this->input->post('harga',true),
			"kategori"=>$this->input->post('kategori',true),
			"status"=>$this->input->post('status',true)
		];
		$this->db->where('id_produk',$this->input->post('id_produk'));
		$this->db->update('barang',$data);
	}
}


?>