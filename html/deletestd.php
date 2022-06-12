  <?php  
    
    include 'db.php';

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }
  
    $s_id = $_GET ['s_id'];

    $sql = "DELETE FROM Students WHERE Student_ID = $s_id";

    $result2 = mysqli_query($conn,$sql);

    if($result2){
        header("location:dashboard.php");
    }
?>