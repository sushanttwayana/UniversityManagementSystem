<?php

    include 'db.php';

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $code = $_GET ['c_id'];

    $sql = "DELETE FROM courses WHERE CourseCode = $code";

    $result = mysqli_query($conn,$sql);

    if($result){
        header("location:dashboard.php");
    }

?>

