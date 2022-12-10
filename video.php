
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nullptrs Office</title>
<link href="home.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/x-icon" src="images/DoctorLogo.png">
</head>

<body>
  <?php
 include 'Doctorconsult.php'; 

 if(htmlspecialchars($_POST['name']) ==  "Pediatrician"){
   echo"<iframe width='560' height='315' src='https://youtube.com/embed/ZDufV4Zj6AI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  } 
  if(htmlspecialchars($_POST['name']) ==  "pediatrician"){
    echo"<iframe width='560' height='315' src='https://youtube.com/embed/ZDufV4Zj6AI' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
   } 
  if (htmlspecialchars($_POST['name']) == "Urologist"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/Fu1hUXzn1gA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  } 
  if (htmlspecialchars($_POST['name']) == "urologist"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/Fu1hUXzn1gA' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  } 
  if (htmlspecialchars($_POST['name']) == "Neurosurgeon"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/PLvFANu2G2A' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if (htmlspecialchars($_POST['name']) == "neurosurgeon"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/PLvFANu2G2A' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if (htmlspecialchars($_POST['name']) == "Radiologist" ){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/kg8Ia03G9dw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if (htmlspecialchars($_POST['name']) == "radiologist" ){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/kg8Ia03G9dw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  }
  if (htmlspecialchars($_POST['name']) == "Cardiologist"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/JxDtr4zyOkw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  } 
  if (htmlspecialchars($_POST['name']) == "cardiologist"){
    echo"<iframe width='560' height='315' src='https://www.youtube.com/embed/JxDtr4zyOkw' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
  } 
 ?>

</body>