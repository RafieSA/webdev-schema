CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `link_gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `produk` (`produk`, `kategori`, `harga`, `thumbnail`, `link_gambar`) VALUES
('Iphone 13 Pro', 'Iphone', 12000000, NULL, 'SP02'),
('Samsung X flip', 'Samsung', 20000000, NULL, 'SP03'),
('Xiaomi Redmi Note 11 Pro', 'Xiaomi', 3200000, NULL, NULL);