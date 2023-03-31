<?php
require("credentials.php");

try{
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

$nameErr = $emailErr = $compErr = $phoneErr = $subjErr = $messErr = "";  
$success = $name = $email = $compName = $phone = $subject = $message = "";  


function input_data($data) {  
    $data = trim($data);  
    $data = stripslashes($data);  
    $data = htmlspecialchars($data);  
    return $data;  
  }  


if ($_SERVER["REQUEST_METHOD"] == "POST") {  
      
    //String Validation  
        if (empty($_POST["Name"])) {  
             $nameErr = "Name is required";  
        } else {  
            $name = input_data($_POST["Name"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
                    $nameErr = "Only alphabets and white space are allowed";  
                }  
        }  
        if (empty($_POST["compName"])) {  
             $compErr = "Company name is required";  
        } else {  
            $compName = input_data($_POST["compName"]);  
                // check if name only contains letters and whitespace  
                if (!preg_match("/^[a-zA-Z ]*$/",$compName)) {  
                    $compErr = "Only alphabets and white space are allowed";  
                }  
        }  
                // email validation
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
         }else {
            $email = input_data($_POST["email"]);
            
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailErr = "Invalid email format"; 
            }
         }

         if (empty($_POST["phone"])) {
            $phoneErr = "Phone number is required";
         }else {
            $phone = input_data($_POST["phone"]);
            // check if the uk phone number matches a uk mobile or landline number
            if (!preg_match($telString, $phone)) {
               $phoneErr = "Invalid telephone format"; 
            }
         }
        
         if (empty($_POST["subject"])) {  
            $subjErr = "Subject is required";  
       } else {  
           $subject = input_data($_POST["subject"]);  
               // check if name only contains letters and whitespace  
               if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {  
                   $subjErr = "Only alphabets and white space are allowed";  
               }  
       }  
         if (empty($_POST["message"])) {  
            $messErr = "Message is required";  
       } else {  
           $message = input_data($_POST["message"]);  
               // check if name only contains letters and whitespace  
               if (!preg_match("/^[a-zA-Z ]*$/",$message)) {  
                   $messErr = "Only alphabets and white space are allowed";  
               }  
       }  
        
if ($nameErr == "" && $emailErr == "" && $compErr == "" && $phoneErr == "" && $subjErr == "" && $messErr == "") 
    
{ $query =  $pdo->prepare("INSERT INTO `contact_form`(`Name`, `Email`, `Company`, `Telephone`, `Subject`, `Message`) 
values('$name', '$email', '$compName', '$phone', '$subject','$message')");
 echo($query->execute());
 $success = "Your message has been submitted";
}
}
