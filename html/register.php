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
    <link rel="stylesheet" type="text/css" href="../css/register.css">
   
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    h3{
  font-family: Verdana, Geneva, Tahoma, sans-serif; 
  font-size: 32px;         
  color: rgb(54, 68, 95);
  text-align: center; 
  text-decoration: underline;
}

table{
  font-family: Verdana, Geneva, Tahoma, sans-serif; 
  color:white; 
  font-size: 11px; 
  font-style: normal;
  font-weight: bold;
  background-color: rgb(104, 92, 92); 
  background-image:url("../images/bg.jpg");
  background-size:cover;
  background-position: center;
  border-collapse: collapse; 
  border: 1px solid rgb(104, 92, 92);
  margin-left:100px;
  width:800px;
}

/* table.inner{
  border: 0px
} */

table td{
  font-size:15px;
  padding:0px 20px;
  margin-top:30px;
}

table td input{
  width:200px;
  margin-top:25px;
}
</style>
</head>
 
<body style="background-color:lightgrey;">
    <form action="InsertContact" method="post">


 
<table align="center" cellpadding = "10">
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
        
        <h1>Register Here</h1>
    </section>


      <section >
        

  <div  class="registerform">

  <h2 style="font-size: 25px;">Student Registration Form</h2>
 <table>     
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>LAST NAME</td>
<td><input type="text" name="Last_Name" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!-- ----- Date Of Birth ------------------------------------------------------ -->
<!-- <tr>
<td>DATE OF BIRTH</td>
 
<td>
<select name="Birthday_day" id="Birthday_Day">
<option value="-1">Day:</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
 
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
 
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
 
<option value="31">31</option>
</select>
  -->
<!-- <select id="Birthday_Month" name="Birthday_Month">
<option value="-1">Month:</option>
<option value="January">Jan</option>
<option value="February">Feb</option>
<option value="March">Mar</option>
<option value="April">Apr</option>
<option value="May">May</option>
<option value="June">Jun</option>
<option value="July">Jul</option>
<option value="August">Aug</option>
<option value="September">Sep</option>
<option value="October">Oct</option>
<option value="November">Nov</option>
<option value="December">Dec</option>
</select>
 
<select name="Birthday_Year" id="Birthday_Year">
 
<option value="-1">Year:</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr> -->
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
 
<!----- Gender ----------------------------------------------------------->
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<!----- Address ---------------------------------------------------------->
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30"></textarea></td>
</tr>
 
<!----- City ---------------------------------------------------------->
<tr>
<td>CITY</td>
<td><input type="text" name="City" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr>
 
 
<!----- State ---------------------------------------------------------->
<!-- <tr>
<td>STATE</td>
<td><input type="text" name="State" maxlength="30" />
(max 30 characters a-z and A-Z)
</td>
</tr> -->
 
<!----- Country ---------------------------------------------------------->
<tr>
<td>COUNTRY</td>
<td><input type="text" name="Country"  readonly="readonly" /></td>
</tr>
 

<!----- Qualification---------------------------------------------------------->
<tr>
<td>QUALIFICATION <br /><br /><br /><br /><br /><br /><br /></td>
 
<td>
<table>
 
<tr>
<td align="center"><b>Sl.No.</b></td>
<td align="center"><b>Examination</b></td>
<td align="center"><b>Board</b></td>
<td align="center"><b>Percentage</b></td>
<td align="center"><b>Year of Passing</b></td>
</tr>
 
<tr>
<td>1</td>
<td>Class X</td>
<td><input type="text" name="ClassX_Board" maxlength="30" /></td>
<td><input type="text" name="ClassX_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassX_YrOfPassing" maxlength="30" /></td>
</tr>
 
<tr>
<td>2</td>
<td>Class XII</td>
<td><input type="text" name="ClassXII_Board" maxlength="30" /></td>
<td><input type="text" name="ClassXII_Percentage" maxlength="30" /></td>
<td><input type="text" name="ClassXII_YrOfPassing" maxlength="30" /></td>
</tr>
 

<tr>
<td></td>
<td></td>
<td align="center">(10 char max)</td>
<td align="center">(upto 2 decimal)</td>
</tr>
</table>
 
</td>
</tr>
 
<!----- Course ---------------------------------------------------------->
<tr>
<td>COURSES<br />APPLIED FOR</td>
<td>

<input type="radio" name="Architecture" value="Architecture">  Architecture<br>

<input type="radio" name="Architecture" value="Computer">Computer<br>

<input type="radio" name="Architecture" value="Civil">Civil<br>

<input type="radio" name="Architecture" value="Electronics">Electronics<br>

<input type="radio" name="Architecture" value="Aerospace">Aerospace<br>

<input type="radio" name="Architecture" value="Chemical">Chemical<br>

<input type="radio" name="Architecture" value="BioMedical">Bio-Medical<br>

<input type="radio" name="Architecture" value="Electrical">Electrical
</td>
</tr>
 
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" style="border-radius: 10px; padding:5px; width: 12%;">
<input type="reset" value="Reset" style="border-radius: 10px; padding:5px; width: 12%;">
</td>
</tr>
</table>
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

            <p id="madebyme"> Sushant Twayana & Samesh Bajracharya </p>
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

            <p id="madebyme"> Sushant Twayana & Samesh Bajracharya </p>
        </section>


</body>


    
</html>



















<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

 
 
</form>
</body>
</html>