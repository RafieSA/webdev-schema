<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Ini adalah salah satu cara load model (sesuai soal PG no. 6)
        // Kita load model 'Product_model' dan memberinya alias 'product'
        $this->load->model('Product_model', 'product');
    }

    // Ini adalah fungsi default (Menu "Dashboard")
    public function index() {
        // Hanya menampilkan file view 'admin_dashboard.php'
        $this->load->view('admin_dashboard');
    }

    // Ini adalah Menu "Produk"
    public function produk() {
        // 1. Minta data ke Model
        $data['products'] = $this->product->get_all();
        // 2. Tampilkan file view 'admin_produk.php' dan kirim datanya
        $this->load->view('admin_produk', $data);
    }

    // Fungsi ini untuk MENAMPILKAN halaman form tambah
    public function tambah() {
        $this->load->view('admin_tambah');
    }

    // Fungsi ini untuk MEMPROSES data dari form tambah
    public function store() {
        // Ambil data dari form (method POST)
        $data = [
            'produk' => $this->input->post('produk'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'link_gambar' => $this->input->post('link_gambar')
        ];
        
        // Kirim data ke Model untuk disimpan
        $this->product->insert($data);
        
        // Arahkan kembali ke halaman produk (sesuai alur soal PG no. 9)
        redirect('admin/produk');
    }

    // Fungsi ini untuk MENAMPILKAN halaman form edit
    public function edit($id) {
        // 1. Ambil data produk yg lama berdasarkan ID
        $data['product'] = $this->product->get_by_id($id);
        // 2. Tampilkan view 'admin_edit.php' dengan data tsb
        $this->load->view('admin_edit', $data);
    }

    // Fungsi ini untuk MEMPROSES data dari form edit
    public function update($id) {
        // Ambil data baru dari form
        $data = [
            'produk' => $this->input->post('produk'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'link_gambar' => $this->input->post('link_gambar')
        ];
        
        // Kirim data ke Model untuk di-update
        $this->product->update($id, $data);
        redirect('admin/produk');
    }

    // Fungsi ini untuk MENGHAPUS produk
    public function delete($id) {
        $this->product->delete($id);
        redirect('admin/produk');
    }
}