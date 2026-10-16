
<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/BukuController.php';

$controller = new BukuController($pdo);

$action = $_GET['action'] ?? 'index';

if ($action === 'create') {
    $controller->create();
} else {
    $controller->index();
}