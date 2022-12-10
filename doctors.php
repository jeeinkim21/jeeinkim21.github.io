<?php
$link = mysqli_connect('127.0.0.1', 'root', 'nC5oAcW1');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}

$dbName= "DocOffice2";

mysqli_select_db($link, $dbName) or die("Unable to select database $dbName");

$sql = "
SELECT lastName, firstName, specialty
from doctor
order by lastName; ";

$result = mysqli_query($link,$sql);


while ($row = mysqli_fetch_assoc($result))
{
    $doctorfirstname[] = $row['firstName'];
    $doctorlastname[] = $row['lastName'];
    $specialty[] = $row['specialty'];
}

mysqli_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Doctors</title>
<link href="doctors.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="header">
  <a class="header-items" href="index.html"> <img src="images/DoctorLogo.png"  height="100px" alt="Doctor" class="header-items"> </a>
  <b><a class="header-items" href="doctors.php">Check Doctors</a> </b>
  <b><a class="header-items" href="medicine.php">Medicine</a> </b>
  <b><a class="header-items" href="Doctorconsult.php"> Doctor Consults</a></b>
  <b><a class="header-items" href="appointment.php">Appointments</a></b>
  </div>
  
  <center><img src="images/DoctorGoals.png" height="400px" alt="Doctor" id="DocMessage"></center>
  

 
  <div class="Doctors">
    
    <div class="card doctor">
    <a href="patient.php">
      <img src="images/doctors/doctor1.png" alt="Avatar" style="width:100%">
      <div class="container">
      <?php
           echo $doctorfirstname[0];
           echo " ";
           echo $doctorlastname[0];
           echo "<h4>";
           echo $specialty[0];
           echo "</h4>";
           
        ?>
        <div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
</div> 
      </div>
      </a>
    </div>
 
    <div class="card doctor">
    <a href="patient.php">
      <img src="images/doctors/doctor2.png" alt="Avatar" style="width:100%">
      <div class="container">
      <?php
            echo $doctorfirstname[2];
            echo " ";
            echo $doctorlastname[2];
            echo "<h4>";
            echo $specialty[2];
            echo "</h4>";
        ?>
        <div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
</div> 
      </div>
      </a>
    </div>

    <div class="card doctor">
    <a href="patient.php">
      <img src="images/doctors/doctor3.png" alt="Avatar" style="width:100%">
      <div class="container">
      <?php
            echo $doctorfirstname[1];
            echo " ";
            echo $doctorlastname[1];
            echo "<h4>";
            echo $specialty[1];
            echo "</h4>";
        ?>
        <div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
      </div> 
      </div>
      </a>
    </div>

    <div class="card doctor">
    <a href="patient.php">
      <img src="images/doctors/doctor4.png" alt="Avatar" style="width:100%">
      <div class="container">
      <?php
            echo $doctorfirstname[4];
            echo " ";
            echo $doctorlastname[4];
            echo "<h4>";
            echo $specialty[4];
            echo "</h4>";
        ?>
        <div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
</div> 
      </div>
    </a>
    </div>

    <div class="card doctor">
    <a href="patient.php">
      <img src="images/doctors/doctor5.png" alt="Avatar" style="width:100%">
      <div class="container">
      <?php 
            echo $doctorfirstname[3]; 
            echo " ";
            echo $doctorlastname[3];
            echo "<h4>";
            echo $specialty[3];
            echo "</h4>";
        ?>
        <div class="product-review-stars">
  <input type="radio" id="star5" name="rating" value="5" class="visuallyhidden" /><label for="star5" title="Rocks!">★</label>
  <input type="radio" id="star4" name="rating" value="4" class="visuallyhidden" /><label for="star4" title="Pretty good">★</label>
  <input type="radio" id="star3" name="rating" value="3" class="visuallyhidden" /><label for="star3" title="Meh">★</label>
  <input type="radio" id="star2" name="rating" value="2" class="visuallyhidden" /><label for="star2" title="Kinda bad">★</label>
  <input type="radio" id="star1" name="rating" value="1" class="visuallyhidden" /><label for="star1" title="Sucks big time">★</label>
</div> 
      </div>
    </a>
    </div>

  </div>

  
</div>




