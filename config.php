<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "ajaxwork";


$connection = mysqli_connect($servername, $username, $password, $db);
if(!$connection){
    echo mysqli_connect_error();
}



?>