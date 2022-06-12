<?php
    include 'db.php';
    
    //insert into teachers table

    $id    = $_POST['e_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $rank  = $_POST['rank'];
    $number = $_POST['number'];
    
    
    $sql = "INSERT INTO Teachers(Employee_ID,FirstName,LastName, Rank, Phone_Number) VALUES ('$id','$fname','$lname','$rank','$number')";
    
    $result1 = mysqli_query($conn, $sql);
    
    if($result1){
        header('Location:dashboard.php');
    }
?>
    




