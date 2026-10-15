
<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';

$controller = new BukuController($pdo);
$controller->index();
