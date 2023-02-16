<?php
   $query = "SELECT DISTINCT speciality FROM doctor";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "Who are you looking up? </br>";
   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name="specialists" value="';
        echo $row["speciality"];
        echo '">' . " " .  $row["speciality"] . "<br>";
   }
   mysqli_free_result($result);
?>

<?php
mysqli_close($connection);
?>

