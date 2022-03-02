<?php

$host="p3plcpnl1242.prod.phx3.secureserver.net"; // Host name 
$username="pbclient"; // Mysql username 
$password="PBvalises1986!"; // Mysql password 
$db_name="pbclient"; // Database name 
$tbl_name="members"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form  
$mypassword=$_POST['pw']; 

// To protect MySQL injection (more detail about MySQL injection)
$mypassword = stripslashes($mypassword);

$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE Password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("mypassword"); 
header("location:successlogin.php");
}
else {
session_register("mypassword");
header("location:error.php");
}
?>