<?php
    include('../connection.php');
    include('../date.php');
    session_start();

    if(isset($_POST['submit'])){
        $jid = rand();
        $rid = $_SESSION['id'];
        $cid = $_SESSION['cid'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $designation = $_POST['designation'];
        $experience = $_POST['experience'];
        $deadline = $_POST['deadline'];
        $discription = $_POST['discription'];
        $interview = $_POST['interview'];

        $sql = "insert into jobs(jid,jname, rid, cid, jdepartment, jdesignation, jdiscription, experience, status, deadline,interview) value('$jid','$name', '$rid', '$cid', '$department', '$designation', '$discription', '$experience', 'yes', '$deadline', '$interview')";
        $result = mysqli_query($connection, $sql);

        if($result){;
            header("Location:index.php?status=1");
            echo '<script>alert("Job Added Successfully");</script>';
        } else {
            echo '<script> window.location.href = "index.php?status=0";
                    alert("Failed to add job") </script>;';
        }
    }
?>