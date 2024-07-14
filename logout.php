<?php
    session_start();
    session_reset();
    session_abort();
    header("location:index.php");
?>