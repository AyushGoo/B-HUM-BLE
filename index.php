<!DOCTYPE html>
<html>
<head>
  <title>Fetch image from database in PHP</title>
</head>
<body>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Name</td>
    <td>Items</td>
    <td>Images</td>
  </tr>

<?php

include "db.php"; // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM `data` WHERE 1"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['itemdetail']; ?></td>
    <td><img src="<?php echo $data['image']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php mysqli_close($conn);  // close connection ?>

</body>
</html>