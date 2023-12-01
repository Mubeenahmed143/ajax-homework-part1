<?php 

include('config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);

    $enc_pass = password_hash($pass, PASSWORD_BCRYPT);


    if(!empty($name) && !empty($email) && !empty($pass)){
        $insert_query = "INSERT INTO `ajaxusers` (`id`, `name`, `email`, `pass`)
         VALUES (NULL, '$name', '$email', '$pass')";

         $result = mysqli_query($connection, $insert_query);
         if($result){
            echo "Registration Successful";
         }else{
            echo "Registration Failed";
         }

    }

}

?>