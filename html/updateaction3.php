<?php

    include 'db.php';

    $code = $_POST['ccode'];
    $cname = $_POST['cname'];
    $hour = $_POST['chour'];

    $sql = "UPDATE courses SET CourseCode='$code', CourseName='$cname', CreditHour='$hour' WHERE CourseCode = $code";

    $result = mysqli_query( $conn, $sql);

    if($result){
        header('location: dashboard.php');
    }

?>