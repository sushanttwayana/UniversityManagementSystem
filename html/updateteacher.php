<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="../css/std.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">



</head>
<body>
    
    <?php

    include 'db.php';

    $id = $_GET['e_id'];

    $sql = "SELECT * FROM teachers WHERE Employee_ID = $id "; // Employee_ID  = ".$id;

    $result = mysqli_query($conn, $sql);

     if($result){

        $row = mysqli_fetch_assoc($result);

        $id = $row['Employee_ID'];
        $fname = $row['FirstName'];
        $lname= $row['LastName'];
        $rank= $row['Rank'];
        $num = $row['Phone_Number'];
    }




    ?>




    <div class="container">
        <header>Teacher's Registration</header>

        <form action="updaction.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="text" placeholder="Enter your first name" name="fname" value=" <?php global $fname; echo $fname ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Enter your last name"  value=" <?php global $lname; echo $lname ?>" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" placeholder="Enter birth date">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Enter your email">
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="number"  placeholder="Enter mobile number" value ="<?php global $num; echo $num ?>">
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select >
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>
                    
                        
                        <div class="input-field">
                            <label>ID</label>
                            <input type="number" name="e_id" placeholder="Enter the ID"  value="<?php global $id; echo $id?>" required>
                        </div>

                        <div class="input-field">

                        <label >Rank </label>
                        <input type="text" name="rank"  value=" <?php global $rank; echo $rank ?>" placeholder="Which post are you in.." >

                            </select>
                        </div>

                        <div class="input-field">
                            <label>Address</label>
                            <input type="text" name="address"  placeholder="Enter the address" >
                        </div>

                        <input type="hidden" name="id" id="id" value="<?php global $id; echo $id?>" required>
                    </div>
                </div>
                       
                        <button class="sumbit" name="submit" >
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






