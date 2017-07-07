<?php
mysql_connect("localhost","root","");
mysql_select_db("dbenrollment");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
function showerror()
{
	if(document.getElementById('password').value != document.getElementById('newpw').value)
		document.getElementById('error').style.display = "block";
	else if(document.getElementById('password').value == document.getElementById('newpw').value)
		document.getElementById('error').style.display = "none";
}

</script>
</head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAS: Settings</title>
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
                <li ><a href="myportal_login.php" class="current" style= "width:100px;">My Corner</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->
  </div> <!-- end of header -->
    
    <div id="templatemo_main">
	
		<img src="RASpics/myportalsettings_indicator.jpg" width='422' height='101'/>
	
			<br></br>
			<br></br>
			
				<div style="padding-top:3px;
							padding-bottom:3px;
							text-indent:5px;
							background:#000;
							color:#fff;
							border-radius:5pt 5pt 0pt 0pt;
							border-style: double;
							width:365px;
							margin-left:80px;">Change Password</div>
		<?php
			mysql_connect("localhost","root");
			mysql_select_db("dbenrollment");
			$studentid = $_GET['studentid'];
		?>
				<form method="post">
					<table style="	height:150px;
									width: 370px;
									border-style: double;
									padding: 5px;
									margin-left:80px;">	
						<tr>
							<td>Current Password:</td>
							<td><input type="password" name="currentpw" id="currentpw"></input></td>
						</tr>
						<tr>
							<td><label>New Password:</label></td>
							<td><input  type="password" id="newpw" name="newpw" class="field" title="newpw" /></td>
							<td><span id='min'>(min of 8- max of 15 characters)</span></td>
							</tr>
							
							<tr>
							<td><label>Retype Password:</label></td>
							<td><input  type="password" id="retypepw" name="retypepw" class="field" title="retypepw" /></td>
							<td id='error' style='display:none'><font color='red'>Password mismatch!</font></td>
							</tr>
						<tr style="padding:5px;">
							<th colspan="2"><input  name="save" type="submit" value="Save"></input>
							<input type="submit" value="Cancel"></input></th>
						</tr>
					</table>
				</form>
				
				<?php
				if(isset($_POST['save']))
				{
				$currentpw = $_POST['currentpw'];
				$newpw = $_POST['newpw'];
				$retypepw = $_POST['retypepw'];
				$studentid = $_GET['studentid'];
				
				if(strlen($newpw)<8||strlen($newpw)>15)
				{
				echo "<script>alert('New Password must be minimum of 8 letters and maximum of 15 letters.')</script>";
				}
				else if($newpw!=$retypepw)
				{
				echo "<script>alert('Password mismath.')</script>";
				}
				else
				{
				mysql_query("UPDATE tblstudentaccounts SET userpass='$newpw' WHERE studentid='$studentid'");
				echo "<script>alert('You have successfully changed your password. To verify that your password has been successfully updated, you will be automatically logged out.')</script>";
				echo"<script>window.location='myportal_logout.php?pg=changepassword'</script>";
				 }
				}
				?>
				
				
			<div id="templatemo_sidebar" style="
									float:right;
									margin-top:-270px;
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
</body>
</html>
