<?php
mysql_connect("localhost","root","");
mysql_select_db("dbenrollment");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RAS: Contact Us</title>
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
                <li><a href="about.php" >About Us</a></li>
                <li><a href="contactus.php" class="current">Contact Us</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
				<li><a href="myportal.php">My Portal</a></li>
				<li><a href="alumni.php">Alumni</a></li>
				<li><a href="faq.php">FAQ</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->

  </div> <!-- end of header -->
    
    <div id="templatemo_main">
		
		<img src="RASpics/contactus_indicator.jpg" width='419' height='109'/>
		
			<br></br>
			<script type="text/javascript">
function validateForm() {
    var x = document.getElementById('Email').value;
var y=document.getElementById('vMessages').value;
   var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
       alert("Not a valid e-mail address");
        return false;
} else if (y.length<=0) 
{
alert("Please include a message.");
return false;
}
}
</script>
			<div id="contact_form" style="padding-left:50px;">
            
                    <p style="line-height:180%;">Feel free to message us your question by providing your Name and Email <br> 
					in the space provided and we will get back to you as soon as possible.</p>
					<br>
					<br>
                
                     <form name="myForm">
                        <input type="hidden" name="post" value="Send" />
                      	<label for="Name">Name:</label> <input style="width:270px;" type="text" id="Name" name="Name" class="required input_field"  />  <i>(optional)</i>
                      	<div class="cleaner_h10"></div> 
                        
                        <label for="Email">Email:</label> <input style="width:270px;" type="text" id="Email" name="Email" class="validate-email required input_field" />
                      	<div class="cleaner_h10"></div>

                        <label for="Message">Message:</label>
						<textarea id="vMessages" name="vMessages" rows="12" cols="48" class="required"></textarea>
                        <div class="cleaner_h10"></div>
                        
                        <input type="submit" class="submit_btn" name="Submit" id="Submit" value="Send" onclick="return validateForm();"/>
                        <input type="reset" class="submit_btn" name="Reset" id="Reset" value="Reset" />
						<br></br>
						<br></br>
					</form>
						
				</div>
			
			<br></br>
			<center style="margin-top:8cm;"><img src="RASpics/map.jpg" width='870' height='496'/>
			<br></br>
			<img src="RASpics/detailed_direction.jpg" width='885' height='451'/></center>
			
        </div>

<?php
				
				
				if(isset($_POST['Submit']))
				{			
				$Name = $_POST['Name'];
				$Email = $_POST['Email'];
				$vMessages = $_POST['vMessages'];
				{
				mysql_query("insert into tblcontacts values('$Name', '$Email', '$vMessages', ' ')");
				//mysql_query("insert into tblcontacts values ('a', 'v', 'si', 'di')");
				echo "<script>alert('You have successfully send the message. Thank you!')</script>";
				}
				}
				?>
				

				
				
		<div id="templatemo_sidebar" style = "text-align:justify;margin-top:-38cm;">
		
				<h4 style="text-align:left;color: #2E8B57;">RAS Address</h4>
				<p style="text-align:left;line-height: 70%;">Gualberto Ave. Brgy. Namunga, <br></br>
				Rosario, Batangas</p>
				
				<div class="cleaner_h20 horizon_divider"></div>
				<div class="cleaner_h20"></div>
				
				<br></br>
				<h4 style="text-align:left;margin-top:-0.8cm;color: #2E8B57;">Phone Number</h4>
				<p style="text-align:left;line-height: 70%;">
								<?php
					$q1=mysql_query("SELECT contactno FROM schoolinfo") or die(mysql_error());
							
					while($r=mysql_fetch_array($q1))
					{
						$contactno=$r['contactno'];
						
						
						echo "<p style=\"text-align:left;line-height: 100%;\">#".$contactno."</p>";
					}				

				?>
				</p>
				
				<div class="cleaner_h20 horizon_divider"></div>
				<div class="cleaner_h20"></div>
				
				<h4 style="text-align:left;color: #2E8B57;">Email</h4>
				<p style="text-align:left;line-height: 70%;">rahs_2003@yahoo.com</p>
				
				<div class="cleaner_h20 horizon_divider"></div>
				<div class="cleaner_h20"></div>
		
		
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
