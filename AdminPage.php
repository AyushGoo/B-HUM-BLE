<!DOCTYPE html>
<html>
  <head>
  <style>
  table{
	text-align:center;
	margin-top:3%;
	width:100%;
	height:50%
	padding:100px;
}
p{
	
	padding:7px;
  text-align: centers;
	background-color:#377368;
	font-family:bold;
  color:white;

  
  }
  
  label{
	            background-color: white;
	            color:red;
                padding: 2px 5px;
				   border:3px solid red;
border-radius:5px;
               
			   
  }
  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
	<script src="https://kit.fontawesome.com/076c0a07da.js" crossorigin="anonymous"></script>

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><i class="fas fa-user-cog"></i>
            <h2 class="h5">ADMIN</h2><span></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong></strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        
        
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                  <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-white bg-dark">Admin Page</strong>
				  </div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
               
                
                <!-- Log out-->
                <li class="nav-item"><a href="Adminlog.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
		
      </header>
      
	  
	  <table>
  
<?php
include "db.php";
$i=0;
$records = mysqli_query($conn,"SELECT * FROM `data1` WHERE 1"); // fetch data from database

while($data = mysqli_fetch_assoc($records))
{
if($i%3 == 0){
	echo"<tr>";
	
}
echo "
     <td>
          <p style='font-family:georgia;'>Name:'{$data['fname']}'
	           <br>
			  Email:'{$data['email']}'
			   <br>
			  MobileNo.:'{$data['mobile']}'
			 <br>
			  Address:'{$data['reason']}'
			 <br>
			  Amount:'{$data['amount']}'<br>
                <a href='email.php'><label>Accept</label></a> <a href='emailreject.php'><label>Reject</label></a>

		   </p></div></td>";

   if($i%3==2){
	   echo"</tr>";
	   
   }
   $i++;
}
?>
      </section>
    
     
   
  </body>
</html>