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
<title>RAS: Organizations</title>
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
		
		<img src="RASpics/aboutusorg_indicator.jpg" width='419' height='109'/>

				<script>
				function myFunction()
				{
				document.getElementById("demo").innerHTML="PATHFINDER CLUB, or simply Pathfinders, is a department of the Seventh-day Adventist Church (SDA), which works specifically with the cultural, social and religious education of children and adolescents located in the age group between 10 and 15 years.";
				}

				function myFunction2()
				{
				document.getElementById("demo").innerHTML="ROSARIO ADVENTURER CLUB is a Seventh-day Adventist Church-sponsored ministry open to all families of children in grades 1-4 who agree to keep the Adventurer Pledge and Law. An Adventurer is a child in grades 1-4. Each Adventurer is a unique and special person. Still there are several characteristics which are typical of Adventurer-age children.";
				}


				function myFunction3()
				{
				document.getElementById("demo").innerHTML="SUPREME STUDENT COUNCIL, thru the patronage of RAS responsibly fulfills our role in search of truth in our academic, as well as our social community. We strongly adhere in promoting the best of our collective and individual interests, in order to secure harmony, unity, and cooperation amongst ourselves, and with those who make up the Adventist community, wherein we commit ourselves to achieve all these by means of an autonomous student government. ";
				}
				
				function myFunction4()
				{
				document.getElementById("demo").innerHTML="Meanwhile, the receiving of student's balota to the assigned officer. After this once all is set, the counting officer will do the tally of the student's choice in front of the whole RAS students.";
				}


				function myFunction5()
				{
				document.getElementById("demo").innerHTML="Supreme Student Council counting of candidate's votes.";
				}
				
				function myFunction6()
				{
				document.getElementById("demo").innerHTML="Adventurer Club is one of the organizations in Seventh Day Adventist Schools.";
				}


				</script>
				
				<br></br>

				<div style="margin-left:0.3cm;">
				<table  border = "5" height = "230" width = "600">
				<th bgcolor = "#ffffff">
				<p align = "center" id="demo">CLICK IMAGE TO VIEW INFORMATION</p></th>



				<table border = "2"  height = "200" width = "600"> 
				<th align="center"><img src = "picture/organization/pathfinderclub_03.jpg" height = "150" width = "150" onclick = "myFunction()"></th>
				<td align="center"><img src = "picture/organization/adventurerclub_02.jpg" height = "150" width = "150" onclick = "myFunction2()"></td>
				<td align="center"><img src = "picture/organization/SSC_03.jpg" height = "150" width = "150" onclick = "myFunction3()"></td><tr>
				<td align="center"><img src = "picture/organization/SSC_02.jpg" height = "150" width = "150" onclick = "myFunction4()"></td>
				<td align="center"><img src = "picture/organization/SSC_01.jpg" height = "150" width = "150" onclick = "myFunction5()"></td>
				<td align="center"><img src = "picture/organization/ADV.png" height = "150" width = "150" onclick = "myFunction6()"></td>

				</table>
				<br></br>
				<img src="RASpics/logos.jpg" width='583' height='141'/>
				<br></br>
				<br></br>
				
			</div>
            
        </div>

			<div id="templatemo_sidebar">
				
					<ul class="templatemo_list" style="	margin-top:-22.5cm;
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
									<h4 class="h4" style="text-align:center;color:#2E8B57;s">CALENDAR OF ACTIVITIES</h4>
									
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
			
			
			

</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
	<center><img src="RASpics/footer_details.jpg" width='990' height='339'/>
	        <ul>
                <a href="index.php" class="current">Home</a>
               | <a href="about_us.php">About Us</a>
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
