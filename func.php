<?php
$con=mysqli_connect("localhost","root","","cmsdb");


if(isset($_POST['Patients_submit']))
{
 function validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }
	$pname=$_POST['pname'];
	$gender=$_POST['gender'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$date1=$_POST['date1'];
	$disease=$_POST['disease'];
	$pre_medicine=$_POST['pre_medicine'];
	$treatment=$_POST['treatment'];
	$payment1=$_POST['payment1'];
	$payment_status1=$_POST['payment_status1'];
	$query="insert into patient_info(Name,Gender,Age,Contact,Address,Date,Disease,PrescribedMed,Treatment,Payment,PaymentStatus) values('$pname','$gender','$age','$contact','$address','$date1','$disease','$pre_medicine','$treatment','$payment1','$payment_status1')";
	$result=mysqli_query($con,$query);
	if($result)
	{  
		echo "<script> alert('Patient info entered. ');</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
	else{
		echo "<script>alert('Patient info already present. ');</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";
	}
}
function get_patient_details(){
	global $con;
	$query="select * from patient_info";
	$result=mysqli_query($con,$query);
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
	echo "<tr>
	  <td>$sr</td>
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
    </tr>
	";
	}
}

function delete_info(){
	global $con;
	$id=$_GET["sr"];
	$query="delete from patient_info where Sr=$id";
	$result=mysqli_query($con,$query);
	echo "<script> alert('Patient info deleted. ');</script>";
	echo "<script>window.open('patient-details.php','_self')</script>";
    //echo "<center> $id Successfully Deleted</center>";
}

if(isset($_POST['update_info']))
{
	function validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }
	
	$sr=$_POST['sr'];
	$pname=$_POST['pname'];
	// $gender=$_POST['gender'];
	$age=$_POST['age'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$date1=$_POST['date1'];
	$disease=$_POST['disease'];
	$pre_medicine=$_POST['pre_medicine'];
	$treatment=$_POST['treatment'];
	$payment1=$_POST['payment1'];
	$payment_status1=$_POST['payment_status1'];
	$query="update patient_info set Name='$pname',Age='$age',Contact='$contact',Address='$address' 
              ,Date='$date1',Disease='$disease',PrescribedMed='$pre_medicine',Treatment='$treatment',Payment='$payment1',PaymentStatus='$payment_status1'
	where Sr=$sr";
	$result=mysqli_query($con,$query);
	if($result){

		echo "<script> alert('Patient info updated. ');</script>";
		echo "<script>window.open('patient-details.php','_self')</script>";
	// echo "<center>Successfully Updated in DATABASE</center>";
    }
}


if(isset($_POST['medicine_submit']))
{
	function validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }
	$mname=$_POST['mname'];
	$qty=$_POST['qty'];
	$dpurchase=$_POST['dpurchase'];
	$dexpiry=$_POST['dexpiry'];
	$payment=$_POST['payment'];
	$paystatus=$_POST['paystatus'];
	$query="insert into medicine_info(Name,Quantity,Purchase,Expiry,Payment,Payment_Status) values('$mname','$qty','$dpurchase','$dexpiry','$payment','$paystatus')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script> alert('Medicine record entered. ');</script>";
		echo "<script>window.open('medicine_record.php','_self')</script>";
	}
}

function get_medicine_details(){
	global $con;
	$query="select * from medicine_info";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
    $sr=$row['Sr'];
	$mname=$row['Name'];
	$qty=$row['Quantity'];
	$dpurchase=$row['Purchase'];
	$dexpiry=$row['Expiry'];
	$payment=$row['Payment'];
	$paystatus=$row['Payment_Status'];
	echo "<tr>
	  <td>$sr</td>
      <td>$mname</td>
      <td>$qty</td>
      <td>$dpurchase</td>
      <td>$dexpiry</td>
      <td>$payment</td>
      <td>$paystatus</td>
    </tr>
	";
	}
}


function del_medicine(){
	global $con;
	$sr=$_GET["sr"];
	$query="delete from medicine_info where Sr=$sr";
	$result=mysqli_query($con,$query);
    echo "<center> $sr Successfully Deleted</center>";
}

if(isset($_POST['update_medicine']))
{

	$sr=$_POST['sr'];
	$mname=$_POST['mname'];
	$qty=$_POST['qty'];
	$dpurchase=$_POST['dpurchase'];
	$dexpiry=$_POST['dexpiry'];
	$payment=$_POST['payment'];
	$paystatus=$_POST['paystatus'];
	$query="update medicine_info set Name='$mname',Quantity='$qty',Purchase='$dpurchase',Expiry='$dexpiry',Payment='$payment',Payment_Status='$paystatus' where Sr=$sr";
	$result=mysqli_query($con,$query);
	if($result){
	echo "<center>Successfully Updated in DATABASE</center>";
	echo "<script>window.open('medicine_record.php','_self')</script>";
    }
}



if(isset($_POST['date2_submit']))
{
  $search=$_POST['date2'];
  $result1 = mysqli_query($con,"SELECT * FROM patient_info WHERE Date Like '%$search%' and Treatment Like '%Treated Successfully%'");
  $rows1 = mysqli_num_rows($result1);

  $result2 = mysqli_query($con,"SELECT * FROM patient_info WHERE Date Like '%$search%' and Treatment Like '%Recovering%'");
  $rows2 = mysqli_num_rows($result2);

  $result3 = mysqli_query($con,"SELECT * FROM patient_info WHERE Date Like '%$search%' and Treatment Like '%Sent to hospital%'");
 $rows3 = mysqli_num_rows($result3);

  echo "   
  <div class='container-fluid' style='margin-top:50px;'>
  <div class='card'>
     <div class='card-body'> 
      <label>NO. of Patients Treated Successfully :</label>
      <br>";
  // while($row=mysqli_fetch_array($result)){  
  //$treatment=$row['Treatment'];
  echo 
  " <input type='text' name='pts' class='form-control' value='$rows1'><br>
    <label>NO. of Patients Recovering :</label>
    <input type='text' name='pr' class='form-control' value='$rows2'><br>
    <label>NO. of Patients Sent To hospital :</label>
    <input type='text' name='pso' class='form-control' value='$rows3'>";    
     // }
  }


  if(isset($_POST['date3_submit']))
{
  $search=$_POST['date3'];
  $result1 = mysqli_query($con,"SELECT * FROM patient_info WHERE Date Like '%$search%' and Treatment Like '%'");
  $rows1 = mysqli_num_rows($result1);

  $result2 = mysqli_query($con,"SELECT SUM(Payment) AS payment1 FROM patient_info where Date Like '%$search%' and PaymentStatus Like '%Done%'"); 
  $rows2 = mysqli_fetch_assoc($result2); 
  $sum1 = $rows2['payment1'];

  $result3 = mysqli_query($con,"SELECT SUM(Payment) AS payment2 FROM patient_info where Date Like '%$search%' and PaymentStatus Like '%Pending%'"); 
  $rows3 = mysqli_fetch_assoc($result3); 
  $sum2 = $rows3['payment2'];

  echo "   
  <div class='container-fluid' style='margin-top:50px;'>
  <div class='card'>
     <div class='card-body'> 
      <label>NO. of Patients Treated :</label>
      <br>";
  echo 
  " <input type='text' name='pt1' class='form-control' value='$rows1'><br>
    <label>Total Payment done :</label>
    <input type='text' name='pd' class='form-control' value='$sum1'><br>
    <label>Total Payment Pending :</label>
    <input type='text' name='pdp' class='form-control' value='$sum2'><br>
    </div>
    </div>
    </div>
  ";    

  }


  if(isset($_POST['date4_submit']))
{
  $search=$_POST['date4'];
  $result1 = mysqli_query($con,"SELECT * FROM patient_info WHERE Date Like '%$search%' and Treatment Like '%'");
  $rows1 = mysqli_num_rows($result1);

  $result2 = mysqli_query($con,"SELECT SUM(Payment) AS payment1 FROM patient_info where Date Like '%$search%' and PaymentStatus Like '%Done%'"); 
  $rows2 = mysqli_fetch_assoc($result2); 
  $sum1 = $rows2['payment1'];

  $result3 = mysqli_query($con,"SELECT SUM(Payment) AS payment2 FROM patient_info where Date Like '%$search%' and PaymentStatus Like '%Pending%'"); 
  $rows3 = mysqli_fetch_assoc($result3); 
  $sum2 = $rows3['payment2'];

  echo "   
  <div class='container-fluid' style='margin-top:50px;'>
  <div class='card'>
     <div class='card-body'> 
      <label>NO. of Patients Treated :</label>
      <br>";
  echo 
  " <input type='text' name='pt1' class='form-control' value='$rows1'><br>
    <label>Total Payment done :</label>
    <input type='text' name='pd' class='form-control' value='$sum1'><br>
    <label>Total Payment Pending :</label>
    <input type='text' name='pdp' class='form-control' value='$sum2'><br>
    </div>
    </div>
    </div>
  ";    

  }

  if(isset($_POST['cnumber_submit']))
{
$search=$_POST['cnumber'];
  $query="select * from patient_info where Contact Like '%$search%'";
  $result=mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($result)) {

  	$pname=$row['Name'];
    $gender=$row['Gender'];
  $age=$row['Age'];
  $contact=$row['Contact'];
  $address=$row['Address'];
  $date1=$row['Date'];

  echo"
  <div class='card-body'>
   		  <form class='form-group' action='' method='post' onsubmit='return validate_data();''>
        <div class='row'>
         <div class='col-sm-6'>
          <div class='card-body'>
        <h3>Personal Info</h3>
      </div>
   		    <label>Name :</label>
   		    <input type='text' name='pname' class='form-control' value='$pname' id='pname'><br>
   		    <label>Gender :</label>
          <input type='radio' name='gender' class='form-control' value='$gender' id='gender1'>Female
          <input type='radio' name='gender' class='form-control' value='$gender' id='gender2'>Male<br>
   		    <label>Age :</label>
   		    <input type='text' name='age' class='form-control' value='$age' id='age'><br>
   		    <label>Contact :</label>
   		    <input type='text' name='contact' class='form-control' value='$contact' id='contact'><br>
          <label>Address :</label>
          <textarea rows='4' cols='50' name='address' class='form-control' value='$address' ></textarea><br>
          <label>Date :</label>
          <input type='date' name='date1' class='form-control' value='$date1' id='date1'><br>
          </div>

          <div class='col-sm-6'>
          <div class='card-body'>
        <h3>Treatment</h3>
      </div> 
          <label>Reason/Disease :</label>
          <textarea rows='4' cols='50' name='disease' class='form-control' id='disease1'></textarea><br>   
          <label>Prescribed Medicine :</label>
          <textarea rows='4' cols='50' name='pre_medicine' class='form-control' id='pre_medicine1'></textarea><br>  
          <label>Treatment :</label>
           <select name='treatment' class='form-control'>
  <option value='Treated successfully' selected>Treated successfully</option>
  <option value='Recovering'>Recovering</option>
  <option value='Sent to hospital'>Sent to hospital</option>
</select>
          

          <br>
          <label>Payment :</label>
          <input type='text' name='payment1' class='form-control' id='payment1'><br>
          <label>Payment Status :</label>
          <select name='payment_status1' class='form-control'>
  <option value='Done' selected>Done</option>
  <option value='Pending'>Pending</option>
</select>
          <br>
       </div>
       </div>
       <input type='submit' class='btn btn-primary' name='Existing_Patients_submit' value='Submit'>
        </form> ";
        }
  }

  if(isset($_POST['Existing_Patients_submit']))
{
 function validate_data($data)
 {
  $data = trim($data);
  $data = stripslashes($data);
  $data = strip_tags($data);
  $data = htmlspecialchars($data);
  $data = mysqli_real_escape_string($data);
  return $data;    
 }
  $pname=$_POST['pname'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
  $contact=$_POST['contact'];
  $address=$_POST['address'];
  $date1=$_POST['date1'];
  $disease=$_POST['disease'];
  $pre_medicine=$_POST['pre_medicine'];
  $treatment=$_POST['treatment'];
  $payment1=$_POST['payment1'];
  $payment_status1=$_POST['payment_status1'];
  $query="insert into patient_info(Name,Gender,Age,Contact,Address,Date,Disease,PrescribedMed,Treatment,Payment,PaymentStatus) values('$pname','$gender','$age','$contact','$address','$date1','$disease','$pre_medicine','$treatment','$payment1','$payment_status1')";
  $result=mysqli_query($con,$query);
  if($result)
  {  
    echo "<script> alert('Patient info entered. ');</script>";
    echo "<script>window.open('admin-panel.php','_self')</script>";
  }
  else{
    echo "<script>alert('Patient info already present. ');</script>";
    echo "<script>window.open('admin-panel.php','_self')</script>";
  }
}

/*if(isset($_POST['submit']))
{
    session_start();

      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']);
      
      $sql = "select * from logintb WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
   
    
      if($count == 1) {
 
         $_SESSION['login_user'] = $myusername;
         
         header("location: admin-panel.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   



  // $username=$_POST['username'];
  // $password=$_POST['password'];
  // $_SESSION['login_user']=$username; 
  // $query="select * from logintb where username='$username' and password='$password'";
  // echo $_SESSION['login_user'];
  // $result=mysqli_query($con,$query);
  // if(mysqli_num_rows($result)==1)
  // {
  //  header("Location:admin-panel.php");
  // }
  // else
  // {
  //  echo "<script> alert('Enter correct details. ');</script>";
  //  echo "<script>window.open('index.php','_self')</script>";
  // }
}*/
?>



