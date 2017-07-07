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
<title>RAS: Admissions</title>
<meta name="keywords" content="Active Website, Free CSS Template, HTML CSS" />
<meta name="description" content="aaebsite - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body style ="	background-image: url(RASpics/longbodybg.jpg);">

<form method='POST'>
<div id="templatemo_wrapper">
    <div id="templatemo_header">
		<img src="RASpics/banner.jpg" width='970' height='170'/>
		
		    <div id="templatemo_menu">
                
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="about.php" >About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="admissions.php" class="current">Admissions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
				<li><a href="myportal.php">My Portal</a></li>
				<li><a href="alumni.php">Alumni</a></li>
				<li><a href="faq.php">FAQ</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->

  </div> <!-- end of header -->
    
    <div id="templatemo_main">
		
		<img src="RASpics/admissions_indicator.jpg" width='419' height='109'/>
		
		<center style="margin-left:15cm;margin-top:2cm;"><img src="RASpics/rasfamily.jpg" width='374' height='266'/></center>
		
		<h3 style="color: #2E8B57;line-height: 200%;margin-left:15.5cm;">Follow Us</h3><br></br>
	
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
		<tr><tr><br>
			<div class="fb-like" style="line-height: 200%;margin-left:15.5cm;margin-top:-1.5cm;" data-href="https://www.facebook.com/RosarioAdventistSchool" 
			data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
			
			
			
			<?php
					$query = "SELECT newsdate as date, newstitle as title, newscontent as description FROM `newsevents` WHERE `newscategory`= 'Events'";
					$result = mysql_query($query) or die(mysql_error());
					$list  = mysql_fetch_assoc($result);

					?>


						<head>
							<!-- Core CSS File. The CSS code needed to make eventCalendar works -->
							<link rel="stylesheet" href="css/eventCalendar.css">

							<!-- Theme CSS file: it makes eventCalendar nicer -->
							<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">
							
							<!--<script src="js/jquery.js" type="text/javascript"></script>-->
							<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
							<script src="js/jquery.eventCalendar.min.js" type="text/javascript"></script>
							
						</head>
							
							
							<div class="g6" style="margin-top:50px;margin-left:15cm;">
									<h4 class="h4" style="text-align:center;color:#2E8B57;">CALENDAR OF ACTIVITIES</h2>
									
									<div id="eventCalendarHumanDate" style="margin-left:0.8cm;"></div>
									<script>
										var eventsInline = <?php echo json_encode($list); ?>

										
										$(document).ready(function() {
											$("#eventCalendarHumanDate").eventCalendar({
												jsonData: eventsInline,
												jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
											});
										});
									</script>
							</div>
			
			
			
			
		<br></br>
		<h6 style="width:300px;margin-top:-24cm;">The following requirements are needed:</h6>
		<br></br>
			<div style="width:530px;
						border:2px solid black;
						padding:2px;
						text-indent: 15px;
						margin-top:-0.5cm;">
						
						
				
				<div class="fresh" style="border:2px solid black;margin:2px;padding-left:100px;">
						<br></br>
						<img src="RASpics/freshmen_pic.jpg" width='169' height='140'/>	
						
						<i><h3 style="color:green;">INCOMING FIRST YEAR</h3>
						Qualification of Student Applicants
						Students who have finished the elementary course and are promoted in high school </i>
						<br></br>
						<b>Basic Requirements for Application</b>
							<li>Photocopy of Birth Certificate (NSO)</li>
							<li>Original Form 138 (Report Card)</li>
							<li>Interview of the parents</li>
							<li>Properly filled out registration form</li>
							<br></br>
				</div>
							
				<div class="trans" style="border:2px solid black;margin:2px;padding-left:100px;">	
						<br></br>
						<img src="RASpics/transferee_pic.jpg" width='169' height='140'/>	
						
						<i><h3 style="color:green;">TRANSFEREES (Year II, III, IV)</h3>
						Qualification of Student Applicants
						Students who were previously enrolled in other high schools </i>
						 <br></br>
						<b>Basic Requirements for Application</b>
							<li>Photocopy of Birth Certificate (NSO)</li>
							<li>Original Form 138 (Report Card)</li>
							<li>Interview of the parents</li>
							<li>Properly filled out registration form</li>
							<li>2 pcs of 2x2 Pictures</li>
							<li>Good Moral Certification</li>
							<li>Entrance Exam</li>
							<br></br>
							
				</div>
			
				<div class="old" style="border:2px solid black;margin:2px;padding-left:100px;">	
						<br></br>
						<img src="RASpics/old_pic.jpg" width='169' height='140'/>	
						
						<i><h3 style="color:green;">OLD STUDENTS</h3>
						Qualification of Student Applicants
						Students who have finished the elementary course and are promoted in high school </i>
						<br></br>
						<b>Basic Requirements for Application</b>
							<li>Properly filled out registration form</li>
							<li>Clearance</li>
							<li>Report Card</li>
							<br></br>
				</div>			
							
				<div class="for" style="border:2px solid black;margin:2px;padding-left:100px;">	
						<br></br>
						<img src="RASpics/foreigner_pic.jpg" width='169' height='140'/>	
						
						<i><h3 style="color:green;">FOREIGN STUDENTS</h3>
						Qualification of Student Applicants
						Students who have finished the elementary course and are promoted in high school </i>
						<br></br>
						<b>Basic Requirements for Application</b>
							 <li>Entrance Exam</li>
							 <li>2 pcs of 2x2 Pictures</li>
							 <li>NSO Birth Certificate</li>
							 <li>Good Moral Certification</li>
							 <li>Original Form 138 (Report Card)</li>
							 <li>Certification of Attendance</li>
							 <li>Grade when did he stop from his previous school</li>
							 <br></br>
				</div>
			
			 </div>
			
	</div>
	
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

</form>
</body>
</html>
