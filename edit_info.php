<?php 

include("search_patient.php");

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="validate.js"></script>
</head>
<body>
<?php 
  $sr=$_GET["sr"];
  $query="select * from patient_info where Sr='$sr'";
  $result=mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($result)) {
?>
<div class="card-body">
           
  <form class="form-group" action="edit_info.php" method="post" onsubmit="return validate_data();">
        <div class="row">
         <div class="col-sm-6">
          <div class="card-body">
        <h3>Personal Info</h3>
      </div> 
          <label>Sr No. :</label>
          <?php echo $row[0];?>
          <input type="hidden" name="sr" size="4" value="<?php echo $row[0];?>"><br>
          <label>Name :</label>
          <input type="text" name="pname" class="form-control" value="<?php echo $row[1];?>"><br>
          <label>Gender :</label>
          <input type="radio" name="gender"  value="<?php echo $row[2];?>">Female
          <input type="radio" name="gender" value="<?php echo $row[2];?>">Male<br>
          <label>Age :</label>
          <input type="text" name="age" class="form-control" value="<?php echo $row[3];?>"><br>
          <label>Contact :</label>
          <input type="text" name="contact" class="form-control" value="<?php echo $row[4];?>" ><br>
          <label>Address :</label>
      <textarea rows="4" cols="50" name="address" class="form-control" value="<?php echo $row[5];?>" > </textarea><br>
          <label>Date :</label>
          <input type="date" name="date1" class="form-control" value="<?php echo $row[6];?>" id="date1"><br>        
          </div>
          <div class="col-sm-6">
          <div class="card-body">
        <h3>Treatment</h3>
      </div> 
           <label>Reason/Disease :</label>
      <textarea rows="4" cols="50" name="disease" class="form-control" value="<?php echo $row[7];?>" id="disease1"></textarea><br>   
          
          <label>Prescribed Medicine :</label>
<textarea rows="4" cols="50" name="pre_medicine" class="form-control" value="<?php echo $row[8];?>" id="pre_medicine1"></textarea><br>  
          <label>Treatment :</label>
  <select name="treatment" class="form-control" value="<?php echo $row[9];?>" id="treatment">
  <option value="Treated successfully" selected>Treated successfully</option>
  <option value="Recovering">Recovering</option>
  <option value="Sent to hospital">Sent to hospital</option>
</select>
          
          
          <br>
          <label>Payment :</label>
          <input type="text" name="payment1" class="form-control" value="<?php echo $row[10];?>" id="payment1"><br>
          <label>Payment Status :</label>
          <select name="payment_status1" class="form-control" value="<?php echo $row[11];?>" id="payment_status1">
  <option value="Done" selected>Done</option>
  <option value="Pending">Pending</option>
</select>
          <br>
       </div>
       </div>
       <input type="submit" class="btn btn-primary" name="update_info" value="Update record">
        </form>        
    </div>
<? } ?><p align="center"><a href="admin-panel.php" class="btn btn-primary">Go Back</a></p>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>