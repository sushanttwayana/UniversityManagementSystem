<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" type="text/css" href="../css/blog.css">
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
    <link rel="stylesheet" type="text/css" href="../css/course.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: 16px;
            text-align: center;
            margin-left: 680px;
            margin-top:20px;
        }
 
        h1 {
            text-align: center;
            color: #006600;
            font-size: 36px;
            font-family: Sans-serif;
            padding: 30px;
        }
 
        td {
            background-color: #E4F5D4;
            border: 1px solid #c0c0c0;
        }
 
        th {
            font-size: 18px;
            padding: 10px;
            text-align: center;
            background:#eab676;

        }
 
        td {
            font-weight: 15px;
            font-weight: 30px;
            padding: 10px;
            text-align: center;
        }

        #u{
            padding: 100px;
            background-color: black;
            border: 1px #006600 solid;
            border-radius: 10px;
            color: white;
            margin-bottom: 10px;
        }

        #d{
            padding: 10px 15px 10px 10px;
            background-color:#cf4035;
            border: 1px solid #cf4035;
            border-radius: 5px;
            color: whitesmoke;
        }

    </style>

</head>
<body>
    <section class="courses cnt">
        <nav>
            <a href="uni.html"><img src="../images/logo.png"></a>
            <div class="nav-link" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                     <li><a href="home.php" class="active">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="register.php">REGISTER</a></li>
                    
                </ul>
            </div>
            <i class="fa fa-bars" onclick = "showMenu()"></i>

        </nav>
        
        <h1>Our Contact</h1>
    </section>

    <!-- contatct page -->

    <section class="contact">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28266.32840609563!2d85.42446664999999!3d27.67739795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1aae42806ba1%3A0x5449e079404e5e82!2sBhaktapur!5e0!3m2!1sen!2snp!4v1654691753378!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>

    <section class="contact-us">

        <div class="main">

            <div class="contact-div">
                    
                <i class="fa fa-home" ></i>
                <div class="mydiv">
                <h4>Araniko Highway, XYZ Building </h4>
                <p>Sallaghari,Bhaktapur</p>
                </div>

           
                <i class="fa fa-phone" ></i>
                 <div class="mydiv">
                <h4>+977 98606566678<br>
                    +977 9687002340<br>
                    01-6603240

                </h4>
                <p>Sunday to Friday ,10AM to 6PM</p>
                 </div>
           
                <i class="fa fa-envelope-o"></i>
                <div class="mydiv">
                <h4>topuniversity@edu.np </h4>
                <p>Email us your query</p>
                 </div>
            </div>
            
            
            
            <div class="contact-form" >
                <form action="" method="POST">
                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    <input type="text" id="subject" name="subject" placeholder="Enter your subject" required>
                    <textarea rows="8" placeholder="Message" id="message" name="message" required></textarea>
                    <button type="submit" class="press" >Send Message</button>
                </form>
            </div>

        </div>
          

         
    </section>

            <section class="message-table">
                
<table>
                <tr style="background-color: #ccc">
                    <th> Name</th>
                    <th >Email</th>
                    <th>Subject</th>
                    <th >Message</th>
                </tr>

                <?php
                include 'db.php';
                
                if(!$conn){
                    die('Could not Connect to My Sql');
                }

                // $sql = "SELECT s.FirstName, s.MiddleName, s.LastName, s.DateOfBirth, s.Gender, s.PhoneNumber, s.Email, s.PermanentAddress, s.TemporaryAddress, s.FatherName, s.MotherName, q.Email , q.Class-X percentage/grade, q.Class-X year, q.Class-Xii percentage/grade, q.Class-Xii year FROM student as s, qualification as q where s.Email = q.Email";

                // $sql = "SELECT FirstName, MiddleName, LastName, DateOfBirth, Gender, PhoneNumber, Email, PermanentAddress, TemporaryAddress, FatherName, MotherName FROM student";

                $sql = "SELECT * FROM Feedback";

                $result = mysqli_query($conn,$sql);

                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['Student_ID'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $subject = $row['subject'];
                        $message = $row['message'];
                ?>
                        <tr>
                            <td><?php echo $name?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $subject?></td>
                            <td><?php echo $message?></td>
                        
                            <td>
                            <!-- <a href="edit.php?id=<?php echo $id?>"><input type="button" value="Update" id="u"></a> -->
                            <a href="deletetable.php?id=<?php echo $id?>"><input type="button" value="Delete" id="d"></a>
                            </td>
                        </tr>

                        <?php
                        
                    }
                }
            ?>
            </table>

   </section>

    
        <!-- -----footer -->
        <section class="footer footer4" style="margin-top:50px;">
            <p>Enroll with us in diffrent social medias and be up to date...
                <br>Enjoy Learning :)
            </p>

            <div class="socialmedia">
                <i class="fa fa-facebook" ></i>
                <i class="fa fa-instagram" ></i>
                <i class="fa fa-twitter" ></i>
                
                <i class="fa fa-linkedin" ></i>
            </div>

            <p id="madebyme"> Sushant Twayana </p>
        </section>

    <!-- for toogle menu -->
    <script>

        var myVar = document.getElementById("navLinks");

        function showMenu(){
            myVar.style.right = "0"; // change the right value
        }

        function hideMenu(){
            myVar.style.right = "-200px";
        }
     
    </script>

      <?php 
      
           include 'db.php';

           //insert into feedback table
           $name = $_POST['name'];
           $visitor_email = $_POST['email'];
           $subject = $_POST['subject'];
           $message = $_POST['message'];
       
           
           // $sql = "SELECT * FROM feedback";
           // $result = mysqli_query($conn, $sql);
       
           $sql = "INSERT INTO feedback(name, email, subject, message) VALUES ('$name','$visitor_email','$subject','$message')";
       
           $result = mysqli_query($conn, $sql);
       
           if($result){
               header('Location:contact.php');
           }
       
      ?>  

</body>
</html>