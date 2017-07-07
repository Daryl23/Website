<?php
mysql_connect("localhost","root","");
mysql_select_db("dbenrollment");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAS: Student's Login</title>
<meta name="keywords" content="Active Website, Free CSS Template, HTML CSS" />
<meta name="description" content="aaebsite - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body style ="background-image: url(RASpics/bodybg.jpg)";> 
<div id="templatemo_wrapper">
    <div id="templatemo_header">
		<img src="RASpics/banner.jpg" width='970' height='170'/>
		
		    <div id="templatemo_menu">
                
            <ul>
				<li><a href="index.php" >Home</a></li>
                <li ><a href="myportal_login.php" class="current" style= "width:100px;">My Corner</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->
		
  </div> <!-- end of header -->
    
    <div style="width: 303px; padding: 100px 350px 100px;">
	
				<div style="padding-top:8px;
							padding-bottom:8px;
							text-indent:15px;
							background:#000;
							color:#fff;
							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;">Student Login</div>
				<div style=""></div>
				
				<form method="POST" action="myportal_log.php">
					<table style="	margin:auto;
									height:150px;
									width: 300px;
									border-style: double;">	
						<tr>
							<th>Username:</th>
							<td><input type="text" name="username" id="username"></input></td>
						</tr>
						<tr>
							<th>Password:</th>
							<td><input type="password" name="userpass" id="userpass"></input></td>
						</tr>
						<tr>
							<th colspan="2"><input type="submit" value="Login"></input>
							<input type="submit" value="Cancel"></input></th>
						</tr>

					
					</table>
				</form>
				
				<p style="	color:black;
							margin-left:0.7cm;
							margin-top:0.5cm;
							line-height:100%;">Note: Forget password? <u style="color:red;"><span style="cursor:help">Contact Admin.</u></p></span>
				
					<div class="cleaner_h20 horizon_divider"></div>
					<div class="cleaner_h20"></div>
									
				</div>
				 

				</div>

    	<div class="cleaner"></div>
	

<!--	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<tr><tr><br><div class="fb-like" data-href="https://www.facebook.com/RosarioAdventistSchool" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
-->
        </div>

            <div class="cleaner_h40"></div>
    	<div class="cleaner"></div>

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<center><img src="RASpics/footer_details.jpg" width='990' height='339'/>
	        <ul>
                <a href="index.php" class="current">Home</a>
               | <a href="about.php">About Us</a>
               | <a href="contactus.php">Contact Us</a>
               | <a href="admissions.php">Admissions</a>
               | <a href="gallery.php">Gallery</a>
			   | <a href="myportal.php">My Portal</a>
			   | <a href="alumni.php">Alumni</a>
			   | <a href="faq.php">FAQ</a>
          	</ul>   
	</center>
	
     <div id="templatemo_footer" style="font-size:11px; line-height: 120%; word-spacing: 0px;">
	 
		<b>Rosario Adventist School, Batangas 
		<br>
		Gualberto Ave. Namunga, Rosario Batangas
		<br>
		Copyright © 2013 Rosario Adventist School 
		<br>
		All rights reserved.</b>
    
    </div> </style> <!-- end of templatemo_footer -->
    
</div>
</body>
</html>
