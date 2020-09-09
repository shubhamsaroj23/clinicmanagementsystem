<!DOCTYPE html>
<?php include("func.php");
include("session.php");
?>
<html>
<head>
	<title>Patient info Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="card">
<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
  <div class="row">
  <div class="col-md-1">
          <a href="admin-panel.php" class="btn btn-light">Go Back</a>
     </div>     
   			<div class="col-md-3"><h3>Patient Details</h3></div>
        <div class="col-md-8">
          <form class="form-group" action="search_patient.php" method="post">
          <div class="row">
           <div class="col-md-10"> <input type="text" name="search" class="form-control" placeholder="Enter something"></div>
            <div class="col-md-2"><input type="submit" name="Patient_search_submit" value="search" class="btn btn-light"></div>
         </div>
          </form>
        </div>
   		</div> 
      </div>
</div>
<div class="card-body"></div>
<table class="table table-hover">
  <thead>
    <tr>
    <th>Sr No.</th>
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
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details();?>  
  </tbody>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>