<?php
require("credentials.php");

try{
    $pdo = new PDO($attr, $user, $pass, $opts);
} catch (PDOException $e) {
    throw new PDOException($e->getMessage());
}

$nameErr = $emailErr = $mobilenoErr = $genderErr = $websiteErr = $agreeErr = "";  
$name = $email = $mobileno = $gender = $website = $agree = "";  

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

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
         }else {
            $email = input_data($_POST["email"]);
            
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               $emailErr = "Invalid email format"; 
            }
         }



if ($nameErr == "" && $emailErr == ""){ $query =  $pdo->prepare("INSERT INTO `contact_form`(`Name`, `Email`) values('$name', '$email')");
 echo($query->execute());
}
}