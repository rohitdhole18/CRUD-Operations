<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Booking No</th>
      <th scope="col">Traveller Name</th>
      <th scope="col">Traveller Email</th>
      <th scope="col">Traveller Mobile</th>
      <th scope="col">City</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

  <?php
  include "connection.php";
  $sql = "select * from `Booking`";
  $result = mysqli_query($con, $sql);
  if($result){

    while($row = mysqli_fetch_assoc($result)){
        $bkno = $row['BkNo'];
        $name = $row['Tname'];
        $email = $row['Email'];
        $mobile = $row['Phone'];
        $city = $row['City'];

        echo '<tr>
        <th scope="row">'.$bkno.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$city.'</td>
      </tr>
      <td>
      <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$bkno.'">Update</a></button>
      <button class="btn btn-danger"><a class="text-light"href="delete.php?deleteid='.$bkno.'">Delete</a></button>
     </td>';
    }
  }

  ?>

 
  </tbody>
</table>
    </div>
</body>
</html>