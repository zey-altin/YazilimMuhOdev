<?php
session_start();
include("config.php");
if(!isset($_SESSION['fid']))
{
	header("location:index.php");
}
$fid=$_SESSION['fid'];

$a=mysqli_query($techVegan,"SELECT name FROM faculty WHERE fid='$fid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fakülte Sayfası</title>
<link rel="stylesheet" type="text/css" href="scripts/styleASL.css" />
</head>

<body>
<span class="head" style="float:left;">Hoş Geldin <span style="color:#F30;font-size:28px;"><?php echo $name;?></span></span>

<span style="float:right;"><a href="logout.php">Çıkış</a></span><br />

<hr style="clear:both;box-shadow:0px 0px 2px #000;" color="#FF6600" size="2" width="100%"/><br />
<div align="center">
<table cellpadding="3" cellspacing="3" class="formTable">
<tr><td>
<span class="Subhead">Fakülte Komutları</span><hr size="1" style="color:#00F;" /><br />
<a href="ViewNoticesFaculty.php">Notları Görüntüle</a><br />
<a href="ChangePasswordFaculty.php">Şifreyi Değiştir</a><br />
<a href="ComplaintFaculty.php">Şikayet Sayfası</a><br />
</td></tr></table>
</div>
</body>
</html>
