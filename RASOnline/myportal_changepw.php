<?php
		include('connect.php');

					$studentid=$_GET['studentid'];
					$currentpw = $_POST['currentpw'];
					$newpw = $_POST['newpw'];
					$retypepw = $_POST['retypepw'];
					
					$pw=mysql_fetch_array(mysql_query("Select * from tblstudentaccounts where studentid=$studentid"));
					$oldpw=$pw['userpass'];
					
					if($oldpw===$currentpw)
					{
						if($currentpw===$newpw)
						{
						echo"<script>alert('New password is the same with current password.');</script>";
						echo"<script>window.location='myportal_logout.php?pg=changepassword'</script>";
						}
						else
						{
							if($newpw!==$retype)
							{
								echo"<script>alert('Passwords do not match.');</script>";
								echo"<script>window.location='myportal_logout?pg=changepassword'</script>";
							}
							else
							{
								mysql_query("Update tblstudentaccounts SET userpass='$newpw' where studentid=$studentid");
								echo"<script>alert('Password successfully changed. \\nPlease remember your new password.');</script>";
								echo"<script>window.location='myportal_logout?pg=changepassword'</script>";	
							}
						
						}
					}
					else
					{
						echo"<script>alert('Entered value does not match current password.');</script>";
						echo"<script>window.location='myportal_logout?pg=changepassword'</script>";
					}


?>