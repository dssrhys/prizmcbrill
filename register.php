<?php

	$emailSubject = 'Password Request';
	$webMailer = 'info@prizmicbrill.com';


$emailField = $_POST['email'];
$firstnameField = $_POST['firstname'];
$lastnameField = $_POST['lastname'];
$addressField = $_POST['address'];
$countryField = $_POST['country'];
$affiliationField = $_POST['affiliation'];
$hearusField = $_POST['hearus'];

	$body = <<<EOD
<br><hr><br>
Email Address: $emailField <br>
Firstname: $firstnameField <br>
Lastname: $lastnameField <br>
Address: $addressField <br>
Industry Affiliation: $affiliationField <br>
How did you find us: $hearusField <br>
EOD;

	$headers = "From: $emailField\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMailer,$emailSubject,$body,$headers);
	

$theResult = <<<EOD
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Prizmic &amp; Brill Valises et Compagnie Inc.</title>
<link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico">
<link href="css/registration.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body,td,th,h1 {
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
font-size: 20px;
}
body p {
font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
font-size: 12px;
line-height:1.5;
}
body {
background-image: url(image/background/Blur.jpg);
}
table.curvedEdges { border:5px solid #3C3B49;-webkit-border-radius:5px;-moz-border-radius:5px;-ms-border-radius:5px;-o-border-radius:5px;border-radius:5px; }
table.curvedEdges td, table.curvedEdges th { padding:5px; }
table.curvedEdges1 {border:10px solid #3C3B49;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:10px;-o-border-radius:10px;border-radius:10px; }
table.curvedEdges11 {border:10px solid #3C3B49;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:10px;-o-border-radius:10px;border-radius:10px; }
table.curvedEdges111 {border:10px solid #3C3B49;-webkit-border-radius:13px;-moz-border-radius:13px;-ms-border-radius:10px;-o-border-radius:10px;border-radius:10px; }
</style>
</head>
<body>
<table width="996" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><img src="image/Header/Header-BW7.jpg" width="996" height="150" alt="header" /></td>
</tr>
</table>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><img src="image/buttons/Wood Trim-BW.png" width="1030" height="25" alt="woodtrim" /></td>
</tr>
</table>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#555555"><table width="120"  align="right" border="0" cellspacing="0" cellpadding="3">
<tr>
<td><div align="center"><a href="http://www.facebook.com/pages/Prizmic-Brill/133347996704781?ref=hl" target="_new"><img src="image/facebook.png" alt="facebook" width="20" height="20" align="absmiddle" onMouseOver="this.src='image/facebookhover.png'" onMouseOut="this.src='image/facebook.png'"></a> <a href="https://twitter.com/PrizmicBrill" target="_new"><img src="image/twitter.png" alt="twitter" width="20" height="20" align="absmiddle" onMouseOver="this.src='image/twitterhover.png'" onMouseOut="this.src='image/twitter.png'"></a> <a href="http://prizmicandbrill.blogspot.com/" target="_new"><img src="image/blogger.png" alt="blog" width="20" height="20" align="absmiddle" onMouseOver="this.src='image/bloggerhover.png'" onMouseOut="this.src='image/blogger.png'"></a> <a href="http://pinterest.com/prizmicbrill/" target="_new"><img src="image/pinterest.png" alt="pinterest" width="20" height="20" align="absmiddle" onMouseOver="this.src='image/pinteresthover.png'" onMouseOut="this.src='image/pinterest.png'"></a></div></td>
</tr>
</table>
<table width="709" border="0" cellspacing="5" cellpadding="5">
<tr>
<td width="699"><font face="Tahoma, Geneva, sans-serif"><font size="2"><a href="registration.htm">SITE PASSWORD REQUEST </a>|<a href="http://prizmicbrill.com/contract-1.htm"> CONTRACT DESIGN </a>| <a href="http://prizmicbrill.com/press.htm">PRESS</a></font></font></td>
</tr>
</table></td>
</tr>
</table>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td bgcolor="#FFFFFF"><table width="990" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td>&nbsp;</td>
</tr>
</table>
<table width="980" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><table width="940" border="0" align="center" cellpadding="0" cellspacing="0" class="curvedEdges11">
<tr>
<td><table width="920" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><div align="center">
<table width="920" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td><div align="center">Prizmic &amp; Brill Valises et Compagnie Inc.</div></td>
</tr>
</table>
<table width="920" border="0" cellspacing="0" cellpadding="3">
<tr>
<td><div align="center"><b>Thank you for your interest we will send your password after we process you request.</b></div></td>
</tr>
</table>
<table width="920" border="0" cellspacing="0" cellpadding="3">
<tr>
<td></td>
</tr>
</table>
<table width="920" border="0" cellspacing="0" cellpadding="3">
<tr>
<td><center><img src="image/ok.png" width="150" height="150" alt="ok" /></center></td>
</tr>
</table>
<p>&nbsp;</p>
</div></td>
</tr>
</table></td>
</tr>
</table>
<table width="940" border="0" align="center" cellpadding="3" cellspacing="0">
<tr>
<td>&nbsp;</td>
</tr>
</table></td>
</tr>
</table></td>
</tr>
</table>
<table width="996" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td><img src="image/buttons/Wood Trim-BW.png" width="1030" height="25" alt="woodtrim" /></td>
</tr>
</table>
<table width="996" border="0" align="center" cellpadding="5" cellspacing="0">
<tr>
<td valign="top" bgcolor="#555555"><div align="right">
<center>
<font color="#FFFFFF" size="1" face="Tahoma, Geneva, sans-serif"><b>
<center>
&copy; PRIZMIC &amp; BRILL VALISES ET COMPAGNIE INC. ALL RIGHT RESERVED.
</center>
</b></font>
<div align="right"></div>
</center>
</div></td>
</tr>
</table>
</body>
</html>
EOD;
echo "$theResult";