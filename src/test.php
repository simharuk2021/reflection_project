<?php
require_once("../inc/credentials.php");

try{
    $pdo = new PDO($attr, $user, $pass='',$opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

$query = "SELECT * FROM details";
$statement = $pdo->query($query);

while ($row = $statement->fetch()) {
    echo $row['Title'];
}

?>