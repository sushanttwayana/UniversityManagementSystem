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
    <div class="container">
        <header>Courses</header>

        <form action="datainsert3.php" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Course Name</label>
                            <input type="text" name="cname" placeholder="Enter course name" required>
                        </div>

                        <div class="input-field">
                            <label>Course Code</label>
                            <input type="text" name="ccode" placeholder="Enter course code" required>
                        </div>

                        <div class="input-field">
                            <label>Credit Hour</label>
                            <input type="number" name="chour" placeholder="Enter credit hour" min="1" max = "5" required>
                        </div>
                    </div>
                </div>
                       
                        <button class="sumbit">
                            <span class="btnText">ADD</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>


    
    
</body>
</html>
