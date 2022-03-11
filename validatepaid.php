<?php
session_start();

include 'conn.php';

$uid = $_POST['uid']; //change values inside single quotes
$username = $_SESSION['username'];
/*if(!empty($_POST['role'])) {
    $selected = $_POST['role'];
    echo 'You have chosen: ' . $selected;
  } else {
    echo 'Please select the value.';
  }*/

    $s = "select * from paidusers where username = '$username' && uid = '$uid'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){
        $_SESSION['username'] = $username;
        header('location:junkscore.php');
        // $_SESSION['status'] = '<div class="alert alert-success">
        //  <strong>Hey !</strong> Login successful.
        //  </div>';
    }
    else{
       $_SESSION['status'] = '<div class="alert alert-danger alert-dismissible fade show " role="alert">
       <strong>Oops!</strong> Invalid uid
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
        header('location:addProducts.php');
    }


?>