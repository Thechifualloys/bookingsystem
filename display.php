<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">
<button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a>
</button>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">gender</th>
      <th scope="col">email</th>
      <th scope="col">phone number</th>
      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `registration`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $gender = $row['gender'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];
        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $username . '</td>
        <td>' . $gender . '</td>
        <td>' . $email . '</td>
        <td>' . $number . '</td>
        <td>' . $password . '</td>
        <td>
    <button class="btn btn-primary"><a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>

      </tr>';
    }

}

?>



  </tbody>
</table>

    </div>
</body>
</html>
