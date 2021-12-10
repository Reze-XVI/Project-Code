<?php

include "DbConnect.php"; // file that includes database connect

$Id = $_GET['Id']; // This is to grab the Id number

$Query = mysqli_query($con, "SELECT * from games where Id='$Id'"); // This is to select the data

$data = mysqli_fetch_array($Query); // This is to grab the data from the query.

if(isset($_POST['update'])) // This is for when they click on the update button
{
    $Game = $_POST['Game'];
    $Year = $_POST['Year_'];
    $Date = $_POST['Date_'];
    $Console = $_POST['Console']; // This Grabs the data from the form at the bottom of the page

    $edit = mysqli_query($con, "UPDATE games set Game='$Game', Year_='$Year', Date_='$Date', Console='$Console' where Id='$Id'"); // This allows for the data to be edited

    if ($edit)
    {
        mysqli_close($con); // Close the connection
        header("location:Game Year.php"); // Goes back to website
        exit;
    }
    else
    {
        echo mysqli_error(); // Displays any errors
    }
}
?>

<h3>Update the data</h3>

<form method="POST"> <!-- This is the form for the data to be edited -->
    <input type="text" name="Game" value="<?php echo $data['Game'] ?>" placeholder="Enter Game Name" Required>
    <input type="text" name="Year_" value="<?php echo $data['Year_'] ?>" placeholder="Enter Year" Required>
    <input type="text" name="Date_" value="<?php echo $data['Date_'] ?>" placeholder="Enter Date" Required>
    <input type="text" name="Console" value="<?php echo $data['Console'] ?>" placeholder="Enter all the consoles" Required>
    <input type="submit" name="update" value="Update">
</form>