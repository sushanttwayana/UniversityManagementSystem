<?php

    // create main database 
    $host="localhost";
    $user="root";
    $pass = "";
    
    $conn = mysqli_connect($host, $user, $pass) or die();
    
        $sql = "CREATE DATABASE university_management_system"; 
        
        mysqli_query($conn,$sql);
    
        if(!$conn){
            die('Could not connect');
        }
        else{
            echo "Database connected successfully!";
        }
?>