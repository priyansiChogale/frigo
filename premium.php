<?php
session_start();
#header('location:login.php');

include 'conn.php';

$username = $_SESSION['username'];


$s = "select * from paidusers where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['status'] = '<div class="alert alert-warning alert-dismissible fade show " role="alert">
    <strong></strong> You are already a member
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('location:addProducts.php');
}
else{
    $rn = $username."1000";
    // $rn= "select FLOOR(RAND() * 99999) AS random_num
    // WHERE 'random_num' NOT IN (SELECT uid FROM paidusers)
    // LIMIT 1";
    $reg = "insert into paidusers(uid,username) values('$rn','$username')";
    
    mysqli_query($con, $reg);
    $_SESSION['rn'] = $rn;

    $_SESSION['status'] = '<div class="alert alert-light alert-dismissible fade show " role="alert">
    <strong>Congratulations!</strong>  You are successfully a part of Premium Frigo <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('location:addProducts.php');
}
?>