<?php

$dbHost = "server-mysql";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "mysql";
try {
    $conn = new PDO("mysql:host=$dbHost;dbName=$dbName", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "MySQL: Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Show PHP info:
phpinfo();
