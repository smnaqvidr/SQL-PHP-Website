<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OHIP Medical Records - Doctor Deletion</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are our Updated Doctors:</h1>
<ol>
<?php
   $whichDoctor= $_POST["doclicensenum"];
   $petName = $_POST["petname"];
   $species =$_POST["species"];

   $query = 'DELETE FROM doctor WHERE licensenum=("' . $whichDoctor . '")';
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your pet was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
