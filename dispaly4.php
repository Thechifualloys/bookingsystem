


<?php
include 'connect10.php';?>


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

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">availability</th>

    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `availability`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $availability = $row['availability'];

        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <th scope="row">' . $availability . '</th>
        <td>
        <button class="btn btn-primary"><a href="update4.php? updateid=' . $id . '" class="text-light">Update</a></button>


      </tr>';
    }

}

?>



  </tbody>
</table>

    </div>
</body>
</html>
