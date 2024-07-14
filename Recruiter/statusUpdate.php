<?php
    include('../connection.php');
    session_start();

    $status = $_GET['s'];
    $eid = $_GET['e'];
    $jid = $_GET['j'];
    
    $sql = "select * from jobs where jid = '$jid'";
    $result = mysqli_query($connection,$sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    $date = $row['interview'];

    $message = 'You have been selected for interview. Interview is on '.$date.' at 11am.';

    $sql1 = "update applications set status='yes', message='$message' where jid = '$jid' and eid = '$eid'";
    $sql2 = "update applications set status='no' where jid = '$jid' and eid = '$eid'";

    if($status == 1){
        $result = mysqli_query($connection,$sql1);
    } else if ($status != 1){
        $result = mysqli_query($connection,$sql2);
    }
    header("location:applications.php");
?>