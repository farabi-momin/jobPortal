<?php
    include('connection.php');
    include('date.php');

    if(isset($_POST['submit'])){
        $id = rand();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phoneNo'];
        $password = $_POST['password'];
        $university = $_POST['university'];
        $subject = $_POST['subject'];
        $grade = $_POST['grade'];
        $experience = $_POST['experience'];

        //file upload
        $file_name = $_FILES['cv']['name'];
        $file_tmp = $_FILES['cv']['tmp_name'];

        $dir = 'resume/'.$id;
 
          move_uploaded_file($file_tmp,$dir);

        ///file upload

        $sql1 = "insert into user_e(eid, ename, eemail, ephoneNo, epassword) value($id, '$name', '$email', '$phone', '$password')";
        $result1 = mysqli_query($connection , $sql1);

        $sql2 = "insert into user_e_info(eid, ename, eemail, ephoneNo, university, subject, grade, experience, cv) value($id, '$name', '$email', '$phone', '$university', '$subject', '$grade', '$experience', '$dir')";
        $result2 = mysqli_query($connection , $sql2);

        if($result2){
            header("Location:loginE.html");
        } else {
            echo ' 
                   <script> alert("Failed to create account") </script>;</script>';
        }

    }
?>