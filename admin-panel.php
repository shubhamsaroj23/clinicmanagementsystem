<?php
   include("session.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="validate.js"></script>
</head>
<body>
<div class="container-fluid">
<div class="row">
  <div class="col-md-2">
    <div class="list-group">
      <a href="" class="list-group-item active" style="background-color:#3498DB; color:#ffffff; border-color: #3498DB">Patients</a>
      <a href="admin-panel.php" class="list-group-item">New Patient</a>
      <!-- <a href="existing_patient.php" class="list-group-item">Existing Patient</a> -->
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
   			<h3>Enter Patients Record</h3>
   		</div> 
        
   		<div class="card-body">
   		  <form class="form-group" action="func.php" method="post" onsubmit="return validate_data();">
        <div class="row">
         <div class="col-sm-6">
          <div class="card-body">
        <h3>Personal Info</h3>
      </div>
   		    <label>Name :</label>
   		    <input type="text" name="pname" class="form-control" value="" id="pname"><br>
   		    <label>Gender :</label>
          <input type="radio" name="gender" value="female" id="gender1">Female
          <input type="radio" name="gender" value="male" id="gender2">Male<br>
   		    <label>Age :</label>
   		    <input type="text" name="age" class="form-control" id="age"><br>
   		    <label>Contact :</label>
   		    <input type="text" name="contact" class="form-control" id="contact"><br>
          <label>Address :</label>
          <textarea rows="4" cols="50" name="address" class="form-control"></textarea><br>
          <label>Date :</label>
          <input type="date" name="date1" class="form-control" id="date1"><br>
          </div>
          <div class="col-sm-6">
          <div class="card-body">
        <h3>Treatment</h3>
      </div> 
          <label>Reason/Disease :</label>
          <textarea rows="4" cols="50" name="disease" class="form-control" id="disease1"></textarea><br>   
          <label>Prescribed Medicine :</label>
          <textarea rows="4" cols="50" name="pre_medicine" class="form-control" id="pre_medicine1"></textarea><br>  
          <label>Treatment :</label>
           <select name="treatment" class="form-control">
  <option value="Treated successfully" selected>Treated successfully</option>
  <option value="Recovering">Recovering</option>
  <option value="Sent to hospital">Sent to hospital</option>
</select>
          

          <br>
          <label>Payment :</label>
          <input type="text" name="payment1" class="form-control" id="payment1"><br>
          <label>Payment Status :</label>
          <select name="payment_status1" class="form-control">
  <option value="Done" selected>Done</option>
  <option value="Pending">Pending</option>
</select>
          <br>
       </div>
       </div>
       <input type="submit" class="btn btn-primary" name="Patients_submit" value="Submit">
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