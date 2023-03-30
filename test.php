<?php
require("credentials.php");

try{
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

$statement = $pdo->prepare("SELECT ID, Title, Paragraph, Image, Posted_By, Date, Logo FROM details");
$statement->execute();


$result = $statement->fetch(PDO::FETCH_ASSOC);
$result2 = $statement->fetch(PDO::FETCH_ASSOC);
$result3 = $statement->fetch(PDO::FETCH_ASSOC);

//  if(isset($_POST['submit'])){
//     if(!empty($_POST['Name'])){
//         $name=$_POST['Name'];
//     }
//         // $lastname=$_POST['lastname'];
//         // $email=$_POST['email'];
//         // $contact=$_POST['contact'];
//         // $subject=$_POST['subject'];
//         // $message=$_POST['message'];

   
//  $query =  $pdo->prepare("INSERT INTO contact_form(Name) values('$name')");
//  $query->execute();
// }

?>

