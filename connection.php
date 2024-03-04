
<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "ia_users";

$conn = new mysqli($server,$username,$password,$db);

if($conn === false){
    die("ERROR: Could not connect. ".mysqli_connect_error());
   
}

?>