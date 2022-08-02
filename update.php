<?php

 include 'conn.php';

 if(isset($_POST['done'])){
  $ID = $_GET['ID'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $address=$_POST['address'];
  $city=$_POST['city'];
  $state=$_POST['state'];
 $sql = "UPDATE `don` SET `ID`='$ID',`username`='$username',`password`='$password',`address`='$address',`city`='$city',`state`='$state' WHERE ID=$ID "; 

 $query = mysqli_query($con,$sql);

 

 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 <a href="http://localhost/project/r/display.php"> <button class="btn btn-primary btn-lg mx-3 my-3"><i class="fas fa-arrow-alt-circle-left"></i> Back</button></a>
 <div class="alert alert-primary text-center font-weight-bold" role="alert">
 Add Driver Details
</div>
 <form method="post" >

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputEmail4">Name</label>
    <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="Enter Your Name">
  </div>
  <div class="form-group col-md-6">
    <label for="inputPassword4">Email</label>
    <input type="text" class="form-control" name="password" id="inputPassword4" placeholder="Enter Your Email">
  </div>
</div>
<div class="form-group">
  <label for="inputAddress">Address</label>
  <input type="text" class="form-control"  name="address" id="inputAddress" placeholder="1234 Main St">
</div>

<div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputCity">City</label>
    <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter your city Name">
  </div>
  <div class="form-group col-md-4">
    <label for="inputState">choose vhecle</label>
    <select id="inputState"  name="state" class="form-control">
   
      <option>Two Wheeler</option>
      <option>Three wheeler</option>
      <option>Four Wheeler</option>
    </select>
  </div>
 
</div>

<button type="submit"  name="done" class="btn btn-primary">ADD</button>
</form>
 </div>
</body>
</html>