<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php
include("func.php");
include("session.php");
if(isset($_POST['Patient_search_submit']))
{
	$search=$_POST['search'];
	$query="select * from patient_info WHERE Name Like '%$search%' or Contact Like '%$search%'";
	$result=mysqli_query($con,$query);
	echo "
	<div class='container-fluid' >
	<div class='card'>
		<div class='card-body' style='background-color:#3498DB; color:#ffffff;''><a href='patient-details.php' class='btn btn-light'>Go back</a></div>		<div class='card-body'>
    <table class='table table-hover'>
  <thead>
    <tr>
      <th>Name</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Contact</th>
      <th>Address</th>
      <th>Date</th>
      <th>Reason/Disease</th>
      <th>Prescribed Medicine</th>
      <th>Treatment</th>
      <th>Payment</th>
      <th>Payment Status</th>
      <th>Action</th>
    </tr>
    </thead>
    "
    ;
	while($row=mysqli_fetch_array($result)){
  $sr=$row['Sr'];
	$pname=$row['Name'];
  $gender=$row['Gender'];
  $age=$row['Age'];
  $contact=$row['Contact'];
  $address=$row['Address'];
  $date1=$row['Date'];
  $disease=$row['Disease'];
  $pre_medicine=$row['PrescribedMed'];
  $treatment=$row['Treatment'];
  $payment1=$row['Payment'];
  $payment_status1=$row['PaymentStatus'];
	echo "
      <tbody style='text-align:center;'>
      <tr>
      <td>$pname</td>
      <td>$gender</td>
      <td>$age</td>
      <td>$contact</td>
      <td>$address</td> 
      <td>$date1</td>
      <td>$disease</td>
      <td>$pre_medicine</td>
      <td>$treatment</td>
      <td>$payment1</td>
      <td>$payment_status1</td>
      <th><a href='edit_info.php?sr=",$row[0],"'>Edit</a> | <a href='del.php?sr=",$row[0],"'>Delete</a></th>";
     }
   echo "</table></div></div></div>";
  }
?>

</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>




 

