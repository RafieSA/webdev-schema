<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Constructor
     * Memuat model yang diperlukan untuk controller ini.
     */
    public function __construct() {
        parent::__construct();
        // Load model produk dengan alias 'product'
        $this->load->model('Product_model', 'product');
    }

    /**
     * Menampilkan halaman Dashboard Admin.
     * Halaman default controller.
     */
    public function index() {
        $this->load->view('admin_dashboard');
    }

    /**
     * Menampilkan halaman manajemen produk (daftar produk).
     * Mengambil semua data produk dari model.
     */
    public function produk() {
        $data['products'] = $this->product->get_all();
        $this->load->view('admin_produk', $data);
    }

    /**
     * Menampilkan form untuk menambah produk baru.
     */
    public function tambah() {
        $this->load->view('admin_tambah');
    }

    /**
     * Memproses data dari form tambah produk.
     * Menerima data via POST dan menyimpannya ke database.
     */
    public function store() {
        $data = [
            'produk' => $this->input->post('produk'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'link_gambar' => $this->input->post('link_gambar')
        ];
        
        $this->product->insert($data);
        // Redirect kembali ke halaman list produk
        redirect('admin/produk');
    }

    /**
     * Menampilkan form untuk mengedit produk berdasarkan ID.
     *
     * @param int $id ID Produk yang akan diedit
     */
    public function edit($id) {
        $data['product'] = $this->product->get_by_id($id);
        $this->load->view('admin_edit', $data);
    }

    /**
     * Memproses data dari form edit produk.
     *
     * @param int $id ID Produk yang akan di-update
     */
    public function update($id) {
        $data = [
            'produk' => $this->input->post('produk'),
            'kategori' => $this->input->post('kategori'),
            'harga' => $this->input->post('harga'),
            'link_gambar' => $this->input->post('link_gambar')
        ];
        
        $this->product->update($id, $data);
        redirect('admin/produk');
    }

    /**
     * Menghapus produk berdasarkan ID.
     *
     * @param int $id ID Produk yang akan dihapus
     */
    public function delete($id) {
        $this->product->delete($id);
        redirect('admin/produk');
    }
}