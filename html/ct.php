<?php
    include 'db.php';

    if(!$conn){
        die('Couldnot connect to database:'.mysqli_error());
    }

    // mysqli_select_db("university_management_system", $conn);

    $sql = "CREATE TABLE TEACHERS(
        Employee_ID INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(Employee_ID),
        FirstName VARCHAR (50),
        LastName VARCHAR (50),
        Rank VARCHAR(20),
        Phone_Number INT
        )";

        $result = mysqli_query($conn,$sql);

        if($result){
            echo "Teachers table create succesfully<br>";
        }

        else{
            echo "EROOR:<br>" .mysqli_error(); 
        }





    // if ($_POST['submit']){
    //     if ($_POST['fname']= "" && $_POST('lname')!="" && $_POST('rank')!="" && $_POST('e_id')!="" && $_POST('mobileno')!=" " ){
    //         $fname = $_POST(fname);
    //         $lname = $_POST(lname);
    //         $rank = $_POST(rank);
    //         $id = $_POST(e_id);
    //         $phone = $_POST(mobileno);
    //     }
    // }

    // mysqli_query("INSERT INTO Teachers (Employee_ID,FirstName,LastName,Rank) VALUES ($id,$fname,$lname,$rank) ");


    // mysqli_close($conn);
   
?>