<?php

include "DbConnect.php"; // The same database connect file used in all the php files.

$Id = $_GET['Id']; // This is to grab the id for the one that is clicked so it deletes the correct thing.

$Delete = mysqli_query($con, "DELETE from console_data where Id = '$Id'"); // This is the delete query.

if ($Delete)
{
    mysqli_close($con);
    header("location:Console.php"); // This makes sure that the website redirects back to itself and shows the info is deleted
    exit;
}
else
{
    echo "Error deleting the record."; // This is if it doesnt work it will display that it didnt work.
}

?>