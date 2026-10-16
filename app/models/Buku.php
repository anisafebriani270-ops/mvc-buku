
<?php

require_once __DIR__ . '/../../config/database.php';

class Buku
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Mengambil semua data buku
    public function getAll()
    {
        $sql = "SELECT * FROM buku ORDER BY id DESC";
        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Menambahkan data buku
    public function create($data)
    {
        $sql = "INSERT INTO buku
                (judul, penulis, penerbit, tahun_terbit, kategori)
                VALUES
                (:judul, :penulis, :penerbit, :tahun_terbit, :kategori)";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':penerbit' => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':kategori' => $data['kategori']
        ]);
    }
}