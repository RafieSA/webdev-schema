<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    // Nama tabel di database kita
    private $table = 'produk';

    // Fungsi untuk mengambil SEMUA produk
    public function get_all() {
        // Sama seperti: SELECT * FROM produk
        return $this->db->get($this->table)->result();
    }

    // Fungsi untuk mengambil SATU produk berdasarkan ID
    public function get_by_id($id) {
        // Sama seperti: SELECT * FROM produk WHERE id = $id
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    // Fungsi untuk menyimpan data baru
    public function insert($data) {
        // Sama seperti: INSERT INTO produk (kolom1, kolom2) VALUES (nilai1, nilai2)
        return $this->db->insert($this->table, $data);
    }

    // Fungsi untuk meng-update data
    public function update($id, $data) {
        // Ini adalah sintaks yang ditanyakan di soal PG no. 10
        // $this->db->update('nama_table', data, kondisi)
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    // Fungsi untuk menghapus data
    public function delete($id) {
        // Sama seperti: DELETE FROM produk WHERE id = $id
        return $this->db->delete($this->table, ['id' => $id]);
    }
}