<?php

$con = mysqli_connect("localhost", "login_user", "abc123", "project");

if (!$con)
{
    die("Connection failed" . mysqli_connect_error());
}

?>