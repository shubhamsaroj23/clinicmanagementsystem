function validate_data()
{
var error="";
var regex = /^[a-zA-Z ]+$/;
var contact_num =/^[0-9]{10}$/; 
var paycheck =/^[0-9]/; 
 // var agecheck =/^[0-9]+$/; 
var agecheck =/^[1-9]{2}$/;                                                                  
var name = document.getElementById( "pname" );
 if( name.value == "" )
 {
  window.alert("Please enter your name.");
  name.focus();
  return false;
 }
   if(regex.test(name.value) == false){
  window.alert("Name must be in alphabets only");
  name.focus();
  return false;
 }
 var gender1 = document.getElementById( "gender1" );
 var gender2 = document.getElementById( "gender2" );
 if( (gender1.checked == false )&&(gender2.checked == false ))
 {
  window.alert("Please select any one.");
  gender1.focus();
  return false;
 }

 var contact = document.getElementById( "contact" );
 if( contact.value == "" )
 {
  window.alert("Please enter contact number.");
  contact.focus();
  return false;
 }
   if(contact_num.test(contact.value) == false){
  
  window.alert("Please enter valid number");
  contact.focus();
  return false;
 }
 var age = document.getElementById( "age" );
 if(agecheck.test(age.value) == false){
  window.alert("Please enter valid age");
  age.focus();
  return false;
 }
 var date1 = document.getElementById( "date1" );
 if( date1.value == "" )
 {
  window.alert("Please select date.");
  date1.focus();
  return false;
 }
 var disease1 = document.getElementById( "disease1" );
 if( disease1.value == "" )
 {
  window.alert("Please enter disease.");
  disease1.focus();
  return false;
 }
 var pre_medicine1 = document.getElementById( "pre_medicine1" );
 if( pre_medicine1.value == "" )
 {
  window.alert("Please enter Prescribed Medicine.");
  pre_medicine1.focus();
  return false;
 }
 var payment1 = document.getElementById( "payment1" );
 if( payment1.value == "" )
 {
  window.alert("Please enter payment.");
  payment1.focus();
  return false;
 }
 if(paycheck.test(payment1.value) == false){
  
  window.alert("Please enter valid number");
  payment1.focus();
  return false;
 }
 else
 {
  return true;
 }
}
