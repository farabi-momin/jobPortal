<?php
    include('../connection.php');
    session_start();

    $rid = $_SESSION['id'];

    $sql = "select * from applications where rid = '$rid' and status = 'pending'";
    $result = mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Applications</title>
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
                <h1>Applicantion List</h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							<div class="">
                                <?php
                                    if($result->num_rows>0){
                                        while($rows = $result->fetch_assoc()){
                                            $eid = $rows['eid'];
                                            $sql1 = "select * from user_e where eid = '$eid'";
                                            $result1 = mysqli_query($connection, $sql1);
                                            $employee = $result1->fetch_array(MYSQLI_ASSOC);?>
                                            <h4><?php echo $employee['ename'].' has applied for the job of '.$rows['designation'].' at '.$rows['department']. ' department. '; ?></h4><button class="button button1" id = "info-btn" onclick="gotoinfo(this.value)" value="<?php echo 'e='.$employee['eid'].'&j='.$rows['jid'] ?>">view details</button><br>
                                    <?php }
                                    } else if ($result->num_rows<=0){
                                        echo "<h3>No History</h3>";
                                    }
                                ?>
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
            function gotoinfo(val){
            window.location.href="applicantProfile.php?"+val;
            }
        </script>
	</body>
</html>