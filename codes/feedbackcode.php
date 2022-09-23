<?php

require "dbmanager.php";
$name=$_POST["name"];
$email=$_POST["email"];
$msg=$_POST["msg"];
$pic=$_FILES["profile"]['name'];
$image_name = $_FILES['profile']['name'] ;
$target_file = "upload/$image_name";
move_uploaded_file($_FILES['profile']['tmp_name'], $target_file);
$star=$_POST["star"];

//insert command

$sql="insert into feedback (name,email,msg,picture,star) values('$name','$email','$msg','$pic','$star')";

$db=new dbmanager();

$x=$db->executenonquery($sql);

if($x==true)
{
	echo "<script>alert('Thanks for feedback');window.location.href='../feedback.php';</script>";
}
else
{
	echo "<script>alert('Your quiry is not summited');window.location.href='../feedback.php';</script>";
}
?>