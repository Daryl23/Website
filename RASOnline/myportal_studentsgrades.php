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
<title>RAS: Student's Grades</title>
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
                <li ><a href="myportal_login.php" class="current" style= "width:100px;">My Corner</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->
  </div> <!-- end of header -->
    
    <div id="templatemo_main">
	
		<img src="RASpics/myportalgrades_indicator.jpg" width='419' height='109'/>
	
		<br></br>
		<table style="margin-top:1cm;
					padding-top:7px;
					padding-bottom:7px;
					text-indent:20px;
					background:#000;
					color:#fff;
					border-radius:5pt 5pt 0pt 0pt;
					border-style: double;
					width:525px;">
					
					<th>Subject</th>
					<th>Teacher</th> 
					<th>Grading Period</th>
					<th>Grade</th> 
		</table>
		
		<?php 
			mysql_connect("localhost","root");
			mysql_select_db("dbenrollment");
			$studentid = $_GET['studentid'];
			$s = mysql_query("SELECT studentid,gradingname,sub_name,Concat(tea_lname, ',',tea_fname,' ',LEFT(tea_mname,1),'.') As Name,grade 
			FROM tblYearLevelSchedule,tblStudentYear,tblStudentSections,tblYearLevelSections,tblYearLevel,tblSubjects,tblStudentSubjects,tblGradings,tblTeachers
			WHERE tblTeachers.teacherid=tblYearLevelSchedule.teacherid
             AND tblStudentYear.studentschoolyear=tblStudentSections.studentschoolyear
            AND tblYearLevelSchedule.subjectcode=tblSubjects.subjectcode
            AND tblYearLevelSchedule.yearlevelsectioncode=tblYearLevelSections.yearlevelsectioncode
            AND tblStudentSections.yearlevelsectioncode=tblYearLevelSchedule.yearlevelsectioncode
            AND tblStudentSubjects.studentschoolyear=tblStudentYear.studentschoolyear
            AND tblStudentSubjects.subjectcode=tblSubjects.subjectcode
            AND tblYearLevelSections.yearlevelcode=tblYearLevel.yearlevelcode
            AND tblGradings.gradingperiodid=tblStudentSubjects.gradingperiodid 
			AND tblStudentYear.studentid='$studentid' AND grade !=0 
			GROUP by sub_name,tblGradings.gradingperiodid HAVING MAX(tblStudentYear.schoolYearid)") or die(mysql_error());
			$n = mysql_num_rows($s);	
			while($ss = mysql_fetch_array($s))
			{
			$studentid=$ss['studentid']
		?>
		<table style="margin-top:0cm;
					padding-top:0px;
					padding-bottom:0px;
					text-indent:20px;
					border-radius:0pt 0pt 0pt 0pt;
					border-style: double;
					width:525px;">
				<tr>
				<td> <?php echo $ss['sub_name']?></td>
				<td> <?php echo $ss['Name']?></td>
				<td> <?php echo $ss['gradingname']?></td>
				<td> <?php echo $ss['grade']?></td>
				</tr>
		<?php
			}

		?>
		</table>
	
			<div id="templatemo_sidebar" style="
									float:right;
									margin-top:-70px;
									text-indent:5px;">
            
            <h2 style="margin:1cm;color: #2E8B57;">My Profile</h2>
            
            <ul class="templatemo_list" style="margin:0.5cm 1cm 1cm 1cm;">
                 <li><a href='myportal_studentsprofile.php?studentid=<?php echo "$studentid" ?>'><u><big>Profile</u></big></a></li>
				 <div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
				 <li><a href='myportal_studentsgrades.php?studentid=<?php echo "$studentid" ?>'><u><big>Grades</u></big></a></li>
				 <div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
				 <li><a href='myportal_studentspayments.php?studentid=<?php echo "$studentid" ?>'><u><big>Payments</u></big></a></li>
				 <div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
				 <li><a href='myportal_studentspreassess.php?studentid=<?php echo "$studentid" ?>'><u><big>Pre-Assessment</u></big></a></li>
				 <div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
				<li style="width:200px;color=black;"><a href='myportal_settings.php?studentid=<?php echo "$studentid" ?>'><u><big>Change Password</u></a></li>
				<div class="cleaner_h20 horizon_divider" style="margin-top:-0.6cm;"></div><div class="cleaner_h20"></div>
				<li><a href="myportal_logout.php"><u>Logout</big></u></a></li>
            </ul>
        </div>
			

    </div>  <!-- end of main -->

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
