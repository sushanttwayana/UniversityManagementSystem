<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="about">
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

        <h1>About Us</h1>
        
    </section>

    <!-- about us content -->

        <section class="side">
            
            <div class="about-us">

                <div class="about-c a">
                    <h1>We are the world's top university</h1>
                    <p>
                       Our's an institution of higher learning providing facilities for teaching and research and authorized to grant academic degrees specifically 
                        : one made up of an undergraduate division which confers bachelor's degrees and a graduate division which comprises a graduate school and professional schools each of 
                        which may be one of the best university ever. Choosing us might be the best goinf to your academic life....
                        <br> <br>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam, iusto? Eveniet reprehenderit quibusdam, ab sed nemo aliquid voluptas provident, dicta aperiam earum explicabo repudiandae facere consequatur temporibus, error natus voluptatem.
                    </p>
                    <a href="" class="make-visible">Explore Now</a>
                </div>

                <div class="about-c">

                    <div class="div1">
                        <img src="../images/disscussion1.jpg" alt="disscussion" width=800px;>
                    </div>

                    <div class="div1">
                        <img src="../images/disscussion2.jpg" alt="disscussion" width="800px">
                    </div>
                    
                </div>
               
                
               
                </div>

               


            </div>
        </section>

    
        <!-- -----footer -->
        <section class="footer footer2">
            <!-- <h2>About Us</h2> -->
            <p>Enroll with us in diffrent social medias and be up to date...
                <br>Enjoy Learning :)
            </p>

            <div class="socialmedia">
                <i class="fa fa-facebook" ></i>
                <i class="fa fa-instagram" ></i>
                <i class="fa fa-twitter" ></i>
                
                <i class="fa fa-linkedin" ></i>
            </div>

            <p id="madeby"> Sushant Twayana </p>
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



</body>
</html>