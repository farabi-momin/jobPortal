<?php
    include('connection.php');
    include('date.php');

    if(isset($_POST['submit'])){
        $id = rand();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNo'];
        $password = $_POST['password'];
        $dept = $_POST['department'];
        $des = $_POST['designation'];
        $cid = rand();
        $cname = $_POST['cname'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $cEmail = $_POST['cemail'];

        $sql1 = "insert into user_r(rid, rname, cid, remail, rphoneNo, rdepartment, rdesignation, rpassword) value($id, '$name', '$cid', '$email', '$phone', '$dept', '$des', '$password')";
        $result1 = mysqli_query($connection , $sql1);

        $sql2 = "insert into company(cid, cname, cemail, country, city) value($cid, '$cname', '$cEmail', '$country', '$city')";
        $result2 = mysqli_query($connection , $sql2);

        if($result1){
            header("Location:loginR.html");
        } else {
            echo '<script> window.location.href = "register.html"; 
                    alert("Failed to create account") </script>';
        }

        if($result){
            header("Location:login.html");
        } else {
            echo '<script> window.location.href = "register.html"; 
                    alert("Failed to create account") </script>';
        }
    }
?>