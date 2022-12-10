<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Patients</title>
<link href="patient.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="header">
  <a class="header-items" href="index.php"> <img src="images/DoctorLogo.png"  height="100px" alt="Doctor" class="header-items"> </a>
  <b><a class="header-items" href="doctors.php">Check Doctors</a> </b>
  <b><a class="header-items" href="medicine.php">Medicine</a> </b>
  <b><a class="header-items" href="Doctorconsult.php"> Doctor Consults</a></b>
  <b><a class="header-items" href="appointment.php">Appointments</a></b>
  

  </div>
  

    <?php 
    $link = mysqli_connect('127.0.0.1', 'root', 'nC5oAcW1');
   if (!$link) {
       die('Could not connect: '.mysqli_error());
   }
   
   $dbName= "DocOffice2";
   mysqli_select_db($link, $dbName) or die("Unable to select database $dbName");
   
   $sql = "
   SELECT p.lastName, p.firstName, p.phoneNo
   from Patient p, Doctor d
   where p.primaryCareDocId = d.doctorId;";
   
   $result = mysqli_query($link,$sql);
   

   ?>
    
    <center><b><h1>Doctor: <?php ?></h1></b></center>
   <center><b><p> <?php $doctors?> Patients and Numbers </p></b></center>

   <?php

   
    echo"<center>";
    echo"<table border='1'>";
    echo"<bold><tr><th>Patient First Name</th><th>Patient Last Name</th><th>Patient Phone Number</th></tr><bold>";
    while ($row = mysqli_fetch_assoc($result))
    {   
      echo"<tr><td>{$row['firstName']}</td><td>{$row['lastName']}</td><td>{$row['phoneNo']}</td></tr>";
    }
    echo"</table>";
    echo"</center>";    
   ?>
  
</div>
</body>
