

function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.text1.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Not a valid Phone Number");
     return false;
  }

  

  }
  
  
 