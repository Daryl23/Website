<?php
	mysql_connect("localhost","root");
	mysql_select_db("dbenrollment");
	session_start();
	$username = $_POST['username'];
	$userpass = $_POST['userpass'];
	$s = mysql_query("SELECT * FROM tblstudentaccounts WHERE username = '$username' and userpass = '$userpass'");
	$n = mysql_num_rows($s);
	$ss = mysql_fetch_array($s);
	if($n == 1)
	{
		$studentid=$ss['studentid'];
		echo "<script>window.location='myportal_studentsprofile.php?studentid=$studentid';</script>";
		echo "<script>alert('You have successfully login!')</script>";
		
	}
	else
	{
		echo "<script>alert('Invalid username or password')</script>";
		echo "<script>history.go(-1)</script>";
	}
?>