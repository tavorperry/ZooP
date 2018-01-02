<html>
<head>
<link rel="stylesheet" type="text/css" href="css/thank_you.css">
</head>
<?php include 'connection.php'; ?>

<?php
    //All this php part is making validaion on the server side in order to prevent error data & malicious code to get into the DB
    //Some of the validaions are duplicate on the client-side in order to prevent malicious code
    //Define the variables and set them to empty values
    $f_nameErr = $l_nameErr = $emailErr = $m_statusErr = $idErr = $adressErr = $jobErr = $phoneErr =  $DOBErr = $genderErr = "";
    // Remove any valiarbles we dont use 

      if (empty($_POST["f_name"])) {
        $f_nameErr = "First name is required";
      } else {
        $f_name = test_input($_POST["f_name"]);

        // check if the name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$f_name)) {
          $f_nameErr = "Only letters and white space allowed"; 
        }
      }

      if (empty($_POST["l_name"])) {
        $l_nameErr = "Last name is required";
      } else {
        $l_name = test_input($_POST["l_name"]);

        // check if the name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$l_name)) {
          $l_nameErr = "Only letters and white space allowed"; 
        }
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format"; 
        }
      }
        if (empty($_POST["DOB"])) {
        $DOBErr = "Date of birth is required";
      } 
      

      if (empty($_POST["adress"])) {
        $adress = "";
      } else {
        $adress = test_input($_POST["adress"]);
      }

        if (empty($_POST["job"])) {
        $job = "";
      } else {
        $job = test_input($_POST["job"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }

      if (empty($_POST["m_status"])) {
        $m_statusErr = "Marriage Status is required";
      } else {
        $m_status = test_input($_POST["m_status"]);
      }

        if (empty($_POST["id"])) {
        $idErr = "ID is required";
      } else {
        $id = test_input($_POST["id"]);

        // check if ID is well-formed
        if (!preg_match("/^[0-9]{9}$/",$id)) {
          $idErr = "Ivalid ID format"; 
        }
      }

        if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
      } else {
        $phone = test_input($_POST["phone"]);

        // check if ID is well-formed
        if (!preg_match("/^[0-9]{10}$/",$phone)) {
          $phoneErr = "Ivalid phone number"; 
        }
      }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

//Check if there are any errors. If so, the right error will displayed
if($l_nameErr !="" || $emailErr !="" || $m_statusErr !="" || $idErr !="" || $adressErr !="" || $jobErr !="" || $phoneErr !="" ||  $DOBErr !="" || $genderErr!="" ) {
    if($l_nameErr !="")
         echo "$l_nameErr <br>";
      if($emailErr !="")
         echo "$emailErr <br>"; 
    if($m_statusErr !="")
         echo "$m_statusErr <br>";
    if($idErr !="")
         echo "$idErr <br>";
      if($adressErr !="")
         echo "$adressErr <br>"; 
    if($jobErr !="")
         echo "$jobErr <br>";
    if($phoneErr !="")
         echo "$phoneErr <br>"; 
    if($DOBErr !="")
         echo "$DOBErr <br>";
    if($genderErr !="")
         echo "$genderErr <br>";
    die("<br><a href={$_SERVER['HTTP_REFERER']}>Click Here to go back and fix the problem<a>");
}

//This Part is to insert the variables into the DB
$conn    = Connect();
$f_name = $conn->real_escape_string($_POST['f_name']);
$l_name = $conn->real_escape_string($_POST['l_name']);
$email  = $conn->real_escape_string($_POST['email']);
$marriage_status = $conn->real_escape_string($_POST['m_status']);
$date_of_birth = $conn->real_escape_string($_POST['DOB']);
$id_number = $conn->real_escape_string($_POST['id']);
$job = $conn->real_escape_string($_POST['job']);
$adress = $conn->real_escape_string($_POST['adress']);
$phone = $conn->real_escape_string($_POST['phone']);
$gender = $conn->real_escape_string($_POST['gender']);

$query   = "INSERT into MyVolunteers_Test(firstname,lastname,email,marriage_status,date_of_birth,id_number,job,adress,phone,gender) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $marriage_status . "','" . $date_of_birth . "','" . $id_number . "','" . $job. "','" . $phone."','" . $gender. "','" . $adress . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
//Thank you msg
echo "<p class='thank_you'>"."Thank You $f_name For Your Passion To Volunteer !
<br>The Data Was Saved ! <br> We will contact you soon !"."</p>";

$conn->close();
?>
<body>
	<h3>You will be redirect to the main page in several seconds </h3>
  <br><br>
  <img src="Photos/Loading_icon.gif" alt="Loading icon">
	<h2> <a href=index2.html>Click Here</a> if you are not redirected automatically </h2>
<script>
setTimeout(function() {
  window.location.href = "index2.html";
}, 6000);
</script>
</body>
</html>