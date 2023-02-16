<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OHIP Medical Records - Your Doctor's Patients</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your doctor's patients:</h1>
<ol>
<?php
   $whichDoctor= $_POST["doclicense"];



   $query = 'select ohipnum, firstname, lastname from patient, doctor, looksafter where look$
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);

?>
</ol>
</body>
</html>
