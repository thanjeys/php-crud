<?php

/**
 * Insert Mutiple Records 
 */

 $host = 'localhost';
 $username = 'root';
 $password = '';
 $dbname = 'mysqllearning'; 

 $conn = new mysqli($host, $username, $password, $dbname); 

 if($conn->connect_error) { 
     die('DB connection Failed'. $conn->connect_error);
 }


 $sql = "INSERT INTO contacts(name, email) VALUES('THANA', 'thana@gami.com');"; 
 $sql .= "INSERT INTO contacts(name, email) VALUES('THANA2', 'thana2@gami.com');"; 

 if($conn->multi_query($sql)) { 
     echo "Insert Success"; 
 } else 
    echo "Failed query". $conn->error; 
