<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <link rel="stylesheet" href="../css/login.css">
  <script src="https://kit.fontawesome.com/94134e2621.js" crossorigin="anonymous"></script>
  <script src="f.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/blog.css">
  <link rel="stylesheet" type="text/css" href="../css/course.css">
  <link rel="stylesheet" type="text/css" href="../css/about.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="../css/register.css">
 
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<section class="courses">
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
  
  <h1 style="font-size: 35px;">New Here!!! <br>
    To Start <br>
    Let's Login-In 
  </h1> 

</section>

<body>
  <div class="wrapper">
    <h1>Hello !</h1>
    <p>Welcome !!!</p>
    <form method="POST">
      <input type="text" placeholder="Enter username" >
      <input type="password" placeholder="Password" >
      <p class="recover">
        <a href="#">Forgot Password?</a>
      </p>
      <button><a href = "dashboard.php">Sign in </a></button>
    </form>
    
    <p class="or">
      ----- continue as -----
    </p>
    <div class="icons">

        <i class="fa-solid fa-chalkboard-user"></i> 
        <i class="fa-solid fa-graduation-cap"></i> 
        <i class="fa-solid fa-lock"></i> 

        <div class="text">
            <p>Teacher</p>
            <p>Student</p>
            <p>Admin</p>
        </div>
    </div> 
    <div class="not-member">
      Need an account? <a href=#>Sign Up</a>
    </div>
  </div>

         <!-- -----footer -->
         <section class="footer footer3" style="margin-top:50px;">
          <p>Enroll with us in diffrent social medias and be up to date...
              <br>Enjoy Learning :)
          </p>

          <div class="socialmedia">
              <i class="fa fa-facebook" ></i>
              <i class="fa fa-instagram" ></i>
              <i class="fa fa-twitter" ></i>
              
              <i class="fa fa-linkedin" ></i>
          </div>
<!-- 
          <p id="madebyme"> Sushant Twayana & Samesh Bajracharya </p> -->
      </section>
     
</body>
</html>
