
<?php include("func.php");
include("session.php");
?>
<html>
<head>
<title>Add Student Record</title>
</head>
<body>
<?php 
$id=$_GET["id"];
$query="delete from patient_info where sr=$id";
mysql_query($query);
echo "<center>Successfully Deleted</center>";
include("search_patient.php");
?>
</body>
</html>