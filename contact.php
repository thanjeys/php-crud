<?php

if($_POST)
{
   echo "<h2>Submitted Data </h2>";
   echo "Name : " . $_POST['name'] . "<br>";
   echo "Email : " . $_POST['email']. "<br>";
   echo "Mobile : " . $_POST['mobile']. "<br>";
   echo "Address : " . $_POST['address']. "<br>";
   echo "Agree : ". $_POST['agree']. "<br>";
}

   $host = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'mysqllearning';

   $conn = new mysqli($host, $username, $password, $database);
  

   if(!$conn) { 
      die('Connection Failed'. $conn->connect_error);
   } else { 
      echo "Success"; 
   }

   $name = $_POST['name'];
   $email = $_POST['email'];
   $mobile = $_POST['mobile']; 
   $address = $_POST['address']; 
   $agree = $_POST['agree']; 


   $sql = "INSERT INTO contacts (names, email, mobile, address, agree) VALUES ('$name', '$email', '$mobile', '$address', '$agree')"; 
   if(!$conn->query($sql)) { 
      echo $conn->error; 
   }


   
   

?>
