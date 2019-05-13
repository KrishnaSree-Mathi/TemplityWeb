
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checking.....</title>
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
	
	
	.rows {
    margin: 0.5cm 1cm 1cm 0cm;
}

/* Create two equal columns that floats next to each other */
.columns{
    float: left;
    width: 50%;
    padding: 10px;
   
}
body:hover{
background-color:#ffffcc;
}



/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 375px) {
    .columns {
        width: 100%;
    }
}
@media (max-width: 375px) {
    .columns {
        width: 70%;
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


  </style>
</head>
<body style="background-color:lightgray;">
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
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

$Name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$Question = $_POST['question'];



$sql1 = "INSERT INTO message(Name, EmailID, PhoneNumber,Message) VALUES 
('". $Name ."','". $Email ."','". $Phone ."','". $Question ."')";

if(mysqli_query($con,$sql1))
{ 
  echo '<html><center><body style="font-size:24px;"><p><h2>Thank you for giving your Valuable Message</h2></p><br>
  </body></center></html>';
}
else
{
  echo "ERROR: Could not able to execute $sql1. " . mysqli_error($con);
  echo "<br><br><center><h2>Your message is failed to submit</h2></center>";
}



mysqli_close($con);

?>

</div>
  </div>
</div>

<footer class="container-fluid text-center" style="a:hover
	{
	color:white;
	font-size:20px;
	};
	a{
	color:white;
	decoration:none;
	};
	img:hover{width:20px;};">
  <center><a href="https://www.facebook.com/sircrrcoeofficial/" target="_blank"><img src="favi.png" ></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <a href="login.html" target="_parent">Admin</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="developersframes.html" target="_parent">Developers</a></center>
</footer>


</body>
</html>
