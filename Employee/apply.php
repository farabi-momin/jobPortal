<?php
    include('../connection.php');
    session_start();

    $jid = $_GET["j"];
    $eid = $_SESSION['id'];

    $sql = "select * from jobs where jid = '$jid'";
    $result = mysqli_query($connection, $sql);
    
    $sql2 = "select * from applications where jid = '$jid' and eid = '$eid'";
    $result2 = mysqli_query($connection,$sql2);

    if($result2->num_rows<=0){

        $row = $result->fetch_array(MYSQLI_ASSOC);
        $id = rand();
        $rid = $row['rid'];
        $cid = $row['cid'];
        $dept = $row['jdepartment'];
        $designation = $row['jdesignation'];
        
        $sql1 = "insert into applications(id, jid, rid, cid, eid, department, designation, status) value('$id', '$jid', '$rid', '$cid', '$eid', '$dept', '$designation', 'pending')";
        $result1 = mysqli_query($connection,$sql1);

        if($result){
            header('Location:findjob.php?&s=0&j='.$jid.'');
        } else {
            echo '<script> window.location.href = "index.php";
                        alert("something went wrong") </script>;';
        }
    } else if($result2->num_rows>0) {
        echo '<script> window.location.href = "findjob.php?&s=0&j='.$jid.'";
        alert("Already Applied") </script>;';
    }

?>
