<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("mydb",$conn);

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["userName"]);
for($i=0;$i<$usersCount;$i++) {
mysql_query("UPDATE t2 set username='" . $_POST["userName"][$i] . "', password='" . $_POST["password"][$i] . "', firstname='" . $_POST["firstName"][$i] . "', lastname='" . $_POST["lastName"][$i] . "' WHERE id='" . $_POST["userId"][$i] . "'");
}
header("Location:list_user.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM t2 WHERE id='" . $_POST["users"][$i] . "'");
$row[$i]= mysql_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="userId[]" class="txtField" value="<?php echo $row[$i]['id']; ?>"><input type="text" name="userName[]" class="txtField" value="<?php echo $row[$i]['username']; ?>"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password[]" class="txtField" value="<?php echo $row[$i]['password']; ?>"></td>
</tr>
<td><label>First Name</label></td>
<td><input type="text" name="firstName[]" class="txtField" value="<?php echo $row[$i]['firstname']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lastName[]" class="txtField" value="<?php echo $row[$i]['lastname']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>