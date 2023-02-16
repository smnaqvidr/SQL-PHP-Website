<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>OHIP Medical Records - Our Specialists</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are our Specialists <h1/>
<ol>
<?php
   $whichOwner= $_POST["specialists"];
   $query = 'SELECT * FROM doctor WHERE speciality="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    echo "License Number - Name - License Date - Birth Date - HosWorksAt - Speciality" . "</$
    while ($row=mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo "     ";
        echo $row["licensenum"];
        echo "   --   ";
        echo $row["firstname"];
        echo "     ";
        echo $row["lastname"];
        echo "   --   ";
        echo $row["licensedate"];
        echo "   --   ";
        echo $row["birthdate"];
        echo "   --   ";
        echo $row["hosworksat"];
        echo "   --   ";
        echo $row["speciality"] . "</li>";

     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
