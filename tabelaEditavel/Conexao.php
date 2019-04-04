<?php
$link = new PDO('mysql:host=localhost;dbname=inovacao', 'root', '');
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (!$link) {
    echo "Error: Unable to connect ." . PHP_EOL;
    echo "Debugging errno: " . getMessage() . PHP_EOL;
    echo "Debugging error: " . getMessage() . PHP_EOL;
    exit;
}
?>