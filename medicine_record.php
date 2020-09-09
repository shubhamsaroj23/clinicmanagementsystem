<!DOCTYPE html>
<?php include("func.php");
include("session.php");
?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="validate1.js"></script>
</head>
<body>
<div class="card">
<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
  <div class="row">
  <div class="col-md-1">
          <a href="admin-panel.php" class="btn btn-light">Go Back</a>
     </div>     
        <div class="col-md-3"><h3>Medicines Record</h3></div>
        <div class="col-md-8">
          <form class="form-group" action="" method="post">
          <div class="row">
           <div class="col-md-10"> <input type="text" name="search" class="form-control" placeholder="Enter something"></div>
            <div class="col-md-2"><input type="submit" name="medicine_search_submit" value="search" class="btn btn-light"></div>
         </div>
          </form>
        </div>
      </div> 
      </div>
</div>
<div class="container">
  <div class="row">
   <div class="col-sm-4">         
   		  <form class="form-group" action="func.php" method="post" onsubmit="return validate_data();">    
          <!-- <label>Sr No. :</label>
          <input type="text" name="sr" size="4"><br> -->
   		    <label>Enter Medicine name :</label>
   		    <input type="text" name="mname" class="form-control" id="mname"><br>
   		    <label>Quantity :</label>
          <input type="text" name="qty" class="form-control" id="qty"><br>
   		    <label>Date of purchase :</label>
   		    <input type="date" name="dpurchase" class="form-control" id="dpurchase"><br>
   		    <label>Expiry date :</label>
   		    <input type="date" name="dexpiry" class="form-control" id="dexpiry"><br>
          <label>Payment :</label>
          <input type="text" name="payment" class="form-control" id="paymentm"><br>
          <label>Payment status :</label>
<select name="paystatus" class="form-control">
  <option value="Done" selected>Done</option>
  <option value="Pending">Pending</option>
</select>
          <br>     
       <input type="submit" class="btn btn-primary" name="medicine_submit" value="Submit">
   		  </form>       
 </div> 
   <div class="col-sm-8" style="width:100%;overflow:auto; max-height:600px;" >
<table class="table table-hover">
  <thead>
    <tr>
    <th>Sr no</th>
      <th>Medicine Name</th>
      <th>Quantity</th>
      <th>Date of Purchase</th>
      <th>Date of Expiry</th>
      <th>Payment</th>
      <th>Payment Status</th>
    </tr>
  </thead>
  <tbody>
    <?php get_medicine_details();?>  
  </tbody>
</table>
</div>
  </div>
  </div>

 <?php
if(isset($_POST['medicine_search_submit']))
{
  $search=$_POST['search'];
  $query="select * from medicine_info WHERE Name Like '%$search%'";
  $result=mysqli_query($con,$query);
  echo "
   
  <div class='container-fluid' style='margin-top:50px;'>
  <div class='card'>
    <div class='card-body'>
    
    <table class='table table-hover'>
  <thead>
    <tr>
      <th>sr no</th>
      <th>Medicine Name</th>
      <th>Quantity</th>
      <th>Date of Purchase</th>
      <th>Date of Expiry</th>
      <th>Payment</th>
      <th>Payment Status</th>
      <th>Action</th>
    </tr>
    </thead>
    "
    ;
  while($row=mysqli_fetch_array($result)){
  $sr=$row['Sr'];
  $mname=$row['Name'];
  $qty=$row['Quantity'];
  $dpurchase=$row['Purchase'];
  $dexpiry=$row['Expiry'];
  $payment=$row['Payment'];
  $paystatus=$row['Payment_Status'];
  echo "
      <tbody style='text-align:center;'>
      <tr>
      <td>$sr</td>
      <td>$mname</td>
      <td>$qty</td>
      <td>$dpurchase</td>
      <td>$dexpiry</td>
      <td>$payment</td>
      <td>$paystatus</td>
       <th><a href='edit_medicine.php?sr=",$row[0],"'>Edit</a> | <a href='delete_med.php?sr=",$row[0],"'>Delete</a></th>";
     }
   echo "</table></div></div></div>";
  }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>