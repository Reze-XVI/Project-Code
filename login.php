<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['username'];
        $email = $_POST['email'];
        $passwrd = $_POST['passwrd'];

        $host = "localhost";
        $username = "login_user";
        $password = "abc123";
        $dbname = "project";

        $con = mysqli_connect($host, $username, $password, $dbname);

        if (!$con)
        {
            die("Connection failed" . mysqli_connect_error());
        }

        $sql = "INSERT INTO login_details (Id, uname, email, passwrd) VALUES ('0', '$name', '$email', '$passwrd')";

        $rs = mysqli_query($con, $sql);
        if ($rs)
        {
            echo "Succesfully added";
            header("location:Project.html");
            exit;
        }

        mysqli_close($con);
    }
?>