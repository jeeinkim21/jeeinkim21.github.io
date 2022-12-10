
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nullptrs Office</title>
<link href="home.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" src="images/DoctorLogo.png">
</head>

<body>

  <div class="header">

  <a class="header-items" href="index.php"> <img src="images/DoctorLogo.png"  height="100px" alt="Doctor" class="header-items"> </a>
  <b><a class="header-items" href="doctors.php">Check Doctors</a> </b>
  <b><a class="header-items" href="medicine.php">Medicine</a> </b>
  <b><a class="header-items" href="Doctorconsult.php">Doctor Consults</a></b>
  <b><a class="header-items" href="appointment.php">Appointments</a></b>
  </div>

  <?php

$link = mysqli_connect('127.0.0.1', 'root', 'nC5oAcW1');
   if (!$link) {
       die('Could not connect: '.mysqli_error());
   }
   
   $dbName= "DocOffice2";
   mysqli_select_db($link, $dbName) or die("Unable to select database $dbName");

$ssn = mysqli_real_escape_string($link, $_POST["specialty"]);

$sql = "SELECT specialty FROM doctor d where d.specialty LIKE '%" . $specialty .  "%' 
";
$result=mysqli_query($link, $sql);

// check if the query returned a result
if (!$result) {
    echo 'There are no results for your search';
} else {
  // result to output the table
  echo "<div style='margin-left: 100px;margin-top:20px;height:1000px;overflow-y:scroll;width:1000px;'><Table border = '1' cellpadding='5'>";

  echo "<tr> 
  <td style='background-color:#594236;color:white;font-weight:bold;'> 
  Specialty</td> 
  ";
  echo"<b>Receive Consulting from the following specialties:<b>";
  
  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {   echo"
      <tr>
      <td> 
      {$row ["specialty"] }
      </td>
      <tr>"
      ;
  }
  echo "</table>";
}
echo"<form action='video.php' method='post'>";
 echo"<label for='genre'>Type of Specialty:</label>";
 echo"<input type='text' name='name'/>";
 echo"<input class='button button1' type='submit' value='Submit'/>";
echo"</form>";
echo'<p></p>';

$result = mysqli_query($link,$sql);
?>



</body>
