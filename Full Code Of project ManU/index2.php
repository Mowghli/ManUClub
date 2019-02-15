﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
include("functions.php");
if(isset($_SESSION["user_id"])) {
	if(isLoginSessionExpired()) {
		header("Location:logout.php?session_expired=1");
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" 
      type="image/png" 
      href="images/trophy.png">
<title>United FC</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="background-color:transparent" onload="displayDate()" font-style="bold">
<div id="bleft">
 <script type="text/javascript">
var total_images = 3;
var random_number = Math.floor((Math.random()*total_images));
var random_img = new Array();
random_img[0] = '<a href="documents/report1.pdf"><img src="images/new/6th.jpg" style="width:120px;height:600px;float:centre;"><\/a>';
random_img[1] = '<a href="documents/report2.pdf"><img src="images/new/bofy.gif" style="width:120px;height:600px;float:centre;"><\/a>';
random_img[2] = '<a href="documents/report3.pdf"><img src="images/new/left1.gif" style="width:120px;height:600px;float:centre;"><\/a>';
document.write(random_img[random_number]);
--></script>
	</br>
  <img src="LeftNavAd.gif" alt="Computer man" style="width:120px;height:200px;float:centre;">
  </br>
  <img src="bpll.jpg" alt="Computer man" style="width:120px;height:100px;float:centre;">
  </br></div>
<div id="bright"> 	
<script type="text/javascript">
var total_images = 3;
var random_number = Math.floor((Math.random()*total_images));
var random_img = new Array();
random_img[0] = '<a href="index.html"><img src="images/new/3rd.gif" style="width:120px;height:600px;float:centre;"><\/a>';
random_img[1] = '<a href="index.html"><img src="images/new/4th.gif" style="width:120px;height:600px;float:centre;"><\/a>';
random_img[2] = '<a href="signup.html"><img src="images/new/5th.gif" style="width:120px;height:600px;float:centre;"><\/a>';
document.write(random_img[random_number]);
--></script>
</br>		
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
		<li><a href="slider.html">> Slider</a></li>

      </ul>
    </div>
    <div class="tableleft">
      <h3 >Season 2014-15</h3>
<p></p>

<script>
function displayDate() {
    var d = new Date();
document.getElementById("demo").innerHTML = d.toDateString();
document.getElementById("demo").style.fontStyle = "inherit";
}
</script>

<strong><p id="demo"></p></strong>
      <p><strong>
        Man Utd 8 - 2 Arsenal </strong></p>
      <h4>Tables</h4>
      <table width="164" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="18"><strong>#</strong></td>
          <td><strong>Team</strong></td>
          <td width="30"><div align="center"><strong>P</strong></div></td>
          <td width="30"><div align="center"><strong>Pts</strong></div></td>
        </tr>
        <tr class="otherteam">
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
	</br>
	
  </div>
  <!-- End Left Column -->
  <!-- Begin Right Column -->
  <div id="maincolumn">
  <table border="0" cellpadding="10" cellspacing="1">
<tr class="tableheader">
<td align="left"><h7>User Dashboard</h7></td>
</tr>
<tr class="tablerow">
<td>
<?php
if(isset($_SESSION["username"])) {
?>
<h7>Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.</a>
</br>Click here to view your details<a href="list_user.php" title="View">View Profile.</a></h7>
<?php
}
?>


<video width="800" height="400" autoplay id="image">
  
/*  <source src="mov_bbb.ogg" type="video/ogg">*/
  Your browser does not support HTML5 video.
</video>
<script>var images = ["1.mp4","tricks.mp4","video_mufc_20150519_POTYAhighlightsv2.mp4","video_mufc_20150514_fansthankyou.mp4","video_mufc_210415_DreamDay_EXT.mp4"];

function randImg() {
    var size = images.length
    var x = Math.floor(size * Math.random())
    document.getElementById('image').src = images[x];
}

randImg();</script> 
<p>
<h7>Video courtesy of 
<a href="http://www.manutd.com/" target="_blank">manutd.com</a>.</h7>
</p>

    <h1>Welcome!</h1>
    <h7>Manchester United Football Club is a professional football club based in Old Trafford, Greater Manchester, England. The club currently play in the Premier League, the top flight of English football. Founded as Newton Heath LYR Football Club in 1878, the club changed its name to Manchester United in 1902 and moved to Old Trafford in 1910.Manchester United have won 20 league titles, the most of any English club, 11 FA Cups, four League Cups and a record 20 FA Community Shields. The club has also won three European Cups, one UEFA Cup Winners' Cup, one UEFA Super Cup, one Intercontinental Cup and one FIFA Club World Cup. In 1998–99, the club achieved a treble of the Premier League, the FA Cup and the UEFA Champions League.</h7>

    <div class="news"><strong>Latest News</strong>
      <p> <a href="transfer.html">Transfer news.</a></p>
      <p> <a href="mp.html">Manager profile.</a></p>
      <p> <a href="http://store.manutd.com/stores/manutd/en?portal=QYTMF8KF&CMP=PSC-QYTMF8KF">Shopping.</a></p>
    </div>
    <h2>Louis van Gaal guarantees new signing No.10 role and reveals Man United set-up</h2>
    <h7>Van Gaal spoke with the media shortly after United's 2-0 defeat to French outfit Paris St-Germain - their final outing before Tottenham are welcomed to Old Trafford.

The Dutchman discussed the plan to vary his attack by utilising Depay behind centre-forward Wayne Rooney with Juan Mata and Ashley Young on the flanks.

He explained: "That the midfielder is [sometimes] in front of the striker is not bad because I think you do need variation in your attack.
"I like that and I ask for that, especially from Memphis. It can also be Carrick or Schweinsteiger or Schneiderlin once in a while but mostly Memphis. It depends on our opponents."

When asked which formation he intends to use for the upcoming season, he responded: "More or less 4-3-3.

"We played that already last season, in the second half of the season, and I have said that is the system I want to use.

"We played in our shape [on tour] and played how we have to play. That's also where I have been very satisfied."</h7>
    <p> <a href="Signup.html"><b>SIGN UP TODAY!!</b></a></p>
    <h4>United Today!</h4>
    <h7>Bale, Ronaldo, Ramos: How Manchester United's executive vice chairman has made it his mission to lure the world's finest talent to Old Trafford</h7>
    <div class="clear"></div>
  </div>

  
  <!-- End Right Column -->
  
  
  <div class="clear"></div>
  
  <div id="footer"> &copy; Copyright 2015 by WebTech | Design by Parth And Amogh </div>
</div>

<!-- End Wrapper -->
</body>
</html>
