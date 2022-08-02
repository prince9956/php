<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<a href="http://localhost/project/index.php"> <button class="btn btn-primary btn-lg mx-3 my-3"><i class="fas fa-arrow-alt-circle-left"></i> Back</button></a>

<div class="alert alert-primary text-center font-weight-bold" role="alert">
 Logistic Driver Details
</div>
<div class="container mt-5">
<table class="table">
  <thead>
    <tr>
    <th scope="col">S. no.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">city</th>
      <th scope="col">vehicle type</th>
    </tr>
  </thead>

  <?php
  
 include 'conn.php';

 $sql = "select * from don";

 $query = mysqli_query($con,$sql);

 while($res=mysqli_fetch_array($query)){

 ?>
<tr class="text-center">
 <td> <?php echo $res['ID'];  ?> </td>
 <td> <?php echo $res['username'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['city'];  ?> </td>
 <td> <?php echo $res['state'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?ID=<?php echo $res['ID']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
  
  
  
</table>
</div>
</body>
</html>