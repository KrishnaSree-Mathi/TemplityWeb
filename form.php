<!DOCTYPE html>
<html lang="en">
<head>
  <title>Submitted</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon-16x16.png" size="22x22" type="image/png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
       /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
     
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
	 position: fixed;
	  bottom:0px;
	  left:0px;
	  right:0px;
	 
    }
    .col-sm-2{
    width:30%;
    
    }
	.logo{
float:left;
padding-left:10px;

}
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
	
	
}

/* Create two equal columns that floats next to each other */
.columns{
    float: left;
    width: 50%;
    padding: 10px;
   
}




/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 375px) {
    .columns {
        width: 100%;
    }
}



@media screen and (max-width: 425px) {
	 .co{
	 font-size:8px;
	 font-family:Times New Roman;
	 margin-left:0cm;
	 }
	 .co1{
	 font-size:16px;
	 margin-left:0cm;
	 }
	 .co2{
	 font-size:18px;
	 text-align:justify;
	 }
	  .head{
	 font-size:23px;
	 }
	 .logo{
	 width:10px;
	 height:10px;
	 }
	 
	 }

@media screen and (max-width: 320px) {
	 .co{
	 font-size:8px;
	 font-family:Times New Roman;
	 margin-left:0cm;
	 }
	 .co1{
	 font-size:16px;
	 margin-left:0cm;
	 }
	 .co2{
	 font-size:18px;
	 text-align:justify;
	 }
	  .head{
	 font-size:23px;
	 }
	 .logo{
	 width:10px;
	 height:10px;
	 }
	 
	 }


@media screen and (max-width: 375px) {
	 .co{
	 font-size:12px;
	 font-family:Times New Roman;
	 margin-left:0cm;
	
	 }
	 .co1{
	 font-size:12px;
	 margin-left:0cm;
	 text-align:left;
	 }
	 .co2{
	 font-size:16px;
	 text-align:left;
	 }
	  .head{
	 font-size:23px;
	 }
	 .logo{
	 width:10px;
	 height:10px;
	 }
	 
	 }
body:hover{
background-color:#ffffcc;
}


  </style>
</head>
<body>
<div class="jumbotron">
	<div class="logo">
		<a href="index.html" target="_parent"><img src="logo.png" width="120px" height="120px"></a>
	</div>
  <div class="container-fluid text-center">
    <h2 class="head">SIR C R REDDY COLLEGE OF ENIGNEERING</h2>      
    <p><h2>ALUMNI</h2></p>
  </div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html" target="_parent">Home</a></li>
        <li><a href="about us.html" target="_parent">About</a></li>
        <li><a href="directory.html" target="_parent">Directory</a></li>
        <li><a href="association.html" target="_parent">Association</a></li>
		<li class="active"><a href="#" target="_parent">Alumni Registration</a></li>
		<li><a href="gallery.html" target="_parent">Gallery</a></li>
		<li><a href="contact.html" target="_parent">Contact Us</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html" target="_parent"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
		<li><a href="developersframes.html" target="_parent">Developers</a></li>
	  </ul>
    </div>

  </div>
</nav>
  
    
  <div class="container-fluid text-center">    
  <div class="row content">
      <div class="col-sm-8 text-left">   
  <?php
$servername='localhost';
$username='root';
$password='';
$dbname='alumni';


$con = mysqli_connect($servername,$username,$password,$dbname);


$Name = $_POST['name'];
$Reg = $_POST['reg'];
$DOB = $_POST['dob'];
$ACprogram = $_POST['ACprogram'];
$Dept = $_POST['dept'];
$YOJ = $_POST['YOJ'];
$YOP = $_POST['YOP'];
$currentstatus = $_POST['currentstatus'];

$PG = $_POST['PG'];
$presentstatus = $_POST['presentstatus'];
$universityname = $_POST['universityname'];
$country = $_POST['country'];
$state = $_POST['state'];
$city = $_POST['city'];

$empname = $_POST['Empname'];
$designation = $_POST['designation'];
$Worklocation = $_POST['Worklocation'];
$Country = $_POST['EmpCountry'];
$State = $_POST['EmpState'];
$City = $_POST['EmpCity'];
$MobileNO = $_POST['MobileNo'];
$EmailID = $_POST['EmailID'];
$URL = $_POST['URL'];
$Address = $_POST['Address'];

$Special = $_POST['Special'];



$sql1 = "INSERT INTO `areg1`(`Name`, `RegistrationNo`, `DateofBirth`, `ACprogram`, `Dept`,`YearofJoining`, `YearofPassing`, `Currentstatus`, `Program/PG`, `Presentstatus`, `Universityname`, `Country`, `State`, `City`, `EmployeeName`, `Designation`, `WorkLocation`, `EmpCountry`, `EmpState`, `EmpCity`, `MobileNumber`, `EmailID`, `URL`, `Address`, `SpecialAchievements`) VALUES 
('". $Name ."','". $Reg ."','". $DOB ."','". $ACprogram ."','". $Dept ."','". $YOJ ."','". $YOP ."','". $currentstatus ."','". $PG ."','". $presentstatus ."','". $universityname ."','". $country ."','". $state ."','". $city ."', '".$empname."','".$designation."','".$Worklocation."','".$Country."','".$State."','".$City."','".$MobileNO."','".$EmailID."','".$URL."','".$Address."','".$Special."')";


if(mysqli_query($con,$sql1))
{ 
  echo '<html>
		<center><body style="font-size:30px;color:blue;font-family:Arial Rounded MT;"><p>Thank you for giving your valuable details</p><br>
  </body></center></html>';
}
else
{
  echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
  echo "<br><br><center>Your registration form is failed to submit</center>";
}

mysqli_close($con);



?>
  
  </div>
  </div>
  </div>
  
	  




</body>
</html>