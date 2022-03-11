<?php

include "conn.php"; // Using database connection file here

$pid = $_GET['pid']; // get id through query string
$tablename = $_GET['tablename'];
$del = mysqli_query($con ,"delete from $tablename where pid = '$pid'"); // delete query

if($del)
{
    mysqli_close($con); // Close connection
    header("location:addProducts.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>