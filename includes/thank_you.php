<!DOCTYPE html>
<html>
<head>
    <title>Thank you</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/volunteer.css">
    <link rel="stylesheet" type="text/css" href="../css/thank_you.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Acme|Bree+Serif|Indie+Flower|Josefin+Sans:600" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <body>
  <!-- Header and Navigation -->
  <header>
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../index2.html"><i class="fa fa-leaf" aria-hidden="true"></i> MTA Zoo</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="../index2.html">About</a></li>
                <li><a href="gallery.html">Our Animals</a></li>
                <li><a href="#">Zoo Map</a></li>
                <li><a href="#">Zoo Aquarium</a></li>
                <li><a href="#">Visitor Info</a></li>
                <li><a href="daily_schedule.html">Daily Schedule</a></li>
                <li class="active"><a href="volunteer.html">Volunteering</a><span class="sr-only">(current)</span></li>
            </ul> 
        </div>
        </div>
        </nav>
        <!-- Welcome -->
        <div class="welcome jumbotron">
            <div class="container">
              <h1 class="white-caption"> Volunteering application <i class="fa fa-diamond" aria-hidden="true"></i> </h1>
              <p class="white-caption"> Our zoo is looking for super heros!<br>
                    Wild animals and research species are in your blood?<br>
                    Apply to our volunteering team <b>NOW!</b>
              </p>
          </div>
        </div>
    </header>
<?php include 'connection.php'; ?>
<?php
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

$query   = "INSERT into MyVolunteers(firstname,lastname,email,marriage_status,date_of_birth,id_number,job,adress,phone,gender) VALUES('" . $f_name . "','" . $l_name . "','" . $email . "','" . $marriage_status . "','" . $date_of_birth . "','" . $id_number . "','" . $job. "','" . $phone."','" . $gender. "','" . $adress . "')";
$success = $conn->query($query);
 
if (!$success) {
  die("Couldn't enter data: ".$conn->error);
}
//Thank you msg
echo "<p class='thank_you'>"."Thank You <span class=saved>$f_name</span> For Your Passion To Volunteer !
<br><span class='saved'>"."The Data Was Saved "."</span><br>We will contact you soon !"."</p>";

$conn->close();
?>
<img src="Photos/Loading_icon.gif" alt="Loading icon" height="30px" width="30px">
<h3>You will be redirect to the main page in several seconds </h3>
<h2> <a href=../index2.html>Click Here</a> if you are not redirected automatically </h2>

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="../js/js_thank_you.js"></script>
</body>
</html>