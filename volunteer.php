<!DOCTYPE php>

<html>
  <head>
    <title>Volunteering</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/volunteer.css">
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
                <li><a href="index2.html">About</a></li>
                <li><a href="gallery.html">Our Animals</a></li>
                <li><a href="map.html">Zoo Map</a></li>
                <li><a href="#">Zoo Aquarium</a></li>
                <li><a href="daily_schedule.html">Daily Schedule</a></li>
                <li><a href="volunteer.php">Volunteering</a></li>
                <li class="active"><a href="#">Volunteering</a><span class="sr-only">(current)</span></li>
            </ul> 
        </div>
        </div>
        </nav>
        <!-- Welcome -->
        <div class="welcome jumbotron">
            <div class="container">
              <h1 class="WhiteC"> Volunteering application <i class="fa fa-diamond" aria-hidden="true"></i> </h1>
              <p class="WhiteC"> Our zoo is looking for super heros!<br>
                    Wild animals and research species are in your blood?<br>
                    Apply to our volunteering team <b>NOW!</b>
              </p>
          </div>
        </div>
    </header>

    <div class="container"> 
      <div class="info">
        <h2>What you will do?</h2>
          <ul> 
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> A charity, volunteers provide vital support to the life of the zoo.</li>
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Our award-winning volunteers complement the work of our paid staff and contribute to our success by supporting the zoo's education, scientific and conservation mission.</li>
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Our volunteers provide thousands of hours between them to support the work of Chester Zoo.</li>
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> We have over 175 volunteers who support us and play a crucial role in providing an all-round excellent visitor experience.</li>
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Our volunteers are passionate people who are dedicated to engaging visitors in amazing educational experiences and helping us raise funds for our vital conservation work.</li>
            <li><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Our volunteers are involved in customer service, educational and fundraising roles. And just so you know, we don't have any animal section volunteer roles.</li>
          </ul>
          <h2>What we are looking for?</h2>
          <ul>
            <li><i class="fa fa-mortar-board" aria-hidden="true"></i>Friendly and confident people who are comfortable speaking to guests of all ages.</li>
            <li><i class="fa fa-mortar-board" aria-hidden="true"></i>We are not looking for experts, just a passion for wildlife and conservation, and of course, people!</li>
            <li><i class="fa fa-mortar-board" aria-hidden="true"></i>We want people who are flexible and enjoy learning new things</li>
            <li><i class="fa fa-mortar-board" aria-hidden="true"></i>Happy being outside in all weathers!</li>
            <li><i class="fa fa-mortar-board" aria-hidden="true"></i>Reliability and regular attendance</li>
          </ul>
    </div>

  <div class="form-container" action="thank_you.php" method="post"> 
    <p><span class="error">* required field.</span></p>
        <form name=volunteer method="post" action="thank_you.php" onsubmit="return validateForm()">
        <!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> -->
            <div>
                <label class=field for="f_name">First name</label>
                <input id="f_name" name="f_name" required="" type="text" value="<?php echo $f_name;?>">
                <span class="error">* <?php echo $f_nameErr;?></span>
            </div><br>

            <div>
                <label class=field for="l_name">Last name</label>
                <input id="l_name" name="l_name" required="" type="text" value="<?php echo $l_name;?>">
                <span class="error">* <?php echo $l_nameErr;?></span>
            </div><br>

              <div>
                <label class=field for="email">Email</label>
                <input id="email" name="email" required="" type="email" value="<?php echo $email;?>">
                <span class="error">* <?php echo $emailErr;?></span>
            </div><br>

            <div>
                <label class=field for="m_status">Marriage status</label>
                <select name="m_status">
                  <!--tavor-add here auto complete!-->
                    <option>Single</option>
                    <option>Merried</option>
                    <option>Divorced</option>
                    <option>Widoer</option>
                </select>
            </div><br>

            <div>
                <label class=field for="DOB">DOB</label>
                <input id="DOB" name="DOB" required="" type="date" value="<?php echo $DOB;?>">
                <span class="error">* <?php echo $DOBErr;?></span>
            </div><br>

            <div>
                <label class=field for="id">ID number</label>
                <input id="id" name="id" required="" type="number" value="<?php echo $id;?>">
                <span class="error">* <?php echo $idErr;?></span>
            </div><br>

            <div>
                <label class=field for="adress">Adress</label>
                <input id="adress" name="adress" type="text" value="<?php echo $adress;?>">
                <span class="error"> <?php echo $adressErr;?></span>
            </div><br>

            <div>
                <label class=field for="job">Job</label>
                <input id="job" name="job" type="text" value="<?php echo $job;?>">
                <span class="error"> <?php echo $jobErr;?></span>
            </div><br>

            <div>
                <label class=field for="phone">Phone</label>
                <input id="phone" name="phone" required="" type="tel" value="<?php echo $phone;?>">
                <span class="error">* <?php echo $phoneErr;?></span>
            </div><br>

        <div>
            <label class=field for="gender" value="<?php echo $gender;?>">Gender</label><br>
            <label for="male"><input type="radio" name="gender" value="male" id=male <?php if (isset($gender) && $gender=="male") echo "checked";?>>Male</label>
             <label for="female"><input type="radio" name="gender" value="female" id=female<?php if (isset($gender) && $gender=="female") echo "checked";?>>Female</label>
             <label for="other"><input type="radio" name="gender" value="other" id=other<?php if (isset($gender) && $gender=="other") echo "checked";?>>Other</label>
            <span class="error">* <?php echo $genderErr;?></span>
        </div><br>

        <input type="submit" value="Apply now!">
        <input type="reset" value="Reset form">
        </form>
     </div>

    <script
    src="https://code.jquery.com/jquery-3.2.1.js"
    integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script>
      function validateForm() {
    var id = document.forms["volunteer"]["id"].value;
    var phone = document.forms["volunteer"]["phone"].value;
    if (id.length!=9) {
        alert("ID number must be 9 digits");
        return false;
    }
    if(phone.length<10 || phone.length>11){
       alert("Enter a valid phone number");
        return false;
    }
}
    </script>
  </body>
</html>



