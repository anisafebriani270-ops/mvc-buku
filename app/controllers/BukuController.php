
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
}
