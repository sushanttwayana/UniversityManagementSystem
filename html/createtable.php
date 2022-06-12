<?php
    include  'db.php';
    
        // creating feedback table
        $sql = "CREATE TABLE Feedback(
            Student_ID INT NOT NULL AUTO_INCREMENT, 
             Primary Key(Student_ID),
            name VARCHAR(50),
            email VARCHAR(50),
            subject VARCHAR(50),
            message VARCHAR(300) 
        )";
       
    
        // Execute query
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            echo "Feedback Table created successfully<br>";
        }
        else
        {
            echo "Feedback Table not created due to ". mysqli_error($conn)."<br>";
        }

        
        //creating Teachers table

        if(!$conn){
            die('Couldnot connect to database:'.mysqli_error());
        }
    
        $sql = "CREATE TABLE Teachers(
            Employee_ID INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(Employee_ID),
            FirstName VARCHAR (50),
            LastName VARCHAR (50),
            Rank VARCHAR(20),
            Phone_Number VARCHAR(100)
            )";
    
            $result = mysqli_query($conn,$sql);
    
            if($result){
                echo "Teachers table create succesfully<br>";
            }
    
            else{
                echo "EROOR:<br>" .mysqli_error(); 
            }
    
        //creating Students table

        if(!$conn){
            die('Couldnot connect to database:'.mysqli_error());
        }
    
        $sql = "CREATE TABLE Students(
            Student_ID INT NOT NULL AUTO_INCREMENT,
            PRIMARY KEY(Student_ID),
            FirstName VARCHAR (50),
            LastName VARCHAR (50),
            Address VARCHAR(100),
            Phone_Number INT NOT NULL
            )";
    
            $result = mysqli_query($conn,$sql);
    
            if($result){
                echo "Students table create succesfully<br>";
            }
    
            else{
                echo "EROOR:<br>" .mysqli_error(); 
            }

        //creating Course table
  
    
        $sql = "CREATE TABLE Courses(
            CourseCode INT NOT NULL ,
            PRIMARY KEY(CourseCode),
            CourseName VARCHAR (50),
            CreditHour INT NOT NULL
            )";
    
            $result = mysqli_query($conn,$sql);
    
            if($result){
                echo "Course table create succesfully<br>";
            }
    
            else{
                echo "EROOR:<br>" .mysqli_error(); 
            }

            // noramlized

            if(!$conn){
                die('Couldnot connect to database:'.mysqli_error());
            }
        
            $sql = "CREATE TABLE Teachers1(
                Employee_ID INT NOT NULL AUTO_INCREMENT,
                PRIMARY KEY(Employee_ID),
                Rank VARCHAR(20),
                )";
        
                $result = mysqli_query($conn,$sql);
        
                if($result){
                    echo "Teachers table create succesfully<br>";
                }
        
                else{
                    echo "EROOR:<br>" .mysqli_error(); 
                }
        

?>


