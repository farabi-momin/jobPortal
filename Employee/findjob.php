<?php
    include('../connection.php');
    session_start();

    $eid = $_SESSION['id'];
    $sql = "select * from jobs as j INNER JOIN company as c where j.cid = c.cid and j.jid not in(select jid from applications where eid = '$eid')";
	$cookie = $_COOKIE['filterby'];
		
	switch($cookie){
			case "entry":
				$sql = "select * from jobs as j INNER JOIN company as c where j.cid = c.cid and j.experience = 'entry' and j.jid not in(select jid from applications where eid = '$eid')";
				echo $cookie;
				break;
			case "junior":
				$sql = "select * from jobs as j INNER JOIN company as c where j.cid = c.cid and j.experience = 'junior' and j.jid not in(select jid from applications where eid = '$eid')";
				echo $cookie;
				break;
			case "senior":
				$sql = "select * from jobs as j INNER JOIN company as c where j.cid = c.cid and j.experience = 'senior' and j.jid not in(select jid from applications where eid = '$eid')";
				echo $cookie;
				break;
			default:
				$sql = "select * from jobs as j INNER JOIN company as c where j.cid = c.cid and j.jid not in(select jid from applications where eid = '$eid')";
		}	
	
	$result = mysqli_query($connection, $sql);
	$x = $result->num_rows;

?>    

<!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Jobs</title>
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
				<h1>Find Jobs</h1>
                <p> You can find an ideal job for yourself here</p>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
						<button class = "button button1" id="filter-btn" style = "display:block;" onclick="openFiltermenu()">Filter</button>
								<div class = "filter-box" id = "filter-optn" style = "display:none">
									<button class = "button button1" id ="filter-entry"  onclick = "filterByEntry()">Entry</button>
									<button class = "button button1" id ="filter-junior" onclick="filterByJunior()">Junior</button>
									<button class = "button button1" id ="filter-senior" onclick="filterBySenior()">Senior</button>
								</div>
							<div class = "">
                                <?php
                                    if($result->num_rows>0){
                                        while($jobs=$result->fetch_assoc()){?>
                                            <h2><?php echo $jobs['jname'];?></h2>
                                            <h4><?php echo $jobs['cname']; ?></h4><hr>
                                            <div class="job-dtls">
                                                <h5><?php echo 'Department: '.$jobs['jdepartment'] ?></h5>
                                                <h5><?php echo 'Designation: '.$jobs['jdesignation'] ?></h5>
                                                <h5><?php echo 'Experience Requirement: '.$jobs['experience'] ?></h5>
                                                <h5><?php echo 'Discription: '.$jobs['jdiscription'] ?></h5>
                                                <h5><?php echo 'Deadline: '.$jobs['deadline'] ?></h5>
                                                <button class="button button1" id="apply-btn" onclick="applyJob(this.value)" value = "<?php echo $jobs['jid'] ?>">Apply</button><br><hr>
                                            </div>
                                        <?php }
                                    } else if($result->num_rows<=0){
                                        ?> <h4> No Jobs Found! </h4> <?php
                                    }
                                ?>
                            </div>
                            
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
        <script>
            function applyJob(val){
            window.location.href = "apply.php?j="+val;
			}
			function openFiltermenu(){
				document.getElementById("filter-btn").style.display="none";
				document.getElementById("filter-optn").style.display="block";
			}
			function filterByEntry(){
				document.cookie = "filertby=entry";
				window.location.href = "findjob.php";
			}
			function filterByJunior(){
				document.cookie = "filertby=junior";
				window.location.href = "findjob.php";
			}
			function filterBySenior(){
				document.cookie = "filertby=senior";
				window.location.href = "findjob.php";
			}
        </script>
	</body>
</html>