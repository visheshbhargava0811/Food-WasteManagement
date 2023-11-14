function validateform(){
    var name = document.getElementById("name1").value;
    var emailadd = document.getElementById("email").value;
    var phone = document.getElementById("phn").value;
   var registration = document.getElementById("reg").value;
  validatename(name);
  validatereg(registration);
  validatenumber(phone);
  ValidateEmail(emailadd);
  function validatename(input)
  {
  if(input=="")
  {
  alert("Username must be filled");
  
  return false;
  }
  }
  function ValidateEmail(input) {
  var re =  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(input=="")
  {
      alert("email must be filled");
      return false;
  }
  if (input.match(re)) {
  document.form1.text1.focus();
  return true;
  }
  else {
  alert("Invalid email address!");
  document.form1.text1.focus();
  return false;
  }
  }
  function validatenumber(input)
  {
      var reg=/[6-9]\d{9}$/;
      if(input=="")
  {
      alert("phone number must be filled");
      return false;
  }
      if(input.match(reg))
  {
      return true;
  }
  else{
    alert("Invalid mobile number");
    return false;
  }
}
function validatereg(input)
{
  if(input=="")
  {
  alert("Registration number must be filled");
  
  return false;
  }
  var reg=/[2][0-2][BCE|BCI|BCT|BCB]{3}[0-9]{4}$/;
  if(input.match(reg))
  {
    return true;
  }
  else{
    alert("Invalid registration number");
    return false;
  }
   //validatename(document.form1.name1.value) ,
//ValidateEmail(document.form1.email) ,
//validatenumber(document.form1.phn)"> 

}  
}





