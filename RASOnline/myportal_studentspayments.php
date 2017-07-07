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
<title>RAS: Student's Payments</title>
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
	
		<img src="RASpics/myportalpayments_indicator.jpg" width='419' height='109'/>
	
			<br></br>
			<br></br>
			
							<div style=></div>
			
			
		<table style="padding-top:7px;
					padding-bottom:7px;
					background:#fff;
					color:#000;
					border-radius:3pt 3pt 3pt 3pt;
					border-style: double;
					width:525px;
					text-align:center;"
					onclick="myFun(event)">
					
					
					<th>Fee Name</th>
					<th style="word-spacing:1cm;">Category</th> 
					<th style="word-spacing:1cm;">Balance</th>
					<th>Date of Payment</th> 
			<?php
				mysql_connect("localhost","root");
				mysql_select_db("dbenrollment");
				$studentid = $_GET['studentid'];
				$s = mysql_query("SELECT tblStudents.studentid,studentfee As feeid,balancename,balancecategory,balance FROM tblStudentTransactions,tblStudentYear,tblStudents
      WHERE tblStudentYear.studentschoolyear=tblStudentTransactions.studentschoolyear
      AND tblStudents.studentid=tblStudentYear.studentid 
      AND tblStudents.studentid='$studentid'
	  AND balancecategory!='Tuition' AND balancecategory!='Computer Fee'
        AND balance!=0
        GROUP BY balancecategory,balancename");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
				$studentid=$ss['studentid']
			?>
		<!--	<table style="	padding-top:7px;
							padding-bottom:7px;
							text-indent:10px;

							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:525px;">
		-->

					<tr style="text-align:center;">
							<td><?php echo $ss['balancename']?></td>
				
				
							<td><?php echo $ss['balancecategory']?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['balance']?></td>
				
							
					</tr>
					
				
			<?php
				}
			
			
					$s = mysql_query("SELECT tblStudents.studentid,studentfee As feeid,balancename,balancecategory,SUM(balance) As balance,balancedate FROM tblStudentTransactions,tblStudentYear,tblStudents
      WHERE tblStudentYear.studentschoolyear=tblStudentTransactions.studentschoolyear
      AND tblStudents.studentid=tblStudentYear.studentid 
      AND tblStudents.studentid='$studentid'
	  AND balancecategory!='Miscellaneous' AND balancecategory!='Other Fees'
        AND balance!=0
        GROUP BY balancedate");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
				$studentid=$ss['studentid']
			?>
		<!--	<table style="	padding-top:7px;
							padding-bottom:7px;
							text-indent:10px;

							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:525px;">
		-->

					<tr style="text-align:center;">
							<td><?php echo $ss['balancename']?></td>
				
				
							<td><?php echo 'Tuition & Computer Fee'?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['balance']?></td>
				<td style="color:red;text-indent:15px;"><?php echo $ss['balancedate']?></td>
				
							
					</tr>
					
				
			<?php
				}
			?>
			<?php
				mysql_connect("localhost","root");
				mysql_select_db("dbenrollment");
				$studentid = $_GET['studentid'];
				$t = mysql_query("SELECT tblStudentYear.studentid,SUM(balance) As balance FROM tblStudentTransactions,tblStudentYear,tblStudents
      where  tblStudentYear.studentschoolyear=tblStudentTransactions.studentschoolyear
      AND tblStudents.studentid=tblStudentYear.studentid 
      AND tblStudents.studentid='$studentid' 
	  AND balancecategory!='Other Fees'");
				$m = mysql_num_rows($t);	
				while($tt = mysql_fetch_array($t))
				{
				$studentid=$tt['studentid']
			?>
			
						<tr>
							<td><br></br></td>
							<td><h5><b>TOTAL</b></h5></td>
							<td><h4 style="margin-left:2scm;color:red;">P  <?php echo $tt['balance']?>.00</h4></td>
						</tr>
				
			<?php
				}
			?>
			</table>

	
			<div id="templatemo_sidebar" style="
									float:right;
									margin-top:-330px;
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
