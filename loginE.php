<?php
    session_start();
    include ('connection.php');
    include('update.php');

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = "select * from user_e where eemail = '$email' and epassword = '$password'";
        $result = mysqli_query($connection , $sql);
        $arr = $result->fetch_array(MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        $_SESSION['name'] = $arr["ename"];
        $_SESSION['id'] = $arr["eid"];
        $_SESSION['email'] = $arr["eemail"];

        if($count == 1){
            header("Location:Employee/index.php");
        } else {
            echo '<script> window.location.href = "loginE.html"; 
                    alert("Invalid email or password") </script>';        
        }
    }
?>