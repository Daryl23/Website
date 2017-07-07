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
<title>RAS: Frequently Asked Questions</title>
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
                <li><a href="contactus.php">Contact Us</a></li>
                <li><a href="admissions.php">Admissions</a></li>
                <li><a href="gallery.php">Gallery</a></li>
				<li><a href="myportal.php">My Portal</a></li>
				<li><a href="alumni.php" >Alumni</a></li>
				<li><a href="faq.php" class="current">FAQ</a></li>
          	</ul>   	
        
        </div> <!-- end of templatemo_menu -->

  </div> <!-- end of header -->
    
    <div id="templatemo_main">
		
		<img src="RASpics/faq_indicator.jpg" width='419' height='109'/>
		
						&nbsp;
				<br></br>


				<script type="text/javascript">
				var subs_array = new Array("subfaq1","subfaq2","subfaq3","subfaq4"); 		// Put the id's of your hidden divs in this array

				function displaySubs(the_sub){
					 if (document.getElementById(the_sub).style.display==""){
					   document.getElementById(the_sub).style.display = "none";return
				  }
				  for (i=0;i<subs_array.length;i++){
					   var my_sub = document.getElementById(subs_array[i]);
					   my_sub.style.display = "none";
					 }
				  document.getElementById(the_sub).style.display = "";
				}
				</script>
				</head>
				<body>
			<div class="open" style="margin-left:0.5cm;padding-top:1cm;width:900px;height:300px;">
			<img style = "padding-left:1cm;" src="picture/faq.jpg">
				<div style="padding-left:7cm;margin-top:-5.5cm;">
				<?php
					$q1=mysql_query("SELECT * FROM faq") or die(mysql_error());
							
					while($r=mysql_fetch_array($q1))
					{
						$faqid=$r['faqid'];
						$faqquestion=$r['faqquestion'];
						$faqanswer=$r['faqanswer'];
						
						echo "<p><a href=\"javascript:void(0)\" class=\"headings\" onClick=\"displaySubs('sub".$faqid."')\" onFocus=\"if(this.blur)this.blur()\";>".
							 "<strong>".$faqquestion."</strong> </a> </p>".
							 "<div class=\"para\"  id=\"sub".$faqid."\" style=\"display:none\">".$faqanswer."</div>";

					}
					echo "<br>";					

				?>
				</div>
					
			</div>
    </div>	<!-- end of main -->

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
