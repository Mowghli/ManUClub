<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>United FC</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript">
function validation()
{
alert("Logged in as "+form.username.value);
   alert("with password as "+form.password.value);
   return true;

}
</script>
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
      <h1>Login to Web App</h1>
	  	  <h7><b>If you have already registered on United FC then login here to access official news, exclusive content and features.</b></h7>
		  	<div class="img"> <a target="_blank" href="signup.html"><img src="images/official.jpg" alt="Sir Alex Statue" width="375" height="250" style="float:right"></a></div>	

      <form name="form" method="post" onsubmit="return validation()" action="index1.php" >
        <p><input type="text" id="username"  title="Username must not be blank and contain only letters, numbers and underscores." name="username" value="" placeholder="Username" required pattern="\w+"></p>
        <p><input type="password" name="password" value="" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." placeholder="Password"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"	></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            <h7>Remember me on this computer</h7>
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
	
    </div>

    <div class="login-help">
      <h7>Forgot your password? <a href="Password.html">Click here to reset it</a>.</h7>
	  <br/>
	  <h7>Don't have an account? <a href="Signup.html">Click here to Sign Up!</a>.</h7>
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
