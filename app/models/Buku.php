
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

    // Mengambil satu buku berdasarkan ID
    public function getById($id)
    {
        $sql = "SELECT * FROM buku WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':id' => $id
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
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

    // Mengubah data buku
    public function update($id, $data)
    {
        $sql = "UPDATE buku
                SET judul = :judul,
                    penulis = :penulis,
                    penerbit = :penerbit,
                    tahun_terbit = :tahun_terbit,
                    kategori = :kategori
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':id' => $id,
            ':judul' => $data['judul'],
            ':penulis' => $data['penulis'],
            ':penerbit' => $data['penerbit'],
            ':tahun_terbit' => $data['tahun_terbit'],
            ':kategori' => $data['kategori']
        ]);
    }

    // Menghapus data buku
    public function delete($id)
    {
        $sql = "DELETE FROM buku WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);

        return $stmt->execute([
            ':id' => $id
        ]);
    }

    // Mengambil koneksi database
    public function getConnection()
    {
        return $this->pdo;
    }
}