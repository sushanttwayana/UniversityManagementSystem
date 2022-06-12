<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link rel="stylesheet" type="text/css" href="../css/blog.css">
    <link rel="stylesheet" type="text/css" href="../css/course.css">
    <link rel="stylesheet" type="text/css" href="../css/about.css">
    <link rel="stylesheet" type="text/css" href="../css/home.css">
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
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
        
        <h1>Our Cetificates & Online Programs for 2022</h1>
    </section>

    <!-- blog page -->
        <section class="blog content">
            <div class="row">

                <div class="blog-left">
                    <img src="../images/certificate.jpg" alt="">
                    <h3>Our Cetificates & Online Programs for 2022</h3>

                    <p>
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ratione voluptates, consequatur, dignissimos excepturi, eveniet unde soluta cum quas quasi debitis beatae quaerat maiores corrupti doloribus ea veritatis 
                        facere tenetur consequuntur perspiciatis molestias voluptatibus doloremque? Quisquam corporis ipsa voluptatem tenetur, porro magni rem natus, animi inventore magnam, nemo nulla esse veniam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto alias consequatur sit odit libero, autem nisi ipsum dolorum animi sequi?<br> </br>

                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi cumque corrupti facilis quod quidem perspiciatis magnam deleniti incidunt earum quas minima officia ullam, assumenda vitae dolorum sunt beatae deserunt 
                        autem tenetur minus iste odit asperiores? Minus, voluptatem. Aperiam natus, dolorem eos quibusdam voluptatum soluta voluptas architecto dignissimos vero iusto sequi quam eum nemo, doloribus libero possimus atque nam voluptatibus debitis unde asperiores provident. 
                        Praesentium fuga iusto ipsum mollitia magnam minima unde dicta magni ipsa repellendus quo eum eos neque, dolorum quisquam hic atque, cumque corporis. Id odio explicabo natus quo, repellendus numquam nam corrupti nemo fugit et consequatur, illum autem?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae eos ab, minus quam earum quasi temporibus repudiandae nam in ipsum sequi deserunt fugit eligendi, voluptatibus delectus accusamus minima nemo labore possimus doloribus fugiat dolores? Odio molestiae possimus voluptate ullam maiores?



                        <br> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime incidunt minus natus rem sunt quidem, facilis eius blanditiis vero animi quo non doloremque deleniti? Perspiciatis in odit, libero ipsam harum accusamus vero quas quod est!
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, eaque, dolore eos neque, id ullam nam molestias ad quos ab perspiciatis laudantium eveniet incidunt corporis?
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia velit ipsam, sint porro atque commodi expedita officia maxime optio dolorum ipsa impedit veniam earum vitae illum laborum! Quae illum sequi ipsum dolorem perspiciatis qui vel.

                        <br> <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aut delectus commodi itaque, temporibus nulla non aspernatur inventore eum molestiae.
                    </p>

                    <!-- commentbox -->
                    <div class="commentbox">
                        
                        <h3>Leave your comment</h3>
                        <form class="">
                            <input type="text" placeholder=" Your Name" id="myName" required>
                            <input type="email" placeholder="Your Email" id="myEmail" required>
                            <input type="number" placeholder="Your Contact" min="10" max="15">
                            <textarea rows="5">Your Comment</textarea>

                            <button type="submit" class="press">POST COMMENT</button>
                        </form>

                      
                    </div>
                </div>

                <div class="blog-right">
                    <h3>Post Categories</h3>

                    <div>
                        <span>Business Analytics</span>
                        <span>20</span>
                    </div>

                    <div>
                        <span>Data Science</span>
                        <span>30</span>
                    </div>

                    <div>
                        <span>Machine Learning</span>
                        <span>100</span>
                    </div>
                    <div>
                        <span>Auto Cad</span>
                        <span>98</span>
                    </div>
                    <div>
                        <span>Technicians</span>
                        <span>45</span>
                    </div>
                    <div>
                        <span>Jouralism</span>
                        <span>10</span>
                    </div>

                    <div>
                        <span>Jouralism</span>
                        <span>10</span>
                    </div>

                    <div>
                        <span>Departments</span>
                        <span>8</span>
                    </div>


                </div>


            </div>
        </section>
    
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



</body>
</html>