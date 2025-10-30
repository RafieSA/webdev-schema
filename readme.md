# Electronics Store Admin Panel (BNSP Certification)

This is a web application project created to fulfill the Competency Demonstration Task for the **BNSP Web Developer Certification (KKNI Level 6)**.

The task required building a simple admin panel to manage an electronics store's product data, featuring full CRUD (Create, Read, Update, Delete) functionality.

**Local URL (via Laragon):** [http://bnsp-toko-elektronik.test](http://bnsp-toko-elektronik.test)

---

## 🛠️ Technology Stack

* **Framework:** CodeIgniter 3.1.13 (chosen to match the BNSP multiple-choice questions)
* **Language:** PHP 8.3
* **Database:** MySQL 8.4 (via Laragon)
* **Local Server:** Laragon (Apache)
* **Frontend:** Bootstrap 4 (via CDN) for rapid styling.

---

## ✨ Task-Compliant Features

As required by the assignment, this application features two main menus:

1.  **Dashboard:** A simple welcome/landing page.
2.  **Products:** The main page containing the full CRUD functionality:
    * **[Create]** "Tambah Produk" (Add Product) button opens a form for new data.
    * **[Read]** Displays all product data from the MySQL database in a table.
    * **[Update]** An "Edit" button for each row to modify product data.
    * **[Delete]** A "Delete" button for each row with a JavaScript `confirm()` alert.

---

## 🚀 How to Run (Local Setup)

1.  **Prerequisites:** **Laragon** (or XAMPP) must be installed and running.
2.  **Clone Repo:**
    ```bash
    git clone [https://github.com/RafieSA/webdev-schema.git](https://github.com/RafieSA/webdev-schema.git)
    ```
3.  **Move Folder:** Move the cloned `webdev-schema` folder into `C:\laragon\www\`.
4.  **Create Database:** Open HeidiSQL/phpMyAdmin (via Laragon) and create a new database named `bnsp_toko_elektronik`.
5.  **Import SQL:** Import the `data.sql` file (included in this repo) into the `bnsp_toko_elektronik` database.
6.  **Configure CI3:**
    * Rename the folder `C:\laragon\www\webdev-schema` to `bnsp-toko-elektronik` (to match the URL).
    * Open `application/config/database.php` and ensure settings match your Laragon setup (user `root`, password `''`).
    * Open `application/config/config.php` and ensure the `base_url` is `http://bnsp-toko-elektronik.test`.
7.  **Run:** Restart Laragon and open `http://bnsp-toko-elektronik.test` in your browser.

---

## 🗄️ Database Schema (`data.sql`)

As requested by the task, the database contains a single `produk` table:

```sql
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `link_gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);