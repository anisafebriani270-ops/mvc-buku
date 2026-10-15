
CREATE DATABASE IF NOT EXISTS db_buku;

USE db_buku;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL,
    kategori VARCHAR(50) NOT NULL
);

INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori)
VALUES
('Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 'Novel'),
('Bumi', 'Tere Liye', 'Gramedia', 2014, 'Fantasi'),
('Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2017, 'Novel');
