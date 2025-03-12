<?php
include 'connect.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>
    
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

  <?php


$query = "SELECT * FROM `employee` ";
$result = mysqli_query($con, $query);
if(!$result){
    die("query failed".mysqli_error());
}
else{
    while($row = mysqli_fetch_assoc($result)){
        ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['Mobile']; ?></td>
    <td><?php echo $row['Password']; ?></td>
    
    <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">
                        <button class="update">Update</button>
                    </a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?')">
                        <button class="delete">Delete</button>
                    </a>
                </td>

</tr>

<?php

    }
}

?>


</tbody>
</table>
</div>
    
</body>
</html>