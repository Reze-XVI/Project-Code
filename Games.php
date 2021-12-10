<?php
    if(isset($_POST['submit']))
    {
        $Game = $_POST['Game'];
        $Year = $_POST['Year_'];
        $Date = $_POST['Date_'];
        $Console = $_POST['Console'];

        include "DbConnect.php";

        $sql = "INSERT INTO games (Id, Game, Year_, Date_, Console) VALUES ('0', '$Game', '$Year', '$Date', '$Console')";

        $rs = mysqli_query($con, $sql);
        if ($rs)
        {
            echo "Succesfully added";
            header("location:Game Year.php");
            exit;
        }

        mysqli_close($con);
    }
?>