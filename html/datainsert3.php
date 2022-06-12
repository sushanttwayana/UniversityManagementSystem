<?php
        include 'db.php';
        // insert into course table

        $name = $_POST['cname'];
        $code = $_POST['ccode'];
        $hour = $_POST['chour'];
    
        $sql = "INSERT INTO Courses(CourseCode, CourseName, CreditHour) VALUES ('$code','$name','$hour')";
    
        $result3 = mysqli_query($conn,$sql);
    
        if($result3){
            header('Location:dashboard.php');
        }

?>