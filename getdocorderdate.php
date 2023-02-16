<?php
$query = "SELECT * FROM doctor ORDER BY birthdate";
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
?>
