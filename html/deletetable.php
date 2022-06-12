<?php

    $severname= 'localhost';
    $username = 'root';
    $password = '';
    $db = 'university_management_system';

   $conn = mysqli_connect($severname, $username, $password, $db);

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $id = $_GET ['id'];
    $sql = "DELETE FROM Feedback where Student_ID = $id";  
    $result= mysqli_query($conn, $sql);

    if($result){
        header("location:contact.php");
    }
    else{
        echo "deletion unsuccess".mysqli_error($conn);
    }
?>

<?php

    $severname= 'localhost';
    $username = 'root';
    $password = '';
    $db = 'university_management_system';

   $conn = mysqli_connect($severname, $username, $password, $db);

    if(!$conn){
        die('Could not Connect My Sql:.mysqli_error()');
    }

    $id = $_GET ['id'];
    $sql = "DELETE FROM Comment where Person_ID = $id";  
    $result= mysqli_query($conn, $sql);

    if($result){
        header("location:blog.php");
    }
    else{
        echo "deletion unsuccess".mysqli_error($conn);
    }
?>