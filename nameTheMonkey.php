<html>
<head>
<link rel="stylesheet" type="text/css" href="css/thank_you.css">
</head>
<?php include 'connection.php'; ?>
<?php

//This Part is to insert the variables into the DB
$conn    = Connect();
//$choname = $conn->real_escape_string($_POST['choname']);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}

//mysql_query("UPDATE Name The Monkey SET value=value+1 WHERE name='Tavor'");

$query   = "UPDATE 'Name The Monkey' SET value=value+1 WHERE name='Tavor'";

$success = $conn->query($query);


//Thank you msg
echo "<p class='thank_you'>"."Your vote for XXXXX was submited succesfuly !"."</p>"

$conn->close();  
?>

<body>
  <img src="Photos/Loading_icon.gif" alt="Loading icon">
  <h3>You will be redirect to the main page in several seconds </h3>
	<h2> <a href=index2.html>Click Here</a> if you are not redirected automatically </h2>
<script>
setTimeout(function() {
  window.location.href = "index2.html";
}, 10000);
</script>
</body>
</html>