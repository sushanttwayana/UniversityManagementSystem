<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/studentform.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



</head>
<body> 
      
        <?php

        include 'db.php';

        $id = $_GET['s_id'];

        $sql = "SELECT * FROM students WHERE Student_ID = $id "; // Employee_ID  = ".$id;

        $result = mysqli_query($conn, $sql);

        if($result){

            $row = mysqli_fetch_assoc($result);

            $id = $row['Student_ID'];
            $fname = $row['FirstName'];
            $lname= $row['LastName'];
            $address= $row['Address'];
            $num = $row['Phone_Number'];
        }


      ?>

    <div class="container">
        <header>Student's Registration</header>

        <form action="updateaction2.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" name="fname" value="<?php global $fname;echo $fname?>" placeholder="Enter your first name" required>
                        </div>

                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text"  name="lname"  value="<?php global $lname;echo $lname ?>" placeholder="Enter your last name" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number"  name="no" value="<?php global $num;echo $num ?>" placeholder="Enter mobile number" required>
                        </div>

                
                    
                        
                        <div class="input-field">
                            <label>Student_ID</label>
                            <input type="number"  name="s_id" value="<?php global $id;echo $id ?>" placeholder="Enter the ID" required>
                        </div>

                    

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text"  name="address" value="<?php global $address;echo $address?>" placeholder="Enter the address" required>
                        </div>
                    </div>

                    <input type="hidden" name="id" id="myid" value="<?php global $id;echo $id ?>"
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
