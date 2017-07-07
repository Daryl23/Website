
<?php
	mysql_connect("localhost","root", "");
	mysql_select_db("dbenrollment");

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$vMessages = $_POST['vMessages'];

{
mysql_query("insert into tblcontacts values('$Name', '$Email', '$vMessages')");

//mysql_query("insert into tblcontacts values 'ggg', 'aaaa', 'qqqq', 'cccc'");
echo "<script>alert('You have successfully send the message. Thank you!')</script>";
//echo "<script>window.location = 'index.php'</script>";
}
?>