<?php
    include('connection.php');
?>
<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Job Fair</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div id="page">
			<header id="header">
				<div id="header-inner">	
					<div id="logo">
						<h1><a href="#">Job<span>Fair</span></a></h1>
					</div>
					<div id="top-nav">
						<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Help</a></li>
						</ul>
					</div>
					<div class="clr"></div>
				</div>
			</header>
			<div class="feature">
				<div class="feature-inner">
                    <h1>Welcome to Job Fair</h1>
                    <p> You can find an ideal job for yourself here</p>
                    <div style="margin-left:600px;">
                        <a href="loginE.html" class="button button2">Login as Employee</a>
                        <a href="loginR.html">Login as Recruiter</a>
                    </div>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							<h3>Finding a Job? <a href="registerE.html"><button class="button button1"> Register as an Employee </button></a></h3>
                            <h3>Looking For an Employee? <a href="registerR.html"><button class="button button1"> Register as an Recruiter </button></a></h3>
						</div>
					</main>
					
					<nav id="sidebar">
						<div class="widget">
							<h3 style="color:white;">Left heading</h3>
							<ul>
							<li><a href="#">Link 1</a></li>
							<li><a href="#">Link 2</a></li>
							<li><a href="#">Link 3</a></li>
							<li><a href="#">Link 4</a></li>
							<li><a href="#">Link 5</a></li>
							</ul>
						</div>
					</nav>
					
					<div class="clr"></div>
				</div>
			</div>
		
			<div id="footerblurb">
				<div id="footerblurb-inner">
				
					<div class="column">

					</div>	
					<div class="column">
						
					</div>
					<div class="column">
						
					</div>	
					
					<div class="clr"></div>
				</div>
			</div>
			<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright <a href="#">Your Site</a> &#124; <a href="#">Terms of Use</a> &#124; <a href="#">Privacy Policy</a></p>
					<div class="clr"></div>
				</div>
			</footer>
		</div>
	</body>
</html>
