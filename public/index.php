<?php
try {
    $pdo = require_once __DIR__ . '/../config/database.php';
    echo "DB Connected successfully!";
} catch (Throwable $e) {
    echo "Error: " . $e->getMessage();
}