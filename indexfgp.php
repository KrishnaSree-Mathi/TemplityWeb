
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checking...</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon-16x16.png" size="22x22" type="image/png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylepwd.css">
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
input[type=text]{
 width: 200px;
 height: 30px;
 padding: 10px;
 margin-bottom: 5px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #4f4f4f;
 font-size: 16px;
 border-radius: 5px;
}
input[type=Submit]{
width: 30%;
 display:block;
  position:absolute
  z-index: 99;
  -webkit-transform:scale(1);
  -ms-transform:scale(1);
  transform:scale(1);
  padding:5px 15px;
  border:1px solid #24C6DC;
  border-radius:50px;
  background:#ff80aa;
  cursor:pointer;
  font-family: 'Open Sans Condensed', sans-serif;
  font-size:1.2em;
  color:#fff;
  -webkit-transition:.5s;
  transition:.5s;
 }
 
input[type=Submit]:hover{
 background: lightgreen;
  -webkit-transform:scale(1.2);
  transform:scale(1.2);
  background:#24C6DC;
  -moz-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
-webkit-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
box-shadow: 0px 0px 20px rgba(56,56,56,.2);
}
 
input[type=button]{
 display:block;
  position:absolute
  z-index: 99;
  width:30%
  -webkit-transform:scale(1);
  -ms-transform:scale(1);
  transform:scale(1);
  padding:5px 15px;
  border:1px solid #24C6DC;
  border-radius:30px;
  background:#ff80aa;
  cursor:pointer;
  font-family: 'Open Sans Condensed', sans-serif;
  font-size:1em;
  color:#fff;
  -webkit-transition:.5s;
  transition:.5s;
}
select{
 width: 230px;
 height: 50px;
 padding: 10px;
 margin-bottom: 5px;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: #4f4f4f;
 font-size: 16px;
 border-radius: 5px;
}
 
input[type=button]:hover{
 background: lightgreen;
  -webkit-transform:scale(1.2);
  transform:scale(1.2);
  background:#24C6DC;
  -moz-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
-webkit-box-shadow: 0px 0px 20px rgba(56,56,56,.2);
box-shadow: 0px 0px 20px rgba(56,56,56,.2);
 
}

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	
	 @media screen and (max-width: 425px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	 @media screen and (max-width: 320px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	 @media screen and (max-width: 375px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
	@media screen and (max-width: 320px) {
	 .co{
	 font-size:12px;
	 font-family:Times New Roman;
	 }
	 .co1{
	 font-size:16px;
	 
	 }
	 .head{
	 font-size:23px;
	 }
	 .logo{
	 width:10px;
	 height:10px;
	 }
		
}

a.logout {
    float: right;
	font-size:15px;
}
	 }
	 @media screen and (max-width: 425px) {
	 .co{
	 font-size:12px;
	 font-family:Times New Roman;
	 }
	 .co1{
	 font-size:16px;
	 
	 }
	 .logo{
	 width:10px;
	 height:10px;
	 }
	 .head{
	 font-size:24px;
	 }
	  	

a.logout {
    float: right;
	font-size:15px;
}
	 }
	 @media screen and (max-width: 375px) {
	 .co{
	 font-size:12px;
	 font-family:Times New Roman;
	 }
	 .co1{
	 font-size:16px;
	 
	 }
	 .head{
	 font-size:23px;
	 }
	 .logo{
	 width:20px;
	 height:20px;
	 }
	
	
	a.logout
	{
    float: right;
	font-size:15px;
	}
 }
	
 
div.container2{
 width:65%;
 height: 100%;
 margin:35px auto;
 margin-left:40%;
  margin-bottom:20%;
 font-family: 'Raleway', sans-serif;
}
 
div.main{
 width:80%;

 padding: 5px 50px 25px;
 border: 2px solid gray;
 border-radius: 10px;
 font-family:'Times';
 float:left;
 margin-top:20px;
}
div.main1{
 
 width:100%;
 padding: 10px 50px 25px;
 border: 2px solid gray;
 border-radius: 10px;
 font-family:'Times';
 float:left;
 margin-top:50px;

}
 @media screen and (max-width: 767px) {
 div.main{
 width:100%;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin:65px auto;
  margin-bottom:10%;
 margin-left:0%;
 font-size:12px;
 }
 
 }
   @media screen and (max-width: 320px) {
 div.main{
 width:100%;
  }
  div.main1{
 width:100%;
  }
 div.container2{
 width:100%;
 height: 100%;
  margin-bottom:10%; 
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
   }
   p.error {
    color: blueviolet;
    font-size: 20px;
}
a {
    color: #337ab7;
    text-decoration: none;
    font-size: 16px;
}
.container1 {
	width:100%;
 height: 100%;
 font-family: 'Raleway', sans-serif;
    text-align: left;
    padding: 0px;
}}

   @media screen and (max-width: 425px) {
 div.main{
 width:100%;
  }
  div.main1{
 width:100%;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin-bottom:10%;
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
 }
p.error {
    color: blueviolet;
    font-size: 20px;
}
a {
    color: #337ab7;
    text-decoration: none;
    font-size: 16px;
}
.container1 {
	width:100%;
 height: 100%;

 font-family: 'Raleway', sans-serif;
   
    text-align: left;
    padding: 0px;
} }

 @media screen and (max-width: 375px) {
 div.main{
 width:100%;
  }
  div.main1{
 width:100%;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
 margin-bottom:10%;
 } 
 .container1 {
	width:100%;
 height: 100%;
 
 font-family: 'Raleway', sans-serif;
   
    text-align: left;
    padding: 0px;
}
 }
.container1 {
	width:100%;
 height: 100%;
 margin:65px auto;
 margin-left:0px;
 font-family: 'Raleway', sans-serif;
   
    text-align: left;
    padding: 0px;
}
a.logout {
    float: right;
	font-size:25px;
}
p.error {
    color: blueviolet;
    font-size: 20px;
}
a {
    color: #337ab7;
    text-decoration: none;
    font-size: 16px;
}
  </style>
</head>
<body background="d.jpg">
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
        <li  class="active"><a href="indexfgp.php" target="_parent"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
		<li><a href="developersframes.html" target="_parent">Developers</a></li>
	  </ul>
    </div>

  </div>
</nav>
<div class="container-fluid text-center">    
  <div class="row content">
  
    <div class="col-sm-8 text-left"> 

<?php
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<h2>Only for Admin purpose</h2>
<h2>Login to Your Account</h2>
<div class="container2">
	  <div class="main">
	  <br>
	  <br>
    <?php
        if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
            include 'user.php';
            $user = new User();
            $conditions['where'] = array(
                'id' => $sessData['userID'],
            );
            $conditions['return_type'] = 'single';
            $userData = $user->getRows($conditions);
    ?>
    <h2>Welcome <?php echo $userData['first_name']; ?>!</h2>
    <a href="userAccount.php?logoutSubmit=1" class="logout">Logout</a>
    <div class="regisFrm">
        <p><b>Name: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
        <p><b>Email: </b><?php echo $userData['email']; ?></p>
        <p><b>Phone: </b><?php echo $userData['phone']; ?></p>
    </div>
	</div>
	</div>
	<div class="container1">
	<div class="main1">
	<div class="rows">
  <div class="columns">
		
		<h2 style="color:#580000;font-family:Georgia;font-size:25px">View no.of submitted forms</h2>
		<table>
		<form method="POST" action="select4.php">
		<tr><td style="color:#0033cc;font-family:Georgia;font-size:20px" >Click the "View Data" button for checking the no. of forms submitted</td></tr>
		<tr><td><input type="Submit" name="submit" value="View Data"></td></tr>
		</form></table>
		
		
		<h2 style="color:#580000;font-family:Georgia;font-size:25px">View all the data</h2>
		<table>
		<form method="POST" action="select.php">
		<tr><td style="color:#0033cc;font-family:Georgia;font-size:20px" >Click the "View Data" button for checking all the student's details:</td></tr>
		<tr><td><input type="Submit" name="submit" value="View Data"></td></tr>
		</form></table>

		<h2 style="color:#580000;font-family:Georgia;font-size:25px">Checking data based on Year of Joining </h2>
		<table>
		<form method="POST" action="select2.php">
		<tr><td style="color:#0033cc;font-family:Georgia;font-size:20px" >Give the Year of Joining <!--/Registration number/Joining year--> of the student for checking the student's detailed information:</td></tr>
		<tr><td><select name="YOJ"><option>1989</option><option>1990</option><option>1991</option>
<option>1992</option><option>1993</option><option>1994</option><option>1995</option><option>1996</option><option>1997</option><option>1998</option><option>1999</option><option>2000</option>
<option>2001</option><option>2002</option><option>2003</option><option>2004</option><option>2005</option><option>2006</option><option>2007</option><option>2008</option><option>2009</option>
<option>2010</option><option>2011</option><option>2012</option><option>2013</option><option>2014</option><option>2015</option><option>2016</option></select><label style="color:red">*</label></td></tr>
		<!--<td><input type="Text" name="reg" placeholder="Enter Registration No"></td></tr>
		<td><input type="Text" name="YOJ" placeholder="Enter Joining year"></td></tr><br>-->

		<tr><td><input type="Submit" name="submit" value="View Data"></td></tr>
		</form></table>
		
		<h2 style="color:#580000;font-family:Georgia;font-size:25px">Checking data based on Department </h2>
		<table>
		<form method="POST" action="select3.php">
		<tr><td style="color:#0033cc;font-family:Georgia;font-size:20px" >Enter the Department for checking the information:</td></tr>
		<tr><td style="color:#0033cf;font-family:Georgia;font-size:16px"> Department:<select name="dept" >
<option>MECH</option>
<option>CIVIL</option>
<option>EEE</option>
<option>ECE</option>
<option>CSE</option>
<option>IT</option>
</select></td></tr>
		<tr><td><input type="Submit" name="submit" value="View Data"></td></tr>
		</form></table>
		
	</div>

	<div class="columns">
		<h2 style="color:#2eb82e;font-family:Georgia;font-size:25px">Delete data</h2>
		<table>
		<form method="POST" action="delete.php">
		<tr><td style="color:#0033cc;font-family:Georgia;font-size:20px" >Enter name for deleting particular row information:</td></tr><tr><td><input type="Text" name="name" placeholder="Enter Name"></td></tr><br>
		<tr><td><input type="Submit" name="submit" value="Delete"></td></tr>
		</form></table>




		<h2 style="color:#ff0066;font-family:Georgia;font-size:25px">Update data</h2><table>
		<form method="POST" action="update.php">
		<h3 style="color:#7c262a;font-family:Georgia;font-size:20px">For Updating records</h3>
		<tr><td style="color:#ff6466;font-family:Georgia;font-size:20px">Enter your name for updating your Current Email Address</td></tr>

		<tr><td><input type="Text" name="name" placeholder="Enter Name"><br></td></tr>


		<tr><td style="color:#b726ff;font-family:Georgia;font-size:20px">Enter your Current Email Id:</td></tr><tr><td><input type="Text" name="id" placeholder="Enter Current Email"></td></tr>
		<tr><td><input type="Submit" name="submit" value="update"></td></tr>
		</form>
		
		
		
	
	</div>
	</div>
    <?php }else{ ?>
    
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <input type="password" name="password" placeholder="PASSWORD" required="">
            <div class="send-button">
                <input type="submit" name="loginSubmit" value="LOGIN">
            </div>
        </form><br>
		 <a href="forgotPassword.php">Forgot password?</a>
        <!--<p>Don't have an account? <a href="registration.php">Register</a></p>-->
    </div>  
    <?php } ?>

</div>
</div></div>
</div></div>
</body>
</html>