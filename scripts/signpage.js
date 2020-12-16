 function signcheck()
{
	var mobilenum=document.getElementById("mobilenumber").value;
	if (mobilenum.length<10){
		alert("please enter the complete mobile number.")
	}

  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.email.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)


  var firstpassword=document.getElementById("psw").value;  
  var secondpassword=document.getElementById("psw2").value;  
  
   if(firstpassword==secondpassword){  
   return true;  
    }  
else{  
  alert("Password must be same!");  
  return false;  
    }

}