<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>United FC</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="bleft">
<img src="p.gif" alt="Computer man" style="width:120px;height:600px;float:centre;">
	</br>
  <img src="LeftNavAd.gif" alt="Computer man" style="width:120px;height:200px;float:centre;">
  </br>
  <img src="bpll.jpg" alt="Computer man" style="width:120px;height:100px;float:centre;">
  </br></div>
<div id="bright">  <img src="bofy.gif" alt="Computer man" style="width:120px;height:600px;float:left;"></br>
<img src="side.gif" alt="Computer man" style="width:120px;height:100px;float:centre;">
	</br>
  <img src="side1.gif" alt="Computer man" style="width:120px;height:100px;float:centre;">
  </br>
  <img src="12.gif" alt="Computer man" style="width:120px;height:100px;float:centre;">
  </br></div>
<!-- Begin Wrapper -->
<div id="wrapper">
  <!-- Begin Header -->
  <div id="header">
    <h1></h1>
  </div>
  <!-- End Header -->
  <!-- Begin Navigation -->
  <div id="navtop">
    <ul>
      <li><a href="FAQ.html">FAQs</a></li>
      <li><a href="Contact.html">Contact Us</a></li>
	  <li><a href="Signup.html">Signup</a></li>
	  <li><a href="Login.html">Login</a></li>
   
    </ul>
  </div>
  <!-- End Navigation -->
  <!-- Begin Left Column -->
  <div id="leftcolumn">
    <div id="navigation">
      <ul>
        <li><a href="index.html">> Home</a></li>
				<li><a href="news.html">> News</a></li>

        <li><a href="Team.html">> Team</a></li>
        <li><a href="Fixtures.html">> Fixtures</a></li>
        <li><a href="Gallery.html">> Gallery</a></li>
        <li><a href="History.html">> Club History</a></li>
		<li><a href="Stad.html">> Stadium</a></li>
      </ul>
    </div>
    <div class="tableleft">
      <h3>Season 2014-15</h3>
      <p> <strong>Sunday 13 May 2014</strong> <br />
        Man Utd 8 - 2 Arsenal </p>
      <h4>Tables</h4>
      <table width="164" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="18"><strong>#</strong></td>
          <td><strong>Team</strong></td>
          <td width="30"><div align="center"><strong>P</strong></div></td>
          <td width="30"><div align="center"><strong>Pts</strong></div></td>
        </tr>
        <tr class="yourteam">
          <td width="18">1</td>
          <td>Man Utd </td>
          <td width="30"><div align="center">38</div></td>
          <td width="30"><div align="center">89</div></td>
        </tr>
        <tr class="otherteam">
          <td width="18">2</td>
          <td>Chelsea </td>
          <td width="30"><div align="center">38</div></td>
          <td width="30"><div align="center">83</div></td>
        </tr>
        <tr class="yourteam">
          <td width="18">3</td>
          <td>Liverpool </td>
          <td width="30"><div align="center">38</div></td>
          <td width="30"><div align="center">68</div></td>
        </tr>
        <tr class="otherteam">
          <td width="18">4</td>
          <td>Arsenal</td>
          <td width="30"><div align="center">38</div></td>
          <td width="30"><div align="center">68</div></td>
        </tr>
        <tr class="otherteam">
          <td width="18">5</td>
          <td>Spurs</td>
          <td width="30"><div align="center">38</div></td>
          <td width="30"><div align="center">60</div></td>
        </tr>
      </table>
    </div>
  </div>
  <!-- End Left Column -->
  <!-- Begin Right Column -->
	<div id="maincolumn">
    <h1></h1>
    <p></p>
	<section class="container">
    <div class="login">
      <h1>Sign up to Web App</h1>
	 
	 
	  <h7><b>Simply fill in the form on this page to access all of our official news and exclusive features, such as behind the scenes, content, videos, downloads, tickets and much more...</b></h7>
	  <h7><?php
if(count($_POST)>0) {
	/* Form Required Field Validation */
	foreach($_POST as $key=>$value) {
	if(empty($_POST[$key])) {
	$message = ucwords($key) . " field is required";
	break;
	}
	}
	/* Password Matching Validation */
	if($_POST['password'] != $_POST['confirm_password']){ 
	$message = 'Passwords should be same<br>'; 
	}

	/* Email Validation */
	if(!isset($message)) {
	if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
	$message = "Invalid UserEmail";
	}
	}

	/* Validation to check if gender is selected */
	if(!isset($message)) {
	if(!isset($_POST["gender"])) {
	$message = " Gender field is required";
	}
	}

	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
	if(!isset($_POST["terms"])) {
	$message = "Accept Terms and conditions before submit";
	}
	}

	if(!isset($message)) {
		require_once("dbcontroller.php");
		$db_handle = new DBController();
		$query = "SELECT * FROM t2 where email = '" . $_POST["userEmail"] . "'";
		$count = $db_handle->numRows($query);
		
		if($count==0) {
			$query = "INSERT INTO t2 (username, firstname, lastname, password, email, gender) VALUES
			('" . $_POST["userName"] . "', '" . $_POST["firstName"] . "', '" . $_POST["lastName"] . "', '" . $_POST["password"] . "', '" . $_POST["userEmail"] . "', '" . $_POST["gender"] . "')";
			$current_id = $db_handle->insertQuery($query);
			if(!empty($current_id)) {
				$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."activate.php?id=" . $current_id;
				$to = $_POST["userEmail"];
				$subject = "User Registration Activation Email";
				$content = "Click this link to activate your account. <a href='" . $actual_link . "'>" . $actual_link . "</a>";
				$mailHeaders = "From: Admin\r\n";
				if(mail($to, $subject, $content, $mailHeaders)) {
					$message = "You have registered and the activation mail is sent to your email. Click the activation link to activate you account.";	
				}
				unset($_POST);
			} else {
				$message = "Problem in registration. Try Again!";	
			}
		} else {
			$message = "User Email is already in use.";	
		}
	}
}
?><h7>
	    <div class="img"> <a target="_blank" href="signup.html"><img src="images/new/sub.gif" alt="Sir Alex Statue" width="375" height="250" style="float:right"></a></div>	
      <form name="frmRegistration" method="post" action="" onsubmit="returnValidation()">
<table border="0" width="500" align="center" class="demo-table">
<?php if(isset($message)) { ?>
<div class="message"><?php echo $message; ?></div>
<?php } ?>
<tr>
<td>Username</td>
<td><input type="text" class="demoInputBox" title="Username must not be blank and contain only letters, numbers and underscores." pattern="\w+" name="userName" required value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" class="demoInputBox" title="Firstname must not be blank and contain only letters, numbers and underscores." pattern="\w+" required  name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" class="demoInputBox" required  name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" class="demoInputBox" required  name="password" value=""title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"></td>
</tr>
<tr>
<td>Confirm Password</td>
<td><input type="password" class="demoInputBox" name="confirm_password" required value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  title="Please enter the same Password as above." ></td>
</tr>

<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" required title="characters@characters.domain (characters followed by an @ sign, followed by more characters, and then a '.'. After the '.' sign, you can only write 2 to 3 letters from a to z." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
</tr>
<tr>
<td>Gender</td>
<td><input type="radio" name="gender" required value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
<input type="radio" required  name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
</td>
</tr>
<tr>
<td></td>
<td><input required  type="checkbox" name="terms" > I accept Terms and Conditions</td>
</tr>
</table>
<div>
<input type="submit" name="submit" value="Register" class="btnRegister">
</div>
</form>

    </div>

    <div class="login-help">
      <h7>Already a Member? <a href="Login.html">Click here to Login</a>.</h7>
    </div>
  </section>
	
  </div>
  <!-- End Right Column -->
  <div class="clear"></div>
  <div id="footer"> &copy; Copyright 2015 by WebTech | Design by Parth And Amogh </div>
</div>
<!-- End Wrapper -->
</body>
</html>
