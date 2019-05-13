<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checking...</title>
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
	  position: absolute;
	  bottom:-200;
	  left:0;
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
    <h2>SIR C R REDDY COLLEGE OF ENIGNEERING</h2>      
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
		<li><a href="form1.html" target="_parent">Alumni Registration</a></li>
		<li><a href="gallery.html" target="_parent">Gallery</a></li>
		<li><a href="contact.html" target="_parent">Contact Us</a></li>
		
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li  class="active"><a href="videup.html" target="_parent"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
		<li><a href="developersframes.html" target="_parent">Developers</a></li>
	  </ul>
    </div>

  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
      <div class="col-sm-8 text-left">   
<br>
<center><h1 style="color:blue">Registered Data based on year of joining</h1></center>
<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "alumni");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$YOJ=$_POST['YOJ'];
// Attempt select query execution
$sql = "SELECT * FROM areg1 where YearofJoining='$YOJ'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Name</th>";
				echo "<th>Registration No</th>";
                echo "<th>Date of Birth</th>";
                echo "<th>Academic Program</th>";
                echo "<th>Department</th>";
				echo "<th>Year of Joining</th>";
				echo "<th>Year of Passing</th>";
				echo "<th>Current Status</th>";
				echo "<th>Program(PG)</th>";
				echo "<th>Present Status</th>";
				echo "<th>University Name</th>";
				echo "<th>Country</th>";
				echo "<th>State</th>";
				echo "<th>City</th>";
				echo "<th>Employee Name</th>";
				echo "<th>Designation</th>";
				echo "<th>Work Location</th>";
				echo "<th>Employment Country</th>";
				echo "<th>Employment State</th>";
				echo "<th>Employment City</th>";
				echo "<th>Mobile Number</th>";
				echo "<th>Email Id</th>";
				echo "<th>Linked in Profile URL</th>";
				echo "<th>Address</th>";
				echo "<th>Special Achievements</th>";
				
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Name'] . "</td>";
				 echo "<td>" . $row['RegistrationNo'] . "</td>";
                echo "<td>" . $row['DateofBirth'] . "</td>";
                echo "<td>" . $row['ACprogram'] . "</td>";
                echo "<td>" . $row['Dept'] . "</td>";
				echo "<td>" . $row['YearofJoining'] . "</td>";
				echo "<td>" . $row['YearofPassing'] . "</td>";
				echo "<td>" . $row['Currentstatus'] . "</td>";
				echo "<td>" . $row['Program/PG'] . "</td>";
				echo "<td>" . $row['Presentstatus'] . "</td>";
			    echo "<td>" . $row['Universityname'] . "</td>";
				 echo "<td>" . $row['Country'] . "</td>";
				 echo "<td>" . $row['State'] . "</td>";
				 echo "<td>" . $row['City'] . "</td>";
				 echo "<td>" . $row['EmployeeName'] . "</td>";
				 echo "<td>" . $row['Designation'] . "</td>";
				 echo "<td>" . $row['WorkLocation'] . "</td>";
				 echo "<td>" . $row['EmpCountry'] . "</td>";
				 echo "<td>" . $row['EmpState'] . "</td>";
				 echo "<td>" . $row['EmpCity'] . "</td>";
				 echo "<td>" . $row['MobileNumber'] . "</td>";
				 echo "<td>" . $row['EmailID'] . "</td>";
				 echo "<td>" . $row['URL'] . "</td>";
				 echo "<td>" . $row['Address'] . "</td>";
				 echo "<td>" . $row['SpecialAchievements'] . "</td>";
				 
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);

    } 
	else
	{
        echo '<center><p style="font-size:24px;">No records matching your query were found.</p></center>';
    }
}
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 


echo "<html>";
		echo "<head><style>input[type=button]{ font-size: 20px;
 		border: 1px solid red;
		color: black;
		position:fixed;
		bottom:2px;
		font-weight: bold;
		cursor: pointer;
		width: 8%;
		border-radius: 45px;
		padding: 10px 0;
		outline:none;}input[type=button]:hover{-webkit-transform:scale(1.2);
  transform:scale(1.2);
  background:#24C6DC;
  -moz-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
-webkit-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
box-shadow: 0px 0px 20px rgba(56,56,56,.2);}</style></head><center><body><Form>";
		echo "<input type=\"button\" value=\"PRINT\" onClick=\"window.print()\">";
		echo "</center></Form></body></html>";
echo "<br>";
echo "<br>";
echo "<br>";
// Close connection
mysqli_close($link);


?>

</div>
</div>
</div>
	</body>
</html>	
