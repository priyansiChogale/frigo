<?php
session_start();

include 'conn.php';

$username = $_POST['user']; //change values inside single quotes
$password = $_POST['pwd'];

/*if(!empty($_POST['role'])) {
    $selected = $_POST['role'];
    echo 'You have chosen: ' . $selected;
  } else {
    echo 'Please select the value.';
  }*/

    $s = "select * from users where username = '$username' && password = '$password'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    
    if($num == 1){

        $_SESSION['username'] = $username;
        $tablename = $_SESSION['username'];
$s2 = "select * from $tablename WHERE pexpiry > CURDATE() order by pexpiry";
$result2 = mysqli_query($con, $s2);
$num2 = mysqli_num_rows($result2);


if($num2 > 0 ){
    $count = 0;
    // $a=[];
    while($count<1 and $row= mysqli_fetch_assoc($result2)){
        $due = $row['pexpiry'];
        $seconds_to_expire = strtotime($due) - time();
        if ($seconds_to_expire < 3*86400) {
        $_SESSION['noti'] = '<div class="alert alert-warning alert-dismissible fade show " role="alert">
              <strong>Oops!</strong> Your one product is about to expire within 3 days
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';}
            header('location:addProducts.php');
            // $a[$count] = $row['pname'];
            $count =+ 1;
          }
        
        }
        else{
            header('location:addProducts.php');
        }
        
        // $_SESSION['status'] = '<div class="alert alert-success">
        //  <strong>Hey !</strong> Login successful.
        //  </div>';
    }
    else{
       $_SESSION['status'] = '<div class="alert alert-danger alert-dismissible fade show " role="alert">
       <strong>Oops!</strong> Invalid username or password
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
        header('location:index.php');
    }


?>