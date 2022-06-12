<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/courseform.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



</head>
<body>

        <?php

        include 'db.php';

        $id = $_GET['c_id'];

        $sql = "SELECT * FROM courses WHERE CourseCode = $id "; // Employee_ID  = ".$id;

        $result = mysqli_query($conn, $sql);

        if($result){

            $row = mysqli_fetch_assoc($result);

            $id = $row['CourseCode'];
            $cname = $row['CourseName'];
            $chour= $row['CreditHour'];
        }




        ?>

    <div class="container">
        <header>Courses</header>

        <form action="updateaction3.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Course Name</label>
                            <input type="text" name="cname" placeholder="Enter course name" value ="<?php global $cname; echo $cname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Course Code</label>
                            <input type="text" name="ccode" placeholder="Enter course code"  value="<?php global $id; echo $id?>" required>
                        </div>

                        <div class="input-field">
                            <label>Credit Hour</label>
                            <input type="number" name="chour" placeholder="Enter credit hour"  value="<?php global $chour; echo $chour?>" min="1" max = "5" required>
                        </div>
                    </div>

                    <input type="hidden" name="id" id="coursecode" value="<?php global $id; echo $id?>">
                </div>
                       
                        <button class="sumbit">
                            <span class="btnText">UPDATE</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


    
    
</body>
</html>
