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
  
 margin:65px auto;
 margin-left:40%;
 font-family: 'Raleway', sans-serif;
}
 
div.main{
 width:50%;
 margin-left:10px;
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
 margin-left:0%;
 font-size:12px;
 } }
  @media screen and (max-width: 320px) {
 div.main{
 width:100%;
 margin-left:0px;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
 } 
  }
 @media screen and (max-width: 425px) {
 div.main{
	 margin-left:0px;
 width:100%;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
 }
 }
 @media screen and (max-width: 375px) {
 div.main{
 width:100%;
  margin-left:0px;
  }
 div.container2{
 width:100%;
 height: 100%;
 margin:65px auto;
 margin-left:0%;
 font-size:12px;
 } 
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
p.success {
    color: #34A853;
    font-size: 18px;
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
<h2>Enter the Email of Your Account to Reset New Password</h2>
<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
<div class="container2">
<div class="main">
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="email" name="email" placeholder="EMAIL" required="">
            <div class="send-button">
                <input type="submit" name="forgotSubmit" value="CONTINUE">
            </div>
        </form>
    </div></div>
</div>

</div>
</div></div>
</body>
</html>