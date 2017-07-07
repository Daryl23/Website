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
<title>RAS: About</title>
<meta name="keywords" content="Active Website, Free CSS Template, HTML CSS" />
<meta name="description" content="aaebsite - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body style ="background-image: url(RASpics/longbodybg.jpg)";> 
<form method='POST'>
<div id="templatemo_wrapper">
    <div id="templatemo_header">
		<img src="RASpics/banner.jpg" width='970' height='170'/>
		
		    <div id="templatemo_menu">
                
            <ul>
                <li><a href="index.php" >Home</a></li>
                <li><a href="about.php" class="current">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
				<li><a href="myportal.php">My Portal</a></li>
				<li><a href="alumni.php">Alumni</a></li>
				<li><a href="faq.php">FAQ</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->

  </div> <!-- end of header -->
    
    <div id="templatemo_main">
		
		<img src="RASpics/aboutus_indicator.jpg" width='419' height='109'/>
		
			
<div style="height:250px;text-align:justify;width:600px;line-height:180%;">
			
			<br></br>
			<h3 style="color:#2E8B57;">HISTORY:</h3>
			<p>On 1994, Diadem Center in Rosario opens a school for advent children. On 1995, it has been named Rosario 
			Adventist with its prime founders, Ms. Sally Obleya, Ms. Demetria Subido and Pedro Inandan, the land owners,
			Ms. Emmy Abacan, Professor Morales and Dr. Ellen Inandan.It had been recognized as a school by the DepEd 
			and given the permit to continue operating on 1998.</p>
			<br></br>
			<h3 style="color:#2E8B57;">Mission:</h3>
			<p>In preparation for Christ's second coming it is the full responsibility of the school to provide quality
			education to all students equipped with knowledge, habits, skills and values for active preparation and
			successful service to God and their fellowmen.</p>
			<br></br>
			<h3 style="color:#2E8B57;">Vision:</h3>
			<p>Rosario Adventist School envisions a strong academic institution providing a holistic growth and development, 
			employing empowered and competent human resource with well-equipped facilities to gain total development 
			towards the attainment of quality life.</p>
			</div>
			
			<br></br>
			<br></br>
			<br></br>
			
		<div style="margin-top:5cm;">
		<img src="RASpics/logos.jpg" width='583' height='141'/>
		</div>
		
	 </div>
	 
	 
			<div id="templatemo_sidebar">
				
					<ul class="templatemo_list" style="	margin-top:-19cm;
														padding:30px;
														height:90px;">
							<h4 style="color: #2E8B57;"><b>What's with RAS?</b></h4>
						<div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
						<li style="width:200px;"><a href="about.php"><h4>History/Mission/Vision</h4></a></li>
						<div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
						<li style="width:200px;"><a href="aboutus_fas.php" class="current"><h4>Faculty and Staff</h4></a>
							<ul>
							<li><a href="aboutus_fas.php">Administrators</li></a>
							<li><a href="aboutus_teachers.php">Teachers</li></a>
							<li><a href="aboutus_staffs.php">Staffs</li></a>
							</ul>
						</li>
						<div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
						<li style="width:200px;"><a href="aboutus_organizations.php"><h4>Organizations</h4></a></li>
						<div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
						
					
					<h4 style="text-align:left;color: #2E8B57;line-height: 200%;">Follow Us</h3>
	
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<tr><tr><br>
	<div class="fb-like" style="line-height: 200%;margin-top:-0.8cm;" data-href="https://www.facebook.com/RosarioAdventistSchool" 
	data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
	<br></br>
					</ul>
					
					
					
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
							
							
							<br></br>
							<br></br>
							<br></br>
							<br></br>
							<br></br>
							<br></br>
							<div class="g6" style="margin-top:60px">
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

</form>
</body>
</html>
