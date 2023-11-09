<?php
include 'connect4.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Boooking report</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2>booking data</h2>
      <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">email</th>
      <th scope="col">checkindate</th>
      <th scope="col">checkoutdate</th>
      <th scope="col">roomtype</th>
      <th scope="col">roomunits</th>

    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `bookdetails`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $username = $row['username'];
        $email = $row['email'];
        $checkindate = $row['checkindate'];
        $checkoutdate = $row['checkoutdate'];
        $roomtype = $row['roomtype'];
        $roomunits = $row['roomunits'];
        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $username . '</td>
        <td>' . $email . '</td>
        <td>' . $checkindate . '</td>
        <td>' . $checkoutdate . '</td>
        <td>' . $roomtype . '</td>
        <td>' . $roomunits . '</td>

      </tr>';
    }

}

?>



  </tbody>
</table>



      <div class="text-center">
        <a href="print.php" class="btn btn-primary">Print report here.</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>

