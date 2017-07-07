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
<title>RAS: Student's Profile</title>
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
    
    <div id="templatemo_main" style="height:100px;">
	
			<img src="RASpics/myportalprofile_indicator.jpg" width='419' height='109'/>
			
				<br></br>	
				<br></br>
			
			<div id="templatemo_content" style="text-indent:30px;">	
			
				<?php
				mysql_connect("localhost","root");
				mysql_select_db("dbenrollment");
				$studentid = $_GET['studentid'];
				$s = mysql_query("SELECT * FROM tblStudents,tblStudentYear,tblStudentSections,tblYearLevelSections,tblStudentYearLevel,
				tblYearLevel WHERE tblStudents.studentid = '$studentid' AND 
				tblStudents.studentid=tblStudentYear.studentid AND
				tblStudentYearLevel.studentschoolyear=tblStudentYear.studentschoolyear AND 
				tblYearLevelSections.yearlevelsectioncode=tblStudentSections.yearlevelsectioncode AND
				tblYearLevelSections.yearlevelcode=tblYearLevel.yearlevelcode 
				AND tblStudentYearLevel.yearlevelcode=tblYearLevel.yearlevelcode HAVING MAX(tblStudentYear.schoolyearid)");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
				$studentid=$ss['studentid']
				?>
				
				<div style="padding-top:7px;
							padding-bottom:7px;
							text-indent:20px;
							background:#000;
							color:#fff;
							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:525px;">Welcome <?php echo $ss['st_fname']?> !</div>
				
				<table style="border-style:double;
							padding:10px;
							width:530px;
							height:300px;">
					<tr>
					<td><b>Student ID: </b></td>
					<td><?php echo $ss['studentid']?></td>
					</tr>
					<tr>
					<td><b>Full Name:</b> </td>
					<td><?php echo $ss['st_lname']?>
						,
						<?php echo $ss['st_fname']?> 
						<?php echo $ss['st_mname']?></td>
					</tr>
					<tr>
					<td><b>Birth Date:</b> </td>
					<td><?php echo $ss['st_bdate']?></td>
					</tr>
					<tr>
					<td><b>Religion:</b> </td>
					<td><?php echo $ss['st_religion']?></td>
					<tr>
					<td><b>Contact No.: </b></td>
					<td>#<?php echo $ss['st_contactno']?></td>
					</tr>
					<tr>
					<td><b>Gender: </b></td>
					<td><?php echo $ss['st_gender']?></td>
					</tr>
					
					<tr>
					<td><b>Grade and Section: </b> </td>
					<td><?php echo $ss['yearlevelname']."-".$ss['sectioncode']?></td>
					</tr>
					
					<tr>
					<td><b>Address: </b></td>
					<td><?php echo $ss['st_address']?></td>
					</tr>
					
					<tr>
					<td><b>Father: </b></td>
					<td><?php echo $ss['st_fname']?></td>
					</tr>
					
					<tr>
					<td><b>Father Contact: </b></td>
					<td>#<?php echo $ss['fa_contactno']?></td>
					</tr>
					
					
					<tr>
					<td><b>Father Occupation: </b></td>
					<td><?php echo $ss['fa_occupation']?></td>
					</tr>
					
					<tr>
					<td><b>Mother: </b> </td>
					<td><?php echo $ss['mo_name']?></td>
					</tr>
					
					<tr>
					<td><b>Mother Contact: </b> </td>
					<td>#<?php echo $ss['mo_contactno']?></td>
					</tr>
					
					<tr>
					<td><b>Mother Occupation: </b> </td>
					<td><?php echo $ss['mo_occupation']?></td>
					</tr>
					
					
					
					<?php if($ss['gua_name']=="")
					{
					?><tr>
					<td><b>Guardian: </b> </td><td>Parents</td></tr>
					<?php
					}else
					{
					?>
					<tr>
					<td><b>Guardian: </b> </td>
					<td><?php echo $ss['gua_name']?></td>
					</tr>
					
					<tr>
					<td><b>Guardian Relationship: </b> </td>
					<td>#<?php echo $ss['gua_relationship']?></td>
					</tr>
					
					<tr>
					<td><b>Mother Occupation: </b> </td>
					<td><?php echo $ss['gua_contactno']?></td>
					</tr>
					<?php
					}?>
					
					</tr>
				</table>
				
				
				<?php
				}
				
				?>
				</div>
	
		</div>

			<div id="templatemo_sidebar" style="
									float:right;
									margin-top:-40px;
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

    </div>     <!-- end of main -->
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