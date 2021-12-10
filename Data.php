<?php
    if(isset($_POST['submit']))
    {
        $Console = $_POST['Console'];
        $Release = $_POST['Release_date'];
        $Gen = $_POST['Gen'];

        include "DbConnect.php";

        $sql = "INSERT INTO console_data (Id, Console, Release_date, Gen) VALUES ('0', '$Console', '$Release', '$Gen')";

        $rs = mysqli_query($con, $sql);
        if ($rs)
        {
            echo "Succesfully added";
            header("location:Console.php");
            exit;
        }

        mysqli_close($con);
    }
?>