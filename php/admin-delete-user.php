<!DOCTYPE html>
<?php
include  "../include/connection.php";

$userID = $_POST['userID'];

    echo"<script>alert('No '+$userID+' user was deleted.')</script>";

    if(isset($userID))
    {
        $deleteUserQuery = "delete from User where id =$userID";
        $runDeleteUser = mysqli_query($conn, $deleteUserQuery);

        $getUsersQuery = "select * from User";
        $runUsersQuery = mysqli_query($conn, $getUsersQuery);
        echo"<h1> Manage Users</h1>";
        while($rowUsers = mysqli_fetch_array($runUsersQuery))
        {
            $userName = $rowUsers['username'];
            $userID = $rowUsers['id'];
            $userEmail = $rowUsers['email'];
            $userImage = $rowUsers['user_imag'];
            echo"
            <div class='user'>
                <div class='main' onclick=location.href='../profile.php.php?id=$userID'>
                    <img src='../images/$userImage' alt=''>    
                    <h2>#$userID</h2>
                    <p>  $userName </p>
                    <p>  $userEmail </p>
                </div>
            <img class='delete' src='../images/delete.png' alt='' onclick='deleteUser($userID)' title='Delete';>
            </div>";
        }
    }
    else {
    echo"<script>
        window.open('../index.php', '_self')
    </script>";

    }
    ?>
