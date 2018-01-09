<html>
<head>
<link rel="stylesheet" type="text/css" href="css/nameTheMonkey.css">
</head>
<?php include 'connection.php'; ?>
<body>
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