<?php
session_start();
#header('location:login.php');

include 'conn.php';

$pname = $_POST['pname'];
$pexpiry = $_POST['pexpiry'];
$tablename = $_SESSION['username'];

$s = "select * from $tablename where pname = '$pname'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

// if($num == 1){
//     $_SESSION['status'] = '<div class="alert alert-danger ">
//     <strong>Hey !</strong> Product name already exists. Please provide unique product name.
//     </div>';
//     header('location:addProducts.php');
// }
// else{
    $q = "insert into $tablename(pname, pexpiry) values('$pname','$pexpiry')";
    mysqli_query($con, $q);
    $_SESSION['status'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Hey !</strong> Product added Successfully
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    header('location:addProducts.php');
//}

?>