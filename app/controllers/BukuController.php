
<?php

require_once __DIR__ . '/../models/Buku.php';

class BukuController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Buku($pdo);
    }

    // Menampilkan daftar buku
    public function index()
    {
        $buku = $this->model->getAll();

        require __DIR__ . '/../views/buku/index.php';
    }

    // Menambahkan buku
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

            if ($this->isInvalid($data)) {
                $error = 'Semua kolom wajib diisi dengan benar.';
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

    // Mengedit buku
    public function edit()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        if (!$id || $id < 1) {
            header('Location: index.php');
            exit;
        }

        $item = $this->model->getById($id);

        if (!$item) {
            header('Location: index.php');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'judul' => trim($_POST['judul'] ?? ''),
                'penulis' => trim($_POST['penulis'] ?? ''),
                'penerbit' => trim($_POST['penerbit'] ?? ''),
                'tahun_terbit' => trim($_POST['tahun_terbit'] ?? ''),
                'kategori' => trim($_POST['kategori'] ?? '')
            ];

            if ($this->isInvalid($data)) {
                $error = 'Semua kolom wajib diisi dengan benar.';
                $item = array_merge($item, $data);

                require __DIR__ . '/../views/buku/edit.php';
                return;
            }

            try {
                $this->model->update($id, $data);

                header('Location: index.php?status=updated');
                exit;
            } catch (PDOException $e) {
                $error = 'Gagal memperbarui data buku.';
                $item = array_merge($item, $data);
            }
        }

        require __DIR__ . '/../views/buku/edit.php';
    }

    // Menghapus buku
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: index.php');
            exit;
        }

        $id = filter_input(INPUT_POST, 'id', FILTER_VALIDATE_INT);

        if (!$id || $id < 1) {
            header('Location: index.php?status=error');
            exit;
        }

        try {
            $item = $this->model->getById($id);

            if (!$item) {
                header('Location: index.php?status=error');
                exit;
            }

            $this->model->delete($id);

            header('Location: index.php?status=deleted');
            exit;
        } catch (PDOException $e) {
            header('Location: index.php?status=error');
            exit;
        }
    }

    // Memvalidasi data buku
    private function isInvalid($data)
    {
        foreach ($data as $value) {
            if ($value === '') {
                return true;
            }
        }

        return !ctype_digit((string) $data['tahun_terbit'])
            || (int) $data['tahun_terbit'] < 1;
    }
}