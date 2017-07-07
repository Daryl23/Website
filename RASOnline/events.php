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
<title>RAS: Featured News</title>
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
                <li><a href="index.php" class="current" >Home</a></li>
                <li><a href="about.php" >About Us</a></li>
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
		
		
						
						<div id="pagination" style="text-align:center;margin-top:-0.8cm;">
						<br></br>
						<?php
						// database connection info
						$conn = mysql_connect('localhost','root','') or trigger_error("SQL", E_USER_ERROR);
						$db = mysql_select_db('dbenrollment',$conn) or trigger_error("SQL", E_USER_ERROR);

						$sql = "SELECT COUNT(*) FROM newsevents WHERE newscategory='events'";
						// find out how many rows are in the table 
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						$r = mysql_fetch_row($result);
						$numrows = $r[0];

						// number of rows to show per page
						$rowsperpage = 1;
						// find out total pages
						$totalpages = ceil($numrows / $rowsperpage);

						// get the current page or set a default
						if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
						   // cast var as int
						   $currentpage = (int) $_GET['currentpage'];
						} else {
						   // default page num
						   $currentpage = 1;
						} // end if

						// if current page is greater than total pages...
						if ($currentpage > $totalpages) {
						   // set current page to last page
						   $currentpage = $totalpages;
						} // end if
						// if current page is less than first page...
						if ($currentpage < 1) {
						   // set current page to first page
						   $currentpage = 1;
						} // end if

						// the offset of the list, based on current page 
						$offset = ($currentpage - 1) * $rowsperpage;

						$sql = "SELECT * FROM newsevents WHERE newscategory='events' LIMIT $offset, $rowsperpage";

						// get the info from the db 
						$result = mysql_query($sql, $conn) or trigger_error("SQL", E_USER_ERROR);
						echo "<table>";
						$ctr=0;

						// while there are rows to be fetched...
						while ($list = mysql_fetch_assoc($result)) {
							  // echo data
							$newsid=$list['newsid'];
							$newstitle=$list['newstitle'];
							$newscategory=$list['newscategory'];
							$newscontent=$list['newscontent'];	
							
							echo '<img style="width:350px;height:200px;" src="data:image/jpeg;base64,'.base64_encode( $list['newsimage'] ).'"/>';
							
							echo '<div style="text-align:center;">';
							echo "<tr><td><big><h2 style='color: #2E8B57'>$newstitle</h2></big><p style='text-align:justify;line-height:200%;'>$newscontent</p></td></tr>";
							echo '</div>';
						} // end while

						echo "</table>";
						echo "<br><center>";

						/******  build the pagination links ******/
						// range of num links to show
						$range = 3;

						// if not on page 1, don't show back links
						if ($currentpage > 1) {
						   // show << link to go back to page 1
						   echo " <a href='?pg=events&currentpage=1'><<</a> ";
						   // get previous page num
						   $prevpage = $currentpage - 1;
						   // show < link to go back to 1 page
						   echo " <a href='?pg=events&currentpage=$prevpage'><</a> ";
						} // end if 

						// loop to show links to range of pages around current page
						for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
						   // if it's a valid page number...
						   if (($x > 0) && ($x <= $totalpages)) {
							  // if we're on current page...
							  if ($x == $currentpage) {
								 // 'highlight' it but don't make a link
								 echo " [<b>$x</b>] ";
							  // if not current page...
							  } else {
								 // make it a link
								 echo " <a href='?pg=events&currentpage=$x'>$x</a> ";
							  } // end else
						   } // end if 
						} // end for
										 
						// if not on last page, show forward and last page links        
						if ($currentpage != $totalpages) {
						   // get next page
						   $nextpage = $currentpage + 1;
							// echo forward link for next page 
						   echo " <a href='?pg=events&currentpage=$nextpage'>></a> ";
						   // echo forward link for lastpage
						   echo " <a href='?pg=events&currentpage=$totalpages'>>></a> ";
						} // end if
						/****** end build pagination links ******/
						echo "</center>";
						?>
						</div>

    	
		<div id="templatemo_content3" style="text-align:center;">
			<h3 style="color: #2E8B57;margin-top:-10.3cm;"><b>FEATURED NEWS</h2></b>
			
			<!-- sidebar toh ang laman ay yung features ng news and events -->
			
									<?php
										$q1=mysql_query("SELECT newsid, substring(newscontent,1,90) As newscontent, newstitle FROM newsevents WHERE newscategory='news' LIMIT 3") or die(mysql_error());
												
										while($r=mysql_fetch_array($q1))
										{
											$newsid=$r['newsid'];
											$newstitle=$r['newstitle'];
											$newscontent=$r['newscontent'];
											
											echo "<h4>".$newstitle."</h4>";
											?>
											
											<p><?php echo $newscontent; ?>...<a href="news.php?newsid=<?php echo $newsid; ?>"> read more </a></p>
												 <div class="cleaner_h20 horizon_divider"></div>
								<div class="cleaner_h20"></div>
								<?php
										}
				
									?>

<!--				<h4 style="text-align:left;color: #2E8B57;line-height: 200%;">Follow Us</h3>
	
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

-->
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
