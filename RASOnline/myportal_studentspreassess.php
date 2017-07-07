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
<title>RAS: Student's Pre-Assessment</title>
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
	
		<img src="RASpics/myportalpreassess_indicator.jpg" width='419' height='109'/>
	
		<br></br>
		<br></br>
		<table style="padding-top:7px;
					padding-bottom:7px;
					background:#fff;
					color:#000;
					border-radius:5pt 5pt 0pt 0pt;
					border-style: double;
					width:525px;
					text-align:center;">
					
					<th>Payment</th>
					
					<th>Fee</th> 
					<th>Total</th> 
					<th>Date of Payment</th> 
					
		
		
		
		<?php
				mysql_connect("localhost","root");
				mysql_select_db("dbenrollment");
				$syid="";
				$studentid = $_GET['studentid'];
				$yeargrade="";
				$yearlevelname="";
				$u = mysql_query("SELECT yeargrade from tblYearLevel,tblStudentYearLevel,tblStudentYear
				WHERE tblYearLevel.yearlevelcode=tblStudentYearLevel.yearlevelcode AND tblStudentYear.studentschoolyear=tblStudentYearLevel.studentschoolyear AND studentid='$studentid' HAVING MAX(schoolyearid)");
				$n = mysql_num_rows($u);	
				while($ss = mysql_fetch_array($u))
				{
				$yeargrade=$ss['yeargrade'];
				}
				$u = mysql_query("SELECT yearlevelname from tblYearLevel WHERE yearorder>(SELECT yearorder from tblYearLevel,tblStudentYearLevel,tblStudentYear
				WHERE tblYearLevel.yearlevelcode=tblStudentYearLevel.yearlevelcode  AND tblStudentYear.studentschoolyear=tblStudentYearLevel.studentschoolyear AND studentid='$studentid' HAVING MAX(schoolyearid))
				 AND yeargrade='$yeargrade' LIMIT 1");
				$n = mysql_num_rows($u);	
				while($ss = mysql_fetch_array($u))
				{
				$yearlevelname=$ss['yearlevelname'];
				}
				
				if($yearlevelname="" and $yeargrade="Grade School")
				{
					$u = mysql_query("SELECT yearlevelname from tblYearLevel WHERE yearorder=1 AND yeargrade='High School'");
					$n = mysql_num_rows($u);	
					while($ss = mysql_fetch_array($u))
					{
					$yearlevelname=$ss['yearlevelname'];
					}
				$s = mysql_query("SELECT fee_name,fee_category,fee_amount,fee_paymentdate FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname' AND fee_category!='Tuition' AND fee_category!='Computer Fee' GROUP BY fee_category,fee_name");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
	

					<tr style="text-align:center;">
							<td><?php echo $ss['fee_name']?></td>
				
				
							<td><?php echo $ss['fee_category']?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['fee_amount']?></td>
				
							<td><?php echo $ss['fee_paymentdate']?></td>
					</tr>
					<?php
					}
					$s = mysql_query("SELECT fee_name,fee_category,SUM(fee_amount) As fee_amount,fee_paymentdate FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname' AND fee_category!='Miscellaneous' AND fee_category!='Other Fees' GROUP BY fee_paymentdate");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
	

					<tr style="text-align:center;">
							<td><?php echo $ss['fee_name']?></td>
				
				
							<td><?php echo "Tuition & Computer Fee"?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['fee_amount']?></td>
				
							<td><?php echo $ss['fee_paymentdate']?></td>
					</tr>
					<?php
					}
					$s = mysql_query("SELECT SUM(fee_amount) As total FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname'");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
			<!-- <table style="	padding-top:7px;
							padding-bottom:7px;
							text-indent:10px;

							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:525px;"> -->

					<tr style="text-align:center;">
							<td><?php echo $ss['total']?></td>
					</tr>
				
					<?php
					}
				} elseIf ($yearlevelname="" and $yeargrade="High School")
				{
				
				?>
		<!--		<table style="	padding-top:7px;
							padding-bottom:7px;
							text-indent:10px;

							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:525px;"> -->

					<tr style="text-align:center;">
							<td><?php echo "<p>You have reached the highest grade in the school. You cannot be pre-assessed anymore. Thank You.</p>"?></td>
					</tr>
				
					<?php
					}
					else
					{
					$u = mysql_query("SELECT yearlevelname from tblYearLevel WHERE yearorder>(SELECT yearorder from tblYearLevel,tblStudentYearLevel,tblStudentYear
				WHERE tblYearLevel.yearlevelcode=tblStudentYearLevel.yearlevelcode  AND tblStudentYear.studentschoolyear=tblStudentYearLevel.studentschoolyear AND studentid='$studentid' HAVING MAX(schoolyearid))
				 AND yeargrade='$yeargrade' LIMIT 1");
				$n = mysql_num_rows($u);	
				while($ss = mysql_fetch_array($u))
				{
				$yearlevelname=$ss['yearlevelname'];
				}
					$s = mysql_query("SELECT fee_name,fee_category,fee_amount,fee_paymentdate FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname' AND fee_category!='Tuition' AND fee_category!='Computer Fee' GROUP BY fee_category,fee_name");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
	

					<tr style="text-align:center;">
							<td><?php echo $ss['fee_name']?></td>
				
				
							<td><?php echo $ss['fee_category']?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['fee_amount']?></td>
				
							<td><?php echo $ss['fee_paymentdate']?></td>
					</tr>
					<?php
					}
					$s = mysql_query("SELECT fee_name,fee_category,SUM(fee_amount) As fee_amount,fee_paymentdate FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname' AND fee_category!='Miscellaneous' AND fee_category!='Other Fees' GROUP BY fee_paymentdate");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
	

					<tr style="text-align:center;">
							<td><?php echo $ss['fee_name']?></td>
				
				
							<td><?php echo "Tuition & Computer Fee"?></td>
				
							<td style="color:red;text-indent:15px;">P<?php echo $ss['fee_amount']?></td>
				
							<td><?php echo $ss['fee_paymentdate']?></td>
					</tr>
					<?php
					}
					$s = mysql_query("SELECT SUM(fee_amount) As total FROM tblYearLevelFee,tblYearLevel
      WHERE tblYearLevelFee.yearlevelcode=tblYearLevel.yearlevelcode AND yearlevelname='$yearlevelname'");
				$n = mysql_num_rows($s);	
				while($ss = mysql_fetch_array($s))
				{
			?>
	<!--	 	<table style="	padding-top:7px;
							padding-bottom:7px;
							text-indent:10px;

							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;	
							width:525px;">	
	-->
					<tr>
						
						<td><br></br></td>
						<td style="text-indent:10px;"><b><h5>TOTAL:</b></h5></td>
						<td style="text-indent:0.5cm;">P<?php echo $ss['total']?></td>
					</tr>
			
					<?php
					}
			}?>
			</table>
			
	

			<div id="templatemo_sidebar" style="
									float:right;
									margin-top:-450px;
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

    </div> <!-- end of main -->

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
