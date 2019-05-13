<?php
$servername='localhost';
$username='root';
$password='';
$dbname='alumni';


$con =mysqli_connect($servername,$username,$password,$dbname);


$name=$_POST['name'];
$DOB=$_POST['dob'];
$ACprogram=$_POST['ACprogram'];
$dept=$_POST['dept'];
$YOJ=$_POST['YOJ'];
$YOP=$_POST['YOP'];
$currentstatus=$_POST['cs'];

$PG=$_POST['PG'];
$presentstatus=$_POST['presentstatus'];
$universityname=$_POST['universityname'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];


$sql1 = "INSERT INTO areg2(name, dob, ACprogram, dept, YOJ, YOP, currentstatus) VALUES 
('".$name."','".$DOB."','".$ACprogram."','".$dept."','".$YOJ."','".$YOP."','".$currentstatus."')";
$sql2 = "INSERT INTO areg3(PG, presentstatus, universityname, country, state, city) VALUES 
('".$PG."','".$presentstatus."','".$universityname."','".$country."','".$state."','".$city."')";


if(mysqli_query($con,$sql1))
{ 
  echo'Thank you for giving your details';
}
else
{
  echo'ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
if(mysqli_query($con,$sql2))
{ 
  echo'Thank you for giving your details';
}
else
{
  echo'ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

mysqli_close($con);

?>