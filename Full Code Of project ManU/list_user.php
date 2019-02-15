<?php
session_start
$_SESSION["user_id"]="1001";
include("functions.php");
$conn = mysql_connect("localhost","root","");
mysql_select_db("mydb",$conn);
if(isset($_SESSION["user_id"])) {
$result = mysql_query("SELECT * FROM t2 WHERE id='" .$_SESSION["user_id"]. "'");}
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Username</td>
<td>First Name</td>
<td>Last Name</td>
<td>Email</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="users[]" value="<?php echo $row["id"]; ?>" ></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["firstname"]; ?></td>
<td><?php echo $row["lastname"]; ?></td>
<td><?php echo $row["email"]; ?></td>

</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>