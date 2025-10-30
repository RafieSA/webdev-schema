<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Product_model
 *
 * Model ini bertanggung jawab untuk semua operasi database
 * yang terkait dengan tabel 'produk'.
 */
class Product_model extends CI_Model {

    // Mendefinisikan nama tabel utama
    private $table = 'produk';

    /**
     * Mengambil semua data produk dari database.
     * @return array
     */
    public function get_all() {
        return $this->db->get($this->table)->result();
    }

    /**
     * Mengambil satu baris data produk berdasarkan ID.
     * @param int $id ID produk
     * @return object
     */
    public function get_by_id($id) {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    /**
     * Memasukkan data produk baru ke database.
     * @param array $data Data asosiatif produk
     * @return bool
     */
    public function insert($data) {
        return $this->db->insert($this->table, $data);
    }

    /**
     * Memperbarui data produk yang ada berdasarkan ID.
     * @param int $id ID produk
     * @param array $data Data asosiatif produk
     * @return bool
     */
    public function update($id, $data) {
        return $this->db->update($this->table, $data, ['id' => $id]);
    }

    /**
     * Menghapus data produk berdasarkan ID.
     * @param int $id ID produk
     * @return bool
     */
    public function delete($id) {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}