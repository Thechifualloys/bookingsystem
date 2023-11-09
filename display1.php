<?php
include 'connect8.php';?>


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
<button class="btn btn-primary my-5"><a href="admin1.php" class="text-light">Add Admin</a>
</button>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>

      <th scope="col">password</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `admins`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];

        $password = $row['password'];
        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $username . '</td>

        <td>' . $password . '</td>
        <td>
    <button class="btn btn-primary"><a href="update1.php? updateid=' . $id . '" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete1.php?  deleteid=' . $id . '" class="text-light">Delete</a></button>
</td>
      </tr>';
    }

}

?>



  </tbody>
</table>

    </div>
</body>
</html>
