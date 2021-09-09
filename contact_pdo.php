<?php

// if($_POST)
// {
//    echo "<h2>Submitted Data </h2>";
//    echo "Name : " . $_POST['name'] . "<br>";
//    echo "Email : " . $_POST['email']. "<br>";
//    echo "Mobile : " . $_POST['mobile']. "<br>";
//    echo "Address : " . $_POST['address']. "<br>";
//    echo "Agree : ". $_POST['agree']. "<br>";
// }



$host = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'mysqllearning';

   try { 

    $conn = new PDO("mysql:host=$host; dbname=$database", $username, $password); 
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      
    
   } catch (PDOException $e) { 
        echo "getMessage".$e->getMessage();
   }

   $name = "pdo";
   $email = "test@gmail.com";
   $mobile = 987412563; 
   $address = "madipakkam"; 
   $agree = "on"; 



    $sql = "INSERT INTO contacts (name, email, mobile, address, agree) VALUES ('$name', '$email', '$mobile', '$address', '$agree')"; 
    $conn->exec($sql); 


 

?>
