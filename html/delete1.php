<?php

    include 'db.php';

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $id = $_GET ['e_id'];

    $sql = "DELETE FROM Teachers WHERE Employee_ID = $id";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:dashboard.php");
    }

?>