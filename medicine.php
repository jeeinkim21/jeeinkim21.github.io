
   

<?php
$link = mysqli_connect('127.0.0.1', 'root', 'nC5oAcW1');
if (!$link) {
    die('Could not connect: '.mysqli_error());
}

$dbName= "DocOffice2";
mysqli_select_db($link, $dbName) or die("Unable to select database $dbName");

$sql = "
SELECT drugName, d.firstName, d.lastName
from Prescription p, Doctor d
where p.prescribedBy = d.doctorId; ";

$result = mysqli_query($link,$sql);

$cmd = $s3Client->getCommand('GetObject', [
        'Bucket' => $bucket_name,
        'Key' => $filename,
        'ResponseContentType' =>  get_mime_type($filename),
        'ResponseContentDisposition' => 'inline; filename='.$user_filename
    ]);

while ($row = mysqli_fetch_assoc($result))
{
  $drugs[] = $row['drugName']; 
  $firstname[] = $row['firstName'];
  $lastname[] = $row['lastName'];
}

mysqli_close($link);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Medicine</title>
<link href="medicine.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="header">
  <a class="header-items" href="index.html"> <img src="images/DoctorLogo.png"  height="100px" alt="Doctor" class="header-items"> </a>
  <b><a class="header-items" href="doctors.php">Check Doctors</a> </b>
  <b><a class="header-items" href="medicine.php">Medicine</a> </b>
  <b><a class="header-items" href="Doctorconsult.php"> Doctor Consults</a></b>
  <b><a class="header-items" href="appointment.php">Appointments</a></b>

  </div>


  <h1> Medicines given by doctors: </h1>
<div class="flex-container">
        
<div class="flip-card flex-items">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="images/medicines/vicodin.png" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <h4> Doctor and Drug: </h4>
        <?php
           echo $drugs[3];
           echo '<p></p>';
           echo $firstname[3];
           echo ' ';
           echo $lastname[3];
        ?>
    </div>
  </div>
</div>
        
        
<div class="flip-card flex-items">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://m.media-amazon.com/images/I/81ZffY9Gy4L.jpg" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <h4> Doctor and Drug: </h4>
        <?php
          echo $drugs[4];
          echo '<p></p>';
          echo $firstname[4];
          echo ' ';
          echo $lastname[4];
        ?>
    </div>
  </div>
</div>

<div class="flip-card flex-items">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://i5.walmartimages.com/asr/16051835-dc05-40a5-ba61-a8756bccf9a9_1.b9e61f607da0666dc87abc81576f02fc.jpeg" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <h4> Doctor and Drug: </h4>
        <?php
            echo $drugs[2];
            echo '<p></p>';
            echo $firstname[2];
            echo ' ';
            echo $lastname[2];
        ?>
    </div>
  </div>
</div>

<div class="flip-card flex-items">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://img.medscapestatic.com/pi/features/drugdirectory/octupdate/MIP85130.jpg?output-quality=50" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
      <h4> Doctor and Drug: </h4>
        <?php
            echo $drugs[0];
            echo '<p></p>';
            echo $firstname[0];
            echo ' ';
            echo $lastname[0];
        ?>
    </div>
  </div>
</div>
   
<div class="flip-card flex-items">
  <div class="flip-card-inner">
    <div class="flip-card-front">
      <img src="https://www.grxstatic.com/d4fuqqd5l3dbz/products/Package_26673.JPG" alt="Avatar" style="width:200px;height:200px;">
    </div>
    <div class="flip-card-back">
    <h4> Doctor and Drug: </h4>
        <?php
            echo $drugs[1];
            echo '<p></p>';
            echo $firstname[1];
            echo ' ';
            echo $lastname[1];
        ?>
    </div>
  </div>
</div>

</div>
</div>
</body>
