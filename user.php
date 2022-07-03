
<?php
include  "connection.php";

if(isset($_POST['submit'])){
    
    
    $bkno = $_POST['bkno'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `Booking` VALUES('$bkno','$name', '$email', '$mobile', '$city');";

    $result = mysqli_query($con, $sql);

    if($result){
        // echo " Inserted";
        header('location:display.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container my-5">
    <form method = "post">
  <div class="mb-3">
    <label class="form-label">Boooking No</label>
    <input type="text" class="form-control" placeholder="Enter your Booking Numner" name= "bkno" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label class="form-label">Traveller Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name= "name" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label class="form-label">Traveller Email</label>
    <input type="email" class="form-control" placeholder="Enter your Email" name= "email" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label class="form-label">Traveller Phone</label>
    <input type="text" class="form-control" placeholder="Enter your mobile number" name= "mobile" autocomplete = "off">
  </div>
  <div class="mb-3">
    <label class="form-label">City</label>
    <input type="text" class="form-control" placeholder="Enter your city" name= "city" autocomplete = "off">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>