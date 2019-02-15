<?php
session_start();
$message="";
define('DB_HOST', 'localhost'); 
	define('DB_NAME', 'mydb');
	define('DB_TABLE','t2');
	define('DB_USER','root'); 
	define('DB_PASSWORD',''); 
	$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
	$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
$myusername=@($_POST['username']); 
$mypassword=@($_POST['password']); 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM t2 WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
		
		include("functions.php");
		
		$_SESSION["user_id"] = 1001;
		$_SESSION["username"] = $_POST["username"];
		$_SESSION['loggedin_time'] = time();  
	} else {
		
		$url = "Login1.php";
		header("Location:$url");
		
		
	}


if(isset($_SESSION["user_id"])) {
	if(!isLoginSessionExpired()) {
		header("Location:index2.php?user_id=1001");
	} else {
		header("Location:logout.php?session_expired=1");
	}
}

if(isset($_GET["session_expired"])) {
	$message = "Login Session is Expired. Please Login Again";
}
?>