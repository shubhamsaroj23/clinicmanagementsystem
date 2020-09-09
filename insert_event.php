<?php

//insert.php

include("func.php");
include("session.php");

if(isset($_POST["title"]))
{
$title=$_POST['title'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	
	$query="insert into eventtb (title, startevent, endevent) values('$title','$start','$end')";
	$result=mysqli_query($con,$query);
	

}




?>
