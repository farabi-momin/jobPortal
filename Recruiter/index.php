<?php
    include('../connection.php');
    session_start();
?>

<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Recruiter</title>
		<link rel="stylesheet" href="../style.css">
        <style>
            
            * {
              box-sizing: border-box;
            }
            
            /* Add padding to containers */
            .container {
              padding: 30px; background-color: white; max-width: fit-content;margin-left: auto;margin-right: auto;margin-top: auto;border-color: green;border-width: 2px;
            }
            
            /* Full-width input fields */
            label{font-size:large;}
            input[type=text], input[type=password],[type=email][type=date] {
              width: 90%;
              padding: 15px;
              margin: 5px 0 22px 0;
              display: inline-block;
              border: none;
              background: #f1f1f1;
            }
            
            input[type=text]:focus, input[type=password]:focus {
              background-color: #ddd;
              outline: none;
            }
            
            /* Overwrite default styles of hr */
            hr {
              border: 1px solid #f1f1f1;
              margin-bottom: 25px;
            }
            
            /* Set a style for the submit button */
            .registerbtn {
              background-color: #04AA6D;
              color: white;
              padding: 16px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
              opacity: 0.9;
            }
            
            .registerbtn:hover {
              opacity: 1;
            }
            
            /* Add a blue text color to links */
            a {
              color: dodgerblue;
            }
            
            /* Set a grey background color and center the text of the "sign in" section */
            .signin {
              background-color: #f1f1f1;
              text-align: center;
            }
            
            
            </style> 
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
				<h1><?php echo 'WELCOME '. $_SESSION['name'];?></h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article article1">
							<a href="profile.php" ><button class="button button1">Your Profile</button></a>
                            <a href="applications.php"><button class="button button1">Applications</button></a><br>
                            
                            <button class="button button1" onclick="openForm()">Post a Job</button>
                            <div class="form-popup container" id="job-form">
                                <form name = "form" action ="addjob.php" method="POST">
                                    <label> Job Name:    </label>
                                    <input type = "text" name = "name" id = "name"required><br><br>
                                    <label> Department:    </label>
                                    <input type = "text" name = "department" id = "department" required><br><br>
                                    <label> Designation:    </label>
                                    <input type = "text" name = "designation" id = "designation" required><br><br>
                                    <label> Experience Level: </label>
                                    <input type = "radio" name = "experience" id = "experience" value = "entry"><label>Entry</label>
                                    <input type = "radio" name = "experience" id = "experience" value = "Junior"><label>Junior</label>
                                    <input type = "radio" name = "experience" id = "experience" value = "Senior"><label>Senior</label><br><br>
                                    <label> Deadline: </label>
                                    <input type = "date" name = "deadline" id = "deadline" required><br><br>
                                    <label> Interview Date: </label>
                                    <input type = "date" name = "interview" id = "interview" required><br><br>
                                    <label for = "discription" required> Job Discription: </label><br>
                                    <textarea name = "discription" id = "discription" placeholder = "Enter job discription" rows="20" cols="100"></textarea><br><br>

                                    <input class="button button1" type = "submit" name = "submit" value = "Post" onclick="closeForm()">
                                    <button class="button button1" onclick="closeForm()">Close Form</button>

                                </form>
                            </div>
						</div>
					</main>
					
					<nav id="sidebar">
						<div class="widget">
							<h3>Navigation</h3>
							<ul>
							<li><a href="index.php">Index</a></li>
							<li><a href="#">Profile</a></li>
							<li><a href="applications.php">Applications</a></li>
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
					<div class="column" style="float:right">
						<a href="../logout.php"><button class="button button1">Log Out</button>
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
        <script>
            function openForm() {
            document.getElementById("job-form").style.display = "block";
            }
    
            function closeForm() {
            document.getElementById("job-form").style.display = "none";
            }
            </script>
	</body>
</html>
