<?php
   $query = "SELECT hosname FROM hospital";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }

   while ($row = mysqli_fetch_assoc($result)) {
        echo '<input type="radio" name=hospitals" value="';
        echo $row["hosname"];
        echo '">' . $row["hosname"] . "<br>";
   }
   mysqli_free_result($result);
?>

<?php
mysqli_close($connection);
?>
