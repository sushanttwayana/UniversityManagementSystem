<?php

    include 'db.php';

        //insert into students table
        $id = $_POST['s_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address= $_POST['address'];
        $no = $_POST['no'];
        
        $sql = "INSERT INTO Students(Student_ID,FirstName,LastName, Address, Phone_Number) VALUES ('$id','$fname','$lname','$address','$no')";
        
        $result2 = mysqli_query($conn, $sql);
        
        if($result2){
            header('Location:dashboard.php');
        }

?>