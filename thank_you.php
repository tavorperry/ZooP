<?php include 'connection.php'; ?>
<?php
$conn    = Connect();
$f_name = $conn->real_escape_string($_POST['f_name']);
$l_name = $conn->real_escape_string($_POST['l_name']);
$email  = $conn->real_escape_string($_POST['email']);
$marriage_status = $conn->real_escape_string($_POST['m_status']);
$date_of_birth = $conn->real_escape_string($_POST['DOB']);
$id_number = $conn->real_escape_string($_POST['id']);
$job = $conn->real_escape_string($_POST['job']);
$adress = $conn->real_escape_string($_POST['adress']);
$query   = "INSERT into MyVolunteers_Test(firstname,lastname,email,marriage_status,date_of_birth,id_number,job,adress) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $marriage_status . "','" . $date_of_birth . "','" . $id_number . "','" . $job. "','" . $adress . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You $f_name For Your Passion To Volunteer !
<br>The Data Saved ! <br>";
 
$conn->close();
 
?>