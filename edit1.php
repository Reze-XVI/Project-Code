<?php

include "DbConnect.php"; // file that includes database connect

$Id = $_GET['Id']; // This is to grab the Id number

$Query = mysqli_query($con, "SELECT * from console_data where Id='$Id'"); // This is to select the data

$data = mysqli_fetch_array($Query); // This is to grab the data from the query.

if(isset($_POST['update'])) // This is for when they click on the update button
{
    $Console = $_POST['Console'];
    $Release = $_POST['Release_date'];
    $Gen = $_POST['Gen']; // This Grabs the data from the form at the bottom of the page

    $edit = mysqli_query($con, "UPDATE console_data set Console='$Console', Release_date='$Release', Gen='$Gen' where Id='$Id'"); // This allows for the data to be edited

    if ($edit)
    {
        mysqli_close($con); // Close the connection
        header("location:Console.php"); // Goes back to website
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
    <input type="text" name="Console" value="<?php echo $data['Console'] ?>" placeholder="Enter Console" Required>
    <input type="text" name="Release_date" value="<?php echo $data['Release_date'] ?>" placeholder="Enter Release date" Required>
    <input type="text" name="Gen" value="<?php echo $data['Gen'] ?>" placeholder="Enter Generation" Required>
    <input type="submit" name="update" value="Update">
</form>