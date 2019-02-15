<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("mydb",$conn);
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM t2 WHERE id='" . $_POST["users"][$i] . "'");
}
header("Location:list_user.php");
?>