<html>

<head>
    <title>Name The Monkey - Vote</title>
    <link rel="stylesheet" type="text/css" href="css/nameTheMonkey.css">
    <link rel="stylesheet" type="text/css" href="css/index2.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
            <a class="navbar-brand" href="index2.html"><i class="fa fa-leaf" aria-hidden="true"></i> MTA Zoo</a>
          </div>
  
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index2.html">About <span class="sr-only">(current)</span></a></li>
              <li><a href="gallery.html">Our Animals</a></li>
              <li><a href="#">Zoo Map</a></li>
              <li><a href="#">Zoo Aquarium</a></li>
              <li><a href="#">Visitor Info</a></li>
              <li><a href="daily_schedule.html">Daily Schedule</a></li>
              <li><a href="volunteer.html">Volunteering</a></li>
            </ul> 
          </div>
        </div>
      </nav>

      <!-- Welcome -->
      <div class="welcome jumbotron">
        <div class="container">
            <h1 class="white-caption"> Welcome to MTA Zoo <i class="fa fa-leaf" aria-hidden="true"></i> </h1>
            <p class="white-caption">MTA Zoo is the largest and oldest zoological garden in Tel-Aviv</p>
            <p class="white-caption">and the only sub-tropical zoo in Israel</p>
            <p><a class="btn btn-warning btn-lg" href="#" role="button">Purchase Tickets</a></p>
        </div>
      </div>
    </header>


<?php include 'connection.php'; ?>
<?php

//This Part is to insert the variables into the DB
$conn    = Connect();
$choname = $conn->real_escape_string($_POST['choname']);

$query   = "UPDATE `Name_The_Monkey` SET `value`=value+1 WHERE `name`='$choname'";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);}

//Thank you msg
echo "<p class='thank_you'>"."Your vote for <span class='voted'> $choname </span>was submited succesfuly !"."<br> These are the results:</p>";

$sql = "SELECT name, value FROM Name_The_Monkey";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Name</th><th>Votes</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["name"]. "</td><td>" . $row["value"]. " </td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>
</body>
</html>