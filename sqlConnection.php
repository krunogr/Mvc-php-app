<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=vehicle_db', 'root', '');
} catch (PDOException $e) {
    echo 'Error with connection to database';
}
?>