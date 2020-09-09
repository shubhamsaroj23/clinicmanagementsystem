<?php 
include("medicine_record.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php 
  $sr=$_GET["sr"];
  $query="select * from medicine_info where Sr='$sr'";
  $result=mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($result)) {
?>
<div class="container">
<div class="row">
         <div class="col-sm-4">     
        <form class="form-group" action="func.php" method="post">    
          <label>Sr No. :</label>
          <?php echo $row[0];?>
          <input type="hidden" name="sr" size="4" value="<?php echo $row[0];?>"><br>
          <label>Enter Medicine name :</label>
          <input type="text" name="mname" class="form-control" value="<?php echo $row[1];?>"><br>
          <label>Quantity :</label>
          <input type="text" name="qty" class="form-control" value="<?php echo $row[2];?>"><br>
          <label>Date of purchase :</label>
          <input type="date" name="dpurchase" class="form-control" value="<?php echo $row[3];?>"><br>
          <label>Expiry date :</label>
          <input type="date" name="dexpiry" class="form-control" value="<?php echo $row[4];?>"><br>
          <label>Payment :</label>
          <input type="text" name="payment" class="form-control" value="<?php echo $row[5];?>"><br>
          <label>Payment status :</label>
          <select name="paystatus" class="form-control" value="<?php echo $row[6];?>">

          <option value="Done" selected>Done</option>
          <option value="Pending">Pending</option>
         </select> 
       <input type="submit" class="btn btn-primary" name="update_medicine" value="Update Record">
        </form>       
         </div>
         </div>
         </div>


          
<? } ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>