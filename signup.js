function performValidations() {
   let email = document.getElementById('email').value;
   let password = document.getElementById('password').value;
   let account = document.getElementById('account').value;
   let date=document.getElementById('date').value;
   let phone_number=document.getElementById('phone_number').value;
   let result = document.getElementById('result');
   let result1 = document.getElementById('result1');
//check if fields are empty
  if(email === "" || password === "" || account === ""||phone_number===""||date===""){
  alert("Fields should not be empty");
  result.innerHTML = "Fields should not be empty";
  return false;
   } else {
     result1.innerHTML = "";
   }

    if (password.length < 8) {
    alert("Password should be 8 characters and above");
    console.log("Invalid password");
      return false;
   } else{
       result1.innerHTML = "";
  }

    if (!password.match(/^[A-Za-z]+$/)) {
        alert('Password should have only letters');
        console.log("Invalid password");
        return false;
    } else {
         result1.innerHTML = "";
   }

  var currentDate = new date();
   var selectedDate = new date(date);

   if(selectedDate < currentDate){
    alert('please select a date from the current or future');
    return false;
   }

   if(!isvalidateDateFormat(/^\d{4}-\d{2}-\d{2}$/)){
        result.innerHTML="Date should have a correct format";
        return false;
    }

    if(!isvalidatePhoneNumberFormat(/^\d{10}$/)){
        return false;
    }
    return true;
}

    function isvalidateDateFormat(dateString){
        const dateFormat=/^\d{4}-\d{2}-\d{2}$/;
         if(!isvalidateDateFormat(date)){
        result.innerHTML="Date should have a correct format";
        return false;
    }

        if(!dateString.match(dateFormat)){
            alert('Date should follow a valid format(mm-dd-yyyy)');
            console.log('Invalid date');
            return false;    
        }
        return true;
    }


    function isValidatePhoneNumberFormat(phoneNumberString){
        const phoneNumberFormat=/^\d{10}$/;
        if(!phoneNumberString.match(phoneNumberFormat)){
            alert('Invalid phone number');
            console.log('Invalid phone number');
            return false;
        }
        return true;
    }
