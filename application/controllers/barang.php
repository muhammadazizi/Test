<?php 

class barang extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('barang_model');
		$this->load->library('form_validation');
	}
	public function index(){

		$data['judul'] = 'Halaman Barang';
		$data['barang'] = $this->barang_model->getAllBarang();
		$this->load->view('template/header', $data);
		$this->load->view('template/footer',$data);
		$this->load->view('barang');
	}

	public function tambah(){

		$data['judul'] = 'Tambah Barang';
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('template/header', $data);
		$this->load->view('template/footer',$data);
		$this->load->view('tambah');
		}else{
			$this->barang_model->tambahdata();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('barang');
		}

	}

	public function ubah($id_produk){

		$data['judul'] = 'Edit Barang';
		$data['barang'] = $this->barang_model->getbarang($id_produk);
		$this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');
		if ($this->form_validation->run() == FALSE) {
		$this->load->view('template/header', $data);
		$this->load->view('template/footer',$data);
		$this->load->view('ubah', $data);
		}else{
			$this->barang_model->ubahdata();
			$this->session->set_flashdata('flash','diubah');
			redirect('barang');
		}

	}

	public function hapus($id_produk){
		$this->barang_model->hapusdata($id_produk);
		$this->session->set_flashdata('flash','dihapus');
		redirect('barang');
	}
	
}


?>