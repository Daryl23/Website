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
<title>RAS: My Portal</title>
<meta name="keywords" content="Active Website, Free CSS Template, HTML CSS" />
<meta name="description" content="aaebsite - Free CSS Template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body style ="background-image: url(RASpics/bodybg.jpg)";> 
<form method='POST'>
<div id="templatemo_wrapper">
    <div id="templatemo_header">
		<img src="RASpics/banner.jpg" width='970' height='170'/>
		
		    <div id="templatemo_menu">
                
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
				<li><a href="myportal.php" class="current">My Portal</a></li>
				<li><a href="alumni.php">Alumni</a></li>
				<li><a href="faq.php">FAQ</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->

  </div> <!-- end of header -->
    
    <div id="templatemo_main" style="border:5px solid black;
									margin-top:2cm;
									margin-left:1.3cm;
									border-radius:1em;
									border-style:double;
									width:800px;">

		&nbsp;
		<?php
				$t = mysql_query("SELECT  Year(schoolyearstart) As systart, Year(schoolyearend) As syend from tblSchoolYear HAVING MAX(schoolyearid)");
				$m = mysql_num_rows($t);	
				while($tt = mysql_fetch_array($t))
				{
			?>
		<h2 align = center><b>Schedule of Enrollment for Academic Year <br>	<?php echo $tt['systart'] ."-". $tt['syend']?> are the following:</h2></b>
			<?php
				}
			?>	
				<?php
				$t = mysql_query("SELECT  enrollmentstart , enrollmentend  from tblSchoolYear,tblEnrollmentPeriod WHERE tblSchoolyear.schoolyearid=tblEnrollmentperiod.schoolyearid HAVING MAX(tblSchoolYear.schoolyearid)");
				$m = mysql_num_rows($t);	
				while($tt = mysql_fetch_array($t))
				{
			?>
		<h5 align = center>Enrollment Period:    <?php  echo  date("F j, Y",strtotime($tt['enrollmentstart'])) ."  -  ". date("F j, Y",strtotime($tt['enrollmentend']))?> </h5></b>
		<h5 align = center>Entrance Exam and Reservation Period: During Enrollment Period </h5></b>
			<?php
				}
			?>	
			<br>
			<p align = center>Student accounts will be given by school administrator upon enrollment. Registered students will be able to view your enrollment records, payments or balance, preassessed payments and grades. For registered students click <a href="myportal_login.php"><i style="color:blue">here</a></i> to login.</p> '
			
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			&nbsp;
			

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
