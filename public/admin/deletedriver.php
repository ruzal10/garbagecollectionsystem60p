<?php 
session_start();
$delid = $_GET['id'];
$con = mysqli_connect('localhost','root','','project_gcs');
if($con === false)
{
    die("Error connection");
}
$qry = "DELETE FROM drivers WHERE driver_id=$delid";

if(mysqli_query($con,$qry)){
    $_SESSION['message'] = "Driver Delete successfully!";
    echo '<script>window.location.href = "driver.php";</script>';

}
else
{
    echo '<script>alert("Error on Deleting Driver")</script>';

    echo '<script>window.location.href = "driver.php";</script>';
}
?>