<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OHIP Medical Records - Doctors Updated</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are our Doctors:</h1>
<ol>
<?php
   $whichlicensenumber= $_POST["doclicensenum"];
   $docfirstname = $_POST["docfirstname"];
   $doclastname = $_POST["doclastname"];
   $doclicensedate = $_POST["doclicensedate"];
   $docbirthdate = $_POST["docbirthdate"];
   $dochosworksat = $_POST["dochosworksat"];
   $docspeciality = $_POST["docspeciality"];


   $query = 'INSERT INTO doctor values("' . $whichlicensenum . '","' . $docfirstname . '","'$
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your doctor was added!";
   mysqli_close($connection);

?>
</ol>
</body>
</html>
