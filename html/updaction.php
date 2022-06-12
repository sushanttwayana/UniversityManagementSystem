<?php
   
   include 'db.php';

   $id = $_POST['e_id'];
   $fname = $_POST['fname'];
   $lname =$_POST['lname'];
   $rank = $_POST['rank'];
   $num = $_POST['number'];

   $sql = "UPDATE teachers SET Employee_ID ='$id', FirstName ='$fname', LastName='$lname', Rank='$rank', Phone_Number = '$num' WHERE Employee_ID = $id";

   $result = mysqli_query($conn, $sql);

   if($result){
    header("location:dashboard.php");
   }
   
?>