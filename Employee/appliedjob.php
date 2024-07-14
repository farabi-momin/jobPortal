<?php
    include('../connection.php');
    session_start();

    $eid = $_SESSION['id'];
    $sql = "select a.jid, a.rid, a.eid, a.department, a.designation, a.status, a.message, j.jname, j.experience, j.jdiscription, c.cname, c.cid from applications as a inner join jobs as j on a.jid = j.jid inner join company as c on j.cid = c.cid where a.eid = '$eid'";
    $result = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <!DOCTYPE html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Applied Jobs</title>
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
				<h1>Applied Jobs</h1>
				</div>
			</div>
		
	
			<div id="content">
				<div id="content-inner">
				
					<main id="contentbar">
						<div class="article">
							<div class = "">
                                <?php
                                    if($result->num_rows>0){
                                        while($row=$result->fetch_assoc()){?>
                                             <h4>You have applied for the job at <?php echo $row['cname']; ?> as <?php echo $row['jname']; ?><button class="button button1" id="" value = "<?php echo $row['jid']; ?>" onclick="opendiv(this.value)">view details</button></h4>
                                             <div style="display:none" class="pop-up-div" id="<?php echo $row['jid']; ?>">
                                                <h4> Company: <?php echo $row['cname']; ?> </h4>
                                                <h4> Job Name: <?php echo $row['jname']; ?> </h4>
                                                <h4> Department: <?php echo $row['department']; ?> </h4>
                                                <h4> Designation: <?php echo $row['designation']; ?> </h4>
                                                <h4> Experience Level: <?php echo $row['experience']; ?> </h4>
                                                <h4> Discription: <?php echo $row['jdiscription']; ?> </h4>
                                                <h4> Status: <?php if ($row['status']=='yes'){echo 'Accepted';}else if ($row['status']=='no'){echo 'Rejected';}else if ($row['status']=='pending'){echo 'Pending';} ?> </h4>
                                                <h4> Message From Recruiter: <?php echo $row['message']?></h4>
                                                <button class="button button1" value = "<?php echo $row['jid']; ?>" onclick="closediv(this.value)">Close</button><hr>
                                             </div>
                                        <?php }
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
            function opendiv(val){
                let id = val.toString();
                document.getElementById(id).style.display = "block";
            }
            function closediv(val){
                let id = val.toString();
                document.getElementById(id).style.display = "none";
            }
        </script>
	</body>
</html>