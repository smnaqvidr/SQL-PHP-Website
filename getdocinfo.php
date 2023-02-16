<?php

$sorted_info = $_POST['docinfo'];

echo ' Doctor information sorted by: '.$sorted_info . "</br>". "</br>";
echo "License Number - Name - License Date - Birth Date - HosWorksAt - Speciality";
if ($sorted_info == 'lastname'){

        $query = "SELECT * FROM doctor ORDER BY lastname";
        $dbhost = "localhost";
        $dbuser= "root";
        $dbpass = "Watchdogs29";
        $dbname = "assign2db";
        $connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
        $result = mysqli_query($connection,$query);
        if (!$result) {
                die("databases query failed.");
        }
        echo "<ol>";
        while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>";
                echo $row["licensenum"];
                echo " -- ";
                echo $row["firstname"];
                echo "     ";
                echo $row["lastname"];
                echo " -- ";
                echo $row["licensedate"];
                echo " -- ";
                echo $row["birthdate"];
                echo " -- ";
                echo $row["hosworksat"];
                echo " -- ";
                echo $row["speciality"] . "</li>";
        }
        mysqli_free_result($result);
        echo "</ol>";
} else {
         $query = "SELECT * FROM doctor ORDER BY birthdate";
        $dbhost = "localhost";
        $dbuser= "root";
        $dbpass = "Watchdogs29";
        $dbname = "assign2db";
        $connection = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
        $result = mysqli_query($connection,$query);
        if (!$result) {
                die("databases query failed.");
        }
        echo "<ol>";
        while ($row = mysqli_fetch_assoc($result)) {
		echo "<li>";
                echo $row["licensenum"];
                echo " -- ";
                echo $row["firstname"];
                echo "     ";
                echo $row["lastname"];
                echo " -- ";
                echo $row["licensedate"];
                echo " -- ";
                echo $row["birthdate"];
                echo " -- ";
                echo $row["hosworksat"];
                echo " -- ";
                echo $row["speciality"] . "</li>";
        }
        mysqli_free_result($result);
        echo "</ol>";
}
?>
