<?php

$host = 'localhost';
    $dbname = 'x';
    $username = 'root';
    $password = '';

/*
$host = 'localhost';
$dbname = 'u593341949_db_quidit';
$username = 'u593341949_dev_quidit';
$password = '20221240Quidit';
*/
try {   
 $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 die("Database connection failed: " . $e->getMessage());
}

