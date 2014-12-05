<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=cars_db', 'root', '');
} catch (PDOException $e) {
    echo 'Error with connection to database';
}
?>