
<?php

require_once __DIR__ . '/../models/Buku.php';

class BukuController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Buku($pdo);
    }

    public function index()
    {
        $buku = $this->model->getAll();

        require __DIR__ . '/../views/buku/index.php';
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'judul' => trim($_POST['judul'] ?? ''),
                'penulis' => trim($_POST['penulis'] ?? ''),
                'penerbit' => trim($_POST['penerbit'] ?? ''),
                'tahun_terbit' => trim($_POST['tahun_terbit'] ?? ''),
                'kategori' => trim($_POST['kategori'] ?? '')
            ];

            if (
                $data['judul'] === '' ||
                $data['penulis'] === '' ||
                $data['penerbit'] === '' ||
                $data['tahun_terbit'] === '' ||
                $data['kategori'] === ''
            ) {
                $error = 'Semua kolom wajib diisi.';
                require __DIR__ . '/../views/buku/create.php';
                return;
            }

            try {
                $this->model->create($data);
                header('Location: index.php?status=created');
                exit;
            } catch (PDOException $e) {
                $error = 'Gagal menyimpan data buku.';
            }
        }

        require __DIR__ . '/../views/buku/create.php';
    }
}