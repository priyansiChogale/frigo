<?php
session_start();
#header('location:login.php');

include 'conn.php';

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pwd'];
if (strlen($password) <= 8 and !preg_match("#[0-9]+#",$password) and !preg_match("#[A-Z]+#",$password) and !preg_match("#[a-z]+#",$password)) {
   $_SESSION['status'] = '<div class="alert alert-warning alert-dismissible fade show " role="alert">
    <strong>Oops!</strong> Your Password Must Contain At Least 8 Characters, one uppercase character, one lower case character and one digit
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('location:index.php');
}
else{



$s = "select * from users where username = '$username'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['status'] = '<div class="alert alert-warning alert-dismissible fade show " role="alert">
    <strong>Oops!</strong> Username already exists
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('location:index.php');
}
else{
    $reg = "insert into users (username, email, password) values('$username','$email','$password')";
    mysqli_query($con, $reg);

    $q = "create table $username (pid int(11) AUTO_INCREMENT Primary Key, pname varchar(255) NOT NULL, pexpiry date NOT NULL) ";
    mysqli_query($con, $q);

    $_SESSION['status'] = '<div class="alert alert-light alert-dismissible fade show " role="alert">
    <strong>Congratulations!</strong>  You are successfully a part of Frigo
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    header('location:index.php');
}
}
?>