<?php

//delete.php
include("session.php");
include("func.php");

if(isset($_POST["id"]))
{
    $id=$_POST['id'];
	$query="delete from eventtb where id=$id";
	$result=mysqli_query($con,$query);
    echo "<center> $id Successfully Deleted</center>";
 
}

?>
