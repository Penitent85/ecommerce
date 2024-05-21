<!DOCTYPE html>
<?php
include  "../include/connection.php";

$userEmail = $_COOKIE['userEmail'];
$userAddress = $_POST['userAddress'];

$userName = $_POST['userName'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $userEmail = htmlentities(mysqli_real_escape_string($_POST['userEmail']));
    echo"<script>alert($userName)</script>";
    echo $userName;
}



if(isset($userEmail) && isset($userID))
{
    echo"<script>alert($userID )</script>";
    $insertUserDataQuery = "update User set email='$userEmail', name='$userName', user_address='$userAddress' where user_id = '$userID'";
    echo"<script>alert($userID )</script>";
    $runinsertUserDataQuery = mysqli_query($conn, $insertUserDataQuery);
}
else
{
    //echo"<script>window.open('../index.php', '_self')</script>";
}

?>
