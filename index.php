<?php 
include ("config.php")
?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

   <div class="container mt-5">

   <?php 
   $fetch = "SELECT * from ajaxusers";
   $result = mysqli_query($connection, $fetch);
   if($result){
   if(mysqli_num_rows($result) > 0){

   
   ?>


    <h1>Register user by ajax</h1>

   <div class="row">


   <div class="col-md-6" style="border: 15px solid green;   border-radius: 8px;">
   <form class="form-group " id="form">
     <label for="name">Name</label>
     <input class="form-control" type="text" name="name" id="name" style="border: 2px solid red;" >

     <label for="email">Email</label>
     <input class="form-control" type="email" name="email" id="email" style="border: 2px solid red;" >

     <label for="pass">Password</label>
     <input class="form-control" type="password" name="pass" id="pass" style="border: 2px solid red;" >

     <input class="btn btn-success mt-3 mb-2" type="submit" name="register" id="register" value="register">

</form>
   </div>

   <div class="col-md-6 mt-4">

   <table class="table table-dark table-striped">
   
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
    </tr>
  </thead>
  <tbody>
    <!-- loop start here -->
    <?php 
    while($data = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['name'] ?></td>
      <td><?php echo $data['email'] ?></td>
      <td><?php echo $data['pass'] ?></td>     
    </tr>
    <?php 
    } 
  }
}
    ?>
  
  </tbody>

</table>

   
   </div>


   </div>
   </div>
 

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
  </script>
   <!-- jquery cdn  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <script src="./app.js"></script>
</body>

</html>