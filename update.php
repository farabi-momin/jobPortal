<?php
    include('connection.php');

    $sql = 'update jobs set status = "no" where deadline < CURRENT_DATE()';
    $result = mysqli_query($connection,$sql);
?>