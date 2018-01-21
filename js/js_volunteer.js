if(typeof jQuery=="undefined"){
    alert("jQuery id undefined");
}
else {
    
    function validateForm() {
        var id = document.forms["volunteer"]["id"].value;
        var phone = document.forms["volunteer"]["phone"].value;
        var email = document.forms["volunteer"]["email"].value;
        var DOB = document.forms["volunteer"]["DOB"].value;

        if (id.length!=9) {
            alert("ID number must be 9 digits");
            $('input[name=id]').focus();
            return false;
        }
        if (phone.length<10 || phone.length>11){
         alert("Enter a valid phone number");
         $('input[name=phone]').focus();
         return false;
     }
     if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
      alert("You have entered an invalid email address!");
      $('input[name=email]').focus();
      return false;
  }
  if (DOB.substr(0,4) > (new Date()).getFullYear()-12){
    alert("Sorry friend - You can volunteer only from the age 13");
    $('input[name=DOB]').focus();
    return false;
}
}};

