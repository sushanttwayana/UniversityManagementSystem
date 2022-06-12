<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Student Dashboard</title>
  <link rel="stylesheet" type="text/css" href="../css/dashboard.css" />
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
  
  <script>
    function myFunction1 () {
        location.replace("teachersform.php");
    };
    function myFunction2 () {
        location.replace("studentsform.php");
    };
    function myFunction3 () {
        location.replace("courseform.php");
    };
</script>
  
</head>
<body>
  <div class="container" id="section1">
    <nav>
      <ul>
        <li><a href="#" class="logo">
          <img src="../images/admin.png">
          <span class="nav-item">Admin</span>
        </a></li>
        <li><a href="#section1">
          <i class="fa fa-folder-open"></i>
          <span class="nav-item">Dashboard</span>
        </a></li>
        <li><a href="#section2">
          <i class="fa-solid fa-chalkboard-user"></i> 
          <span class="nav-item">Teachers</span>
        </a></li>
        <li><a href="#section3">
          <i class="fa-solid fa-graduation-cap"></i> 
           <span class="nav-item">Students</span>
        </a></li>
        <li><a href="#section4">
          <i class="fa fa-book"></i>
          <span class="nav-item">Courses</span>
        </a></li>
        

        <li><a href="home.php" class="logout">
          <i class="fa fa-sign-out"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>


    <section class="main">
      <div class="main-top">
        <h1>Teachers</h1>
        <i class="fas fa-user-cog"></i>
      </div>
      <div class="users">
        <div class="card">
          <img src="../images/useri.jpg">
          <h4>Mahammad Humayoo</h4>
          <p>DBMS</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/userii.jpg">
          <h4>Babil kherr</h4>
          <p>C Progamming</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/useriii.jpeg">
          <h4>Badani John</h4>
          <p>Java</p>
          <button>Profile</button>
        </div>
        <div class="card">
          <img src="../images/user2.jpg">
          <h4>Salina micheal</h4>
          <p>UI/UX Design</p>
          <button>Profile</button>
        </div>
      </div>

      <section class="teachers" id ="section2">
        <div class="teachers-list">
          <h1>Teachers List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Rank</th>
                <th>Phone Number</th>
                <th colspan="2"> <button  onclick = "myFunction1()" >ADD +</button></th>
                
              </tr>
            </thead>
            <tbody>
            

            <!-- update & delete teachers db -->
            <?php

              include 'db.php';

              $sql = "SELECT * FROM Teachers";

             $result = mysqli_query($conn, $sql);

              if($result){
                while($row = mysqli_fetch_assoc($result)){
                  $id = $row['Employee_ID'];
                  $fname = $row['FirstName'];
                  $lname = $row['LastName'];
                  $rank = $row['Rank'];
                  $no = $row['Phone_Number'];
              ?>

        <tr>
            <td><?php echo $id  ?></td>
            <td><?php echo $fname ?></td>
            <td><?php echo $lname  ?></td>
            <td><?php echo $rank ?></td>
            <td><?php echo $no  ?></td>
            <td>
            <a href="updateteacher.php?e_id=<?php echo $id ?>"><button type="submit" style="color:black; margin-left:200px;">Update</button></a>
            </td>
            <td>
              <a href="delete1.php?e_id=<?php echo $id ?>"><button type="submit" style="color:black;">Delete </button></a>
            </td>
            <!-- <a href="deletetable.php?id=<?php echo $id?>"><input type="button" value="Delete" id="d"></a> -->
        </tr>
              <?php

                }
              }
            ?>
            
        
    
            </tbody>

          

          </table>
        </div>
      </section>
      
      <section class="teachers" id="section3">
        <div class="teachers-list">
          <h1> Students List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th colspan="2"> <button  onclick = "myFunction2()" >ADD +</button></th>

              </tr>
            </thead>
            
            <!-- update and delete student databasae -->
            <tbody>
            <?php

                 include 'db.php';

                $sql = "SELECT * FROM Students";

                $result = mysqli_query($conn, $sql);

                if($result){
                  while($row = mysqli_fetch_assoc($result)){
                    $id = $row['Student_ID'];
                    $fname = $row['FirstName'];
                    $lname = $row['LastName'];
                    $no = $row['Phone_Number'];
                    $address = $row['Address'];
                ?>

                <tr>
                <td><?php echo $id  ?></td>
                <td><?php echo $fname ?></td>
                <td><?php echo $lname  ?></td>
                <td><?php echo $no ?></td>
                <td><?php echo $address ?></td>
                <td>
                <a href="updatestd.php?s_id=<?php echo $id?>"><button type="submit" style="color:black; margin-left:145px;">Update</button></a>
                </td>
                <td>
                  <a href="deletestd.php?s_id=<?php echo $id?>"><button type="submit" style="color:black;"> Delete </button></a>
                  </td>
                </tr>
                <?php

                  }
                }
                ?>
     
                <!-- update and delete course databasae -->
            </tbody>


          </table>
        </div>
      </section>
      <section class="teachers" id="section4">
        <div class="teachers-list">
          <h1> Course List</h1>
          <table class="table">
            <thead>
              <tr>
                <th>Course-Code</th>
                <th>Course-Name</th>
                <th>Credit-Hour</th>
                <th colspan="2"> <button  onclick = "myFunction3()" >ADD +</button></th>
              </tr>
            </thead>
            <tbody>
            <?php

               include 'db.php';

               $sql = "SELECT * FROM Courses";

                $result = mysqli_query($conn, $sql);

                if($result){
                while($row = mysqli_fetch_assoc($result)){
                $code = $row['CourseCode'];
                $cname = $row['CourseName'];
                $chour = $row['CreditHour'];
    
            ?>

                <tr>
                <td><?php echo $code ?></td>
                <td><?php echo $cname?></td>
                <td><?php echo $chour ?></td>
                <td><a href="updatecourse.php?c_id=<?php echo $code?> "><button type="submit" style="color:black; margin-left:200px;">Update</button></td>
                <td>  <a href="deletecourse.php?c_id=<?php echo $code?> "><button type="submit" style="color:black;"> Delete </button></a>
              </td>
                </tr>
                <?php

                  }
                }
                ?>
     
            </tbody>
        

          </table>
        </div>
      </section>
    </section>
  </div>

</body>
</html>
