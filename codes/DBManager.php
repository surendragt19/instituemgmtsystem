<?php

class DBManager
{
function ExecuteNonQuery($command)
{
	$con=mysqli_connect("localhost","root","","IMS");
	if($con==true)
	{
		$x= mysqli_query($con,$command);
	       //return ($x>0)?true:false;
		if($x>0)
			return true;
		else
			return false;
	}
	else
	{
		mysqli_eroor($con);
		return false;
	}
	}
}
?>