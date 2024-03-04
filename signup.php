<?php
error_reporting(0);
session_start();
include "connection.php";


if(isset($_REQUEST['submit'])){
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $email = $_REQUEST['email'];
    $passwd = $_REQUEST['pass1'];
    $cpasswd = $_REQUEST['cpass'];

    $check = "SELECT * from users where email_id = '{$email}' ";
    $res = mysqli_query($conn,$check);
    
    if (!$res) {
        // Error handling for query execution failure
        die('Query execution failed: ' . mysqli_error($conn));
    }
    
    if(mysqli_num_rows($res) > 0){
        print "<script>
        alert('Email aleady Exists')
        </script>";
    }else{
        $query1 = "INSERT into users (firstname,lastname,email_id,password) values ('$fname','$lname','$email','$cpasswd')";
        if(mysqli_query($conn,$query1)){
            print   "<script>
                        alert('Successfully Created. Now you can login!')
                    </script>";
                    header("location: index.php");
        }else{
            print   "<script>
                        alert('Enter same Password. Try Again!')
                    </script>";
        }
    }

}

?>