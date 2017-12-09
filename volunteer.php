<!DOCTYPE php>
<html>
<head>
    <style>
.error {color: #FF0000;}
</style>

  <title>MTA ZOO</title>
  <link rel="stylesheet" type="text/css" href="css/volunteer.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>


    <?php


// define the variables and set to empty values
$f_nameErr = $l_nameErr = $emailErr = $m_statusErr = $idErr = $adressErr = $jobErr = $phoneErr =  $DOBErr = $genderErr = "";
$f_name = $l_name= $email = $gender = $DOB = $m_status = $id = $adress = $job = $phone = "";

//  <!--Remove any valiarbles we dont use !>>

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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


    //!-- Check if the "prg_metch" is good --!>

    if (empty($_POST["DOB"])) {
    $DOBErr = "Date of birth is required";
  } else {
    $DOB = test_input($_POST["DOB"]);
    // check if Date of birth is well-formed
    if (!preg_match("/^[0-9_:\.-]* /",$DOB)) {
      $DOBErr = "Ivalid Date of birth format"; 
    }
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
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

  <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container-fluid">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index2.html"><i class="fa fa-leaf" aria-hidden="true"></i> MTA Zoo</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li ><a href="index2.html">About </a></li>
          <li><a href="gallery.html">Our Animals</a></li>
          <li><a href="map.html">Zoo Map</a></li>
          <li><a href="#">Zoo Aquarium</a></li>
          <li><a href="#">Visitor Info</a></li>
          <li><a href="daily_schedule.html">Daily Schedule</a></li>
          <li class="active"><a href="volunteer.php">Volunteering</a><span class="sr-only">(current)</span></li>
        </ul>

      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
      
      <!--*********************End of the Navbar **********-->
     <header>
      <div class="jumbotron vol-main">
          <h1 class="WhiteC"> Volunteering <i class="fa fa-leaf" aria-hidden="true"></i> </h1>
          <p class="WhiteC">Our volunteering team searching for SUPER PEOPLE!</p>
          <p class="WhiteC">Check the details and apply to the volunteering plan!</p>
      </div>
  </header>

  <!-- *********************End of the Welcome********** -->
    <div class="info">
        <h3>What you will do?</h3>
        <p> a charity, volunteers provide vital support to the life of the zoo. Our award-winning volunteers complement the work of our paid staff and contribute to our success by supporting the zoo's education, scientific and conservation mission.Our volunteers provide thousands of hours between them to support the work of Chester Zoo. We have over 175 volunteers who support us and play a crucial role in providing an all-round excellent visitor experience. Our volunteers are passionate people who are dedicated to engaging visitors in amazing educational experiences and helping us raise funds for our vital conservation work.

Our volunteers are involved in customer service, educational and fundraising roles. And just so you know, we don't have any animal section volunteer roles.

        </p>
        <h3>What we are looking for?</h3>
        <p>Friendly and confident people who are comfortable speaking to guests of all ages <br>
        We’re not looking for experts, just a passion for wildlife and conservation, and of course, people!<br>
        We want people who are flexible and enjoy learning new things <br>
        Happy being outside in all weathers!<br>
        Reliability and regular attendance
        </p>
    </div>
  <div class="form-container" action="thank_you.php" method="post"> 
    <p><span class="error">* required field.</span></p>
        <form method="post" action="thank_you.php">
        <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
            <div>
                <label for="f_name">First name</label>
                <input id="f_name" name="f_name" required="" type="text" value="<?php echo $f_name;?>">
                <span class="error">* <?php echo $f_nameErr;?></span>
            </div><br>
            <div>
                <label for="l_name">Last name</label>
                <input id="l_name" name="l_name" required="" type="text" value="<?php echo $l_name;?>">
                <span class="error">* <?php echo $l_nameErr;?></span>
            </div><br>
              <div>
                <label for="email">Email</label>
                <input id="email" name="email" required="" type="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div><br>
            <div>
                <label for="m_status">Marriage status</label>
                <select name="m_status">
                  <!--tavor-add here auto complete!-->
                    <option>Single</option>
                    <option>Merried</option>
                    <option>Divorced</option>
                    <option>Widoer</option>
                </select>
            </div><br>
            <div>
                <label for="DOB">DOB</label>
                <input id="DOB" name="DOB" required="" type="date" value="<?php echo $DOB;?>">
                <span class="error">* <?php echo $DOBErr;?></span>
            </div><br>
            <div>
                <label for="id">ID number</label>
                <input id="id" name="id" required="" type="number" value="<?php echo $id;?>">
                <span class="error">* <?php echo $idErr;?></span>
            </div><br>
            <div>
                <label for="adress">Adress</label>
                <input id="adress" name="adress" type="text" value="<?php echo $adress;?>">
                <span class="error"> <?php echo $adressErr;?></span>
            </div><br>
            <div>
                <label for="job">Job</label>
                <input id="job" name="job" type="text" value="<?php echo $job;?>">
                <span class="error"> <?php echo $jobErr;?></span>
            </div><br>
            <div>
                <label for="phone">Phone</label>
                <input id="phone" name="phone" required="" type="tele" value="<?php echo $phone;?>">
                <span class="error">* <?php echo $phoneErr;?></span>
            </div><br>
        <div>
            <label for="gender" value="<?php echo $gender;?>">Gender</label><br>
            <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male
            <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender=="female") echo "checked";?>>Female
            <input type="radio" name="gender" value="other" <?php if (isset($gender) && $gender=="other") echo "checked";?>>Other
            <span class="error">* <?php echo $genderErr;?></span>
        </div><br>
        <input type="submit" value="Apply now!">
        <input type="reset" value="Reset form">
        </form>
     </div>

<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=Nubc09jTW-M"></iframe>
</div>
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

