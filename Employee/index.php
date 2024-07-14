<?php
    include('../connection.php');
    session_start();

?>
<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Employee</title>
		<link rel="stylesheet" href="../style.css">
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
				<h1>Welcome <?php echo $_SESSION['name']; ?></h1>
                <p> You can find an ideal job for yourself here</p>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							<a href="profile.php"><button class = "button button1">Your Profile</button></a>
                            <a href="findjob.php"><button class = "button button1">Find jobs</button></a>
                            <a href="appliedjob.php"><button class = "button button1">Applied jobs</button></a>
                        </div>
					</main>
					
					<nav id="sidebar">
						<div class="widget">
						<h3>Navigation</h3>
							<ul>
							<li><a href="index.php">Profile</a></li>
							<li><a href="findjob.php">Find Job</a></li>
							<li><a href="appliedjob.php">Applied Jobs</a></li>
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
						<div class="column" style="float:right">
                            <a href="../logout.php"><button class="button button1">Log Out</button>
                        </div>	
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