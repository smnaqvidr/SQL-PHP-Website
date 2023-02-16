<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OHIP Medical Records - Hospital Data</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the data for your hospital:</h1>
<ol>
<?php
   $whichOwner= $_POST["hospitals"];
   $query = 'SELECT * FROM hospital;
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["hosname"];
        echo " -- ";
        echo $row["city"];
        echo " -- ";
        echo $row["province"];
        echo " -- ";
        echo $row["numofbed"] . "</li>";

     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
