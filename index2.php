<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <?php
       include 'connectdb.php';
   ?>

   <h1> Welcome to OHIP Medical Records</h1>


   <p>
   <hr>
   <p>
   <h2> OHIP DOCTOR INFORMATION</h2>


   <form action = "getdocinfo.php" method = "post">
   Select an option to view our OHIP Doctors</br>
   <input type="radio" value="lastname" name="docinfo"/> Last Name</br>
   <input type="radio" value="birthdate" name="docinfo"/> Birth Date</br>

   <br/>
   <input type = "submit" value = "View Doctors">

   </form>
   
   <p>
   <hr>
   <p>
   <h2> OHIP SPECIALISTS </h2>
   <form action="getspecialists.php" method="post">
   Select a speciality to view our OHIP specialists
   <?php
       include 'getspecs.php';
   ?>
   </br>
   <input type="submit" value="View Specialists">
   </form>

   <p>
   <hr>
   <p>
   <h2> INSERT A NEW DOCTOR:</h2>
   <form action="addnewdoctor.php" method="post">
   New Doctor's License Num: <input type="text" name="doclicensenum"><br><br>
   New Doctor's First Name: <input type="text" name="docfirstname"><br><br>
   New Doctor's Last Name: <input type="text" name="doclastname"><br><br>
   New Doctor's License Date: <input type="text" name="doclicensedate"><br><br>
   New Doctor's Birth Date: <input type="text" name="docbirthdate"><br><br>
   New Doctor's Work Hospital: <input type="text" name="dochosworksat"><br><br>
   New Doctor's Speciality: <input type="text" name="docspeciality"><br><br>

   <input type="submit" value="Add New Doctor">

   </form>
 
   <p>
   <hr>
   <p>
   <h2> DELETE AN EXISTING DOCTOR:</h2>
   Select which doctor you want to delete by entering the license number
   <form action="deletedoctor.php" method="post">
   <?php
       include 'getdocinfo.php';
   ?>

   Doctor's License Num: <input type="text" name="doclicensenum"><br><br><br>
   <input type="submit" value="Delete Doctor">
   </form>


   <p>
   <hr>
   <p>
   <h2> SEE PATIENTS BEING TREATED BY OUR DOCTORS:</h2>
   Select which doctor's patients you want to see
   <form action="seepatients.php" method="post">
   <?php
       include 'getdocinfo.php';
   ?>
   Input License Number of a doctor to see their patients:
   <input type="text" name="doclicense"><br><br>
   <input type="submit" value="Enter">
   </form>

   <p>
   <hr>
   <p>
   <h2> SEE HOSPITAL DATA: </h2>
   Select which hospital's data  you want to see
   <form action="seehospital.php" method="post">
   <?php
       include 'gethospital.php'
   ?>

   <br> <input type = "submit" value = "Enter">
   </form>


   <p>
   <hr>
   <p>
   <h2> UPDATE HOSPITAL BEDS: </h2>
   Select which hospital's beds you want to update
   <form action="updatebed.php" method="post">
   <?php
       include 'gethospital.php'
   ?>

   <br> <input type = "submit" value = "Enter">
   </form>

  <?php
   mysqli_close($connection);
   ?>



</body>
</html>

   






































