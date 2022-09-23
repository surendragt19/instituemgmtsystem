
<?php
session_start();
$con=mysqli_connect("localhost","root","","IMS");
if($con==true)
{
	$utype=$_POST["users"];
	$username=$_POST["name"];
	$pass=$_POST["pass"];


if($utype=="Admin")
{

$query="select * from alogin where uid='$username' and passwd='$pass' and utype='$utype'";
	$result=mysqli_query($con,$query);
	

if(mysqli_num_rows($result)>0)

{
		$_SESSION["admin"]=$username;
		
			echo "<script>alert('Your login Successfully, Welcome to admin Zone');window.location.href='../Admin Zone/admin.php';</script>";
		}
		else
		{
				echo "<script>alert('Invalid userid or password');window.location.href='../login.php';</script>";
		}		
}
//Teacher
else if($utype=="Teacher")
{

$query="select * from addteacher where userid='$username' and passwd='$pass' and utype='$utype'";
	$result=mysqli_query($con,$query);
	

if(mysqli_num_rows($result)>0)

{
		$_SESSION["teacher"]=$username;
		
			echo "<script>alert('Your login Successfully, Welcome to Teacher Zone');window.location.href='../Teacher Zone/teacher.php';</script>";
		}
		else
		{
				echo "<script>alert('Invalid userid or password');window.location.href='../login.php';</script>";
		}		
}
//Student
else if($utype=="Student")
{

$query="select * from addstudent where sid='$username' and spaas='$pass' and stype='$utype'";
	$result=mysqli_query($con,$query);
	
//echo ".$_SESSION['student'].";
if(mysqli_num_rows($result)>0)

{
	
		$_SESSION["student"]=$username;
		
			echo "<script>alert('Your login Successfully, Welcome to Student Zone');window.location.href='../Student Zone/student.php';</script>";
		}
		else
		{
				echo "<script>alert('Invalid userid or password');window.location.href='../login.php';</script>";
		}		
}
//Parents
else if($utype=="Parents")
{

$query="select * from addstudent where pid='$username' and ppass='$pass' and ptype='$utype'";
	$result=mysqli_query($con,$query);
	

if(mysqli_num_rows($result)>0)

{
		$_SESSION["parents"]=$username;
		
			echo "<script>alert('Your login Successfully, Welcome to Parents Zone');window.location.href='../Parents Zone/parents.php';</script>";
		}
		else
		{
				echo "<script>alert('Invalid userid or password');window.location.href='../login.php';</script>";
		}		
}


}
else
{
	mysqli_eroor($con);
}
?>