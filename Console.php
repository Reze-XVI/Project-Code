<DOCTYPE HTML>
<html lang="en">
<head>
<title>Console information</title>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/*This is used to style the header for the page*/
header {
  background-color: rgb(184, 5, 201);
  padding: 30px;
  text-align: left;
  font-size: 35px;
  color: white;
}
article {
  float: left;
  padding: 20px;
  background-color: white;
}
/*This is used to style the footer for the pages*/
footer {
  background-color: rgb(184, 5, 201);
  padding: 10px;
  text-align: center;
  color: white;
}
</style>
</head>

<body>

<header>
    <img src="Images/Hue.png" alt="Logo" style="width:150px;height:150px;float: right;">
    <h2>Video Game Archive</h2>
</header>

<article>
    <h2>Console Information</h2>

    <!-- Make sure to write more about the game of the year here and that im going based of the game awards. add some info about it here also -->

  <p>
    On this page you will find information about consoles and when they released and what console generation they are a part of. The newer consoles are part of the 9th gen and then the gen goes down from there.
    We have added the newest stuff and hope that people will add the older console's to the table.
  </p>

    <table border="2">
        <tr>
            <td>Console</td>
            <td>Release Date</td>
            <td>Generation</td>
            <td>Edit</td>
            <td>Delete</td> <!-- This is used to put the headers for each coloumn in the table -->
        </tr>

<?php

include "DbConnect.php"; // This is a seperate document to make it easier to login rather than having to write out the command everytime.

$records = mysqli_query($con, "select * from console_data"); // This is used to grab the info from the database

while ($data = mysqli_fetch_array($records)) // This is used to grab the information and display it while it can still grab data
{
?>

    <tr>
        <td><?php echo $data['Console']; ?></td>
        <td><?php echo $data['Release_date']; ?></td>
        <td><?php echo $data['Gen']; ?></td> <!-- This is used to display the information that it is grabbing -->
        <td><a href="edit1.php?Id=<?php echo $data['Id']; ?>">Edit</a></td>
        <td><a href="delete1.php?Id=<?php echo $data['Id']; ?>">Delete</a></td>
    </tr>
<?php
}
?>

<?php mysqli_close($con); ?>


</table>
<form method="POST" action="Data.php">
    <!-- I have used this to divide the code into section as to make it look a lot neater -->
    <div class="container">
    <!-- This is used to make the text appear at the center of the screen -->
    <h1 style="text-align: center;">Enter any earlier data here</h1> 
    <hr> <!-- this is used to make a break in the page to seperate the parameters-->
    <label for="Console"><b>Enter Console</b></label>
    <!-- I have made it so that the parameters are required otherwise they dont let you through-->
    <input type="text" placeholder="Enter Console" name="Console" required>
    <label for="Release_date"><b>Year</b></label>
    <input type="text" placeholder="Enter Release date" name="Release_date" required>
    <label for="Gen"><b>Enter the console gen</b></label>
    <input type="text" placeholder="Enter Generation" name="Gen" required>
    <hr>
    <!-- This code is used to make a button that says submit once the user has typed in all the necassary boxes. -->
    <input type="submit" name="submit" value="Submit">
</form>
</div>

<footer>
  <li><a href="Project.html">Return to homepage</a></li>
</footer>

</body>
</html>
    