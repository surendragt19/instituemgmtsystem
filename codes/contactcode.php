<?php
require "DBManager.php";
$db=new DBManager();
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$clg_name=$_POST["clg_name"];
$email=$_POST["email"];
$address=$_POST["add"];
$mobile=$_POST["mob"];
$msg=$_POST["msg"];
//insert command
$sql="insert into contact values('$first_name','$last_name','$clg_name','$email','$address','$mobile','$msg')";
$x=$db->ExecuteNonQuery($sql);
if($x==true)
	echo "<script>alert('Thanks for enquiry as soon as we contect you');window.location.href='../contact.php'</script>";
else
	echo "<script>alert('your quiry is not submit');window.location.href='../contact.php'</script>";


?>