 <?php  


    include 'db.php';

    $id = $_POST['s_id'];
    $fname = $_POST['fname'];
    $lname =$_POST['lname'];
    $address = $_POST['address'];
    $num = $_POST['no'];

    $sql = "UPDATE students SET Student_ID ='$id', FirstName ='$fname', LastName='$lname', Address='$address', Phone_Number = '$num' WHERE Student_ID = $id";

    $result = mysqli_query($conn, $sql);

    if($result){
    header("location:dashboard.php");
    }

?>