<!DOCTYPE html>
<?php
include("session.php");
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- <script type="text/javascript">
  
  function validate_data()
    {

var date3 = document.getElementById( "date3" );
 if( date3.value == "" )
 {
  window.alert("Please select date.");
  date3.focus();
  return false;
 }

  var date4 = document.getElementById( "date4" );
 if( date4.value == "" )
 {
  window.alert("Please select date.");
  date4.focus();
  return false;
 }
 else
 {
  return true;
 }
    }

</script> -->


</head>
<body>
<div class="container-fluid">
<div class="row">
  <div class="col-md-2">
    <div class="list-group">
      <a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff; border-color: #3498DB">Patients</a>
      <a href="admin-panel.php" class="list-group-item">New Patient</a>
      <a href="patient-details.php" class="list-group-item">Patients Details</a>
  </div>
  <hr>
  <div class="list-group">
      <a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff; border-color: #3498DB">My Records</a>
      <a href="patient_treatment.php" class="list-group-item">Patient Treatment</a>
      <a href="medicine_record.php" class="list-group-item">Medicines</a>
      <a href="earnings.php" class="list-group-item">Earnings</a>
      <a href="myevents.php" class="list-group-item">Events</a>
      <a href="logout.php" class="list-group-item">Logout</a>
   </div>
   </div>
   <div class="col-md-10">
    <div class="card">
      <div class="card-body" style="background-color:#3498DB; color:#ffffff;">
        <h3>Earnings Information</h3>
      </div> 
        
      <div class="card-body">

      <div class="row">
         <div class="col-sm-6">
          <div class="card-body">
        <h3>Daily Earnings</h3>
      </div> 
         
        <form class="form-group" action="" method="post">
        <label>Date :</label>
          <input type="date" name="date3" class="form-control" id="date3"><br>
        <!-- <label>NO. of Patients Treated Successfully :</label>
          <input type="text" name="pts" class="form-control"><br>
        <label>NO. of Patients Recovering :</label>
          <input type="text" name="pr" class="form-control"><br>
        <label>NO. of Patients Sent Out :</label>
          <input type="text" name="pso" class="form-control"><br> -->
        <input type="submit" class="btn btn-primary" name="date3_submit" value="Submit" onclick="return validate_data();">
        
<?php include("func.php");?>
       </div>
        <div class="col-sm-6">
          <div class="card-body">
        <h3>Monthly Earnings</h3>
      </div> 

      <label>Date :</label>
          <input type="month" name="date4" class="form-control" id="date4"><br>
        
        <input type="submit" class="btn btn-primary" name="date4_submit" value="Submit" onclick="return validate_data();">
        
        </div>
        </div>
  
        </form>
        </div>
        </div>
        </div>
        </div>
        </div>
       
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>  
</html>