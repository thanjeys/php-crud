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

 $sql = "SELECT * FROM contacts WHERE id=12"; 
 $result = $conn->query($sql); 

//  echo $result->num_rows."Num rows"; 

 if($row = $result->fetch_object()) { 
    echo $row->name, $row->email; 
 } else { 
     echo 'no result'; 


 }


//  var_dump($result); 

//  var_dump(get_class_methods($result));
 