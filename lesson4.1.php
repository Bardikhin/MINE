<?php

/*$sql = file_get_contents('dump.txt');

echo '<pre>';
print_r($sql);
echo '</pre>';*/



$pdo = new PDO("mysql:host=localhost;dbname = global","barikhin","neto1339");
$sql = "Select * from 'books'";
$statement = $pdo->prepare($sql);
$statement->execute();

?>