<?php
include 'connect9.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin operation</title>
    <link rel="stylesheet" type="text/css" href="print3.css" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >
</head>
<body>
    <div class="container">

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">email</th>

      <th scope="col">amountperunit</th>
      <th scope="col">roomunits</th>
      <th scope="col">payment status</th>
      <th scope="col">update payment status</th>
    </tr>
  </thead>
  <tbody>

 <?php
$sql = "Select * from `payments`";
$result = mysqli_query($con, $sql);
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $email = $row['email'];
        $amountperunit = $row['amountperunit'];
        $roomunits = $row['roomunits'];

        $paymentstatus = $row['paymentstatus'];
        echo ' <tr>
        <th scope="row">' . $id . '</th>
        <td>' . $email . '</td>
        <td>' . $amountperunit . '</td>
        <td>' . $roomunits . '</td>
        <td>' . $paymentstatus . '</td>
        <td>
    <button class="btn btn-primary"><a href="update3.php? updateid=' . $id . '" class="text-light">update</a></button>

</td>
      </tr>';
    }

}

?>



  </tbody>
</table>
<button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>

    </div>
</body>
</html>
