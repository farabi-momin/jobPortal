<?php
    session_start();
    include ('connection.php');
    include('update.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "select * from user_r where remail = '$email' and rpassword = '$password'";
        $result = mysqli_query($connection , $sql);
        $arr = $result->fetch_array(MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $_SESSION['name'] = $arr["rname"];
        $_SESSION['id'] = $arr["rid"];
        $_SESSION['cid'] = $arr["cid"];
        $_SESSION['email'] = $arr["remail"];

        if($count == 1){
            header("Location:Recruiter/index.php");
        } else {
            echo '<script> window.location.href = "loginR.html"; 
                    alert("Invalid email or password") </script>';        
        }
    }
?>