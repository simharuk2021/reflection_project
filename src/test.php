<?php
require_once("../inc/credentials.php");

try{
    $pdo = new PDO($attr, $user, $pass='',$opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

// $query = "SELECT id, Title, Paragraph, Image, Posted_By, Date FROM details where id = 5";
// $statement = $pdo->query($query);

// while ($row = $statement->fetch()) {
//     echo $row['Title'];
//     echo $row['Paragraph'];
//     echo $row['Image'];
// }

$statement = $pdo->prepare("SELECT ID, Title, Paragraph, Image, Posted_By, Date  FROM details");
$statement->execute();


$result = $statement->fetch(PDO::FETCH_ASSOC);
echo("RESULT 1 ");
echo($result['Title']) ;
echo($result['Paragraph']);
echo($result['Image']);
echo($result['Posted_By']);
echo($result['Date']);

$result2 = $statement->fetch(PDO::FETCH_ASSOC);
echo("RESULT 2 ");
echo($result2['Title']);
echo($result2['Paragraph']);
echo($result2['Image']);
echo($result2['Posted_By']);
echo($result2['Date']);

$result3 = $statement->fetch(PDO::FETCH_ASSOC);
echo("RESULT 3 ");
echo($result3['Title']);
echo($result3['Paragraph']);
echo($result3['Image']);
echo($result3['Posted_By']);
echo($result3['Date']);

?>

