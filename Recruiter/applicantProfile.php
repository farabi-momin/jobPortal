<?php
    include('../connection.php');
    session_start();

    $eid = $_GET['e'];
    $jid = $_GET['j'];

    $sql = "select * from user_e_info where eid = '$eid'";
    $result = mysqli_query($connection,$sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $pdf = "../resume/".$eid;

    $sql1 = "select * from jobs where jid = '$jid'";
    $result1 = mysqli_query($connection,$sql1);
    $row1 = $result->fetch_array(MYSQLI_ASSOC);

    $value = '&e='.$eid.'&j='.$jid;
?>
<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Applicant Profile</title>
		<link rel="stylesheet" href="../style.css">
        <style>
            .container {
              padding: 30px; background-color: white; max-width: fit-content;margin-left: auto;margin-right: auto;margin-top: auto;border-color: green;border-width: 2px;
            }

            td, th {
            border: 1px solid #ddd;
            padding: 8px;
            width:300px;
            }

             tr:nth-child(even){background-color: #f2f2f2;}

             tr:hover {background-color: #ddd;}

             th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
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
				<h1>Applicant Information</h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
                            <div class=>
                                <table>
                                    <tr><td>Name:</td><td><?php echo $row["ename"]; ?> </td></tr>
                                    <tr><td>Email:</td><td> <?php echo $row['eemail']; ?> </td></tr>
                                    <tr><td>Contact:</td><td> <?php echo $row['ephoneNo']; ?> </td></tr>
                                    <tr><td>University:</td><td> <?php echo $row['university']; ?> </td></tr>
                                    <tr><td>Subject:</td><td> <?php echo $row['subject']; ?> </td></tr>
                                    <tr><td>Passing Grade:</td><td> <?php echo $row['grade']; ?> </td></tr>
                                    <tr><td>Experience Level:</td><td> <?php echo $row['experience']; ?> </td></tr>
                                </table>
                                <a class="button button1" href = <?php echo $pdf ?> target="blank">See Resume</a>
                                    <button class="button button1" onclick="acceptApplication(this.value)" value = <?php echo $value; ?>>Accept</button> <button class="button button1" onclick="denyApplication(this.value)" value = <?php echo $value; ?>>Deny</button>
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
        <script>
            function acceptApplication(val){
                window.location.href = "statusUpdate.php?s=1"+val;

            }
            function denyApplication(val){
                window.location.href = "statusUpdate.php?s=0"+val;
            }
        </script>
	</body>
</html>


