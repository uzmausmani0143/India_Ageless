<?php
session_start();
include "connection.php";

if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $cpassw = $_POST['passwd'];

    $sql= "SELECT * from users where email_id = '{$email}' and password = '{$cpassw}' ";

    $res = mysqli_query($conn,$sql);

    if (!$res) {
        die('Query execution failed: ' . mysqli_error($conn));
    }

    if (mysqli_num_rows($res) == 1) {
        // Fetch the user details
        $user = mysqli_fetch_assoc($res);

        // Store user_id and other relevant details in the session
        $_SESSION['users_id'] = $user['users_id'];
        $_SESSION['firstname'] = $user['firstname'];

        // Close the result set
        mysqli_free_result($res);

        // Redirect to index.php after successful login
        header("location: index.php");
        exit();
    } else {
        print "<script> 
                alert('Incorrect email or password') 
             </script>";
        header("location: login-register.php");
        exit();
    }
    
}



?>