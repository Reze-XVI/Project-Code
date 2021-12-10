<DOCTYPE HTML>
<html lang="en">
<head>
<title>Game of the Year Winners</title>
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
    <h2>Previous Game of the Year Winners</h2>

    <!-- Make sure to write more about the game of the year here and that im going based of the game awards. add some info about it here also -->

  <p>
    This table includes the previous Game of the Year winners which comes from The Game Awards.
    The Game Awards is a yearly event in which games from throughout the year are given awards for different categories and the ultimate reward is the Game Of the Year reward.
    We have listed the Games from the year and the date and platform they were released on. We will continue to update this database through the years and try to do it as soon as possible so you can stay up to date.
  </p>

    <table border="2">
        <tr>
            <td>Game</td>
            <td>Year</td>
            <td>Date</td>
            <td>Console</td>
            <td>Edit</td>
            <td>Delete</td> <!-- This is used to put the headers for each coloumn in the table -->
        </tr>

<?php

include "DbConnect.php"; // This is a seperate document to make it easier to login rather than having to write out the command everytime.

$records = mysqli_query($con, "select * from games"); // This is used to grab the info from the database

while ($data = mysqli_fetch_array($records)) // This is used to grab the information and display it while it can still grab data
{
?>

    <tr>
        <td><?php echo $data['Game']; ?></td>
        <td><?php echo $data['Year_']; ?></td>
        <td><?php echo $data['Date_']; ?></td>
        <td><?php echo $data['Console']; ?></td> <!-- This is used to display the information that it is grabbing -->
        <td><a href="edit.php?Id=<?php echo $data['Id']; ?>">Edit</a></td>
        <td><a href="delete.php?Id=<?php echo $data['Id']; ?>">Delete</a></td>
    </tr>
<?php
}
?>

<?php mysqli_close($con); ?>


</table>
<form method="POST" action="Games.php">
    <!-- I have used this to divide the code into section as to make it look a lot neater -->
    <div class="container">
    <!-- This is used to make the text appear at the center of the screen -->
    <h1 style="text-align: center;">Enter any earlier data here</h1> 
    <hr> <!-- this is used to make a break in the page to seperate the parameters-->
    <label for="Game"><b>Enter Game</b></label>
    <!-- I have made it so that the parameters are required otherwise they dont let you through-->
    <input type="text" placeholder="Enter Game" name="Game" required>
    <label for="Year_"><b>Year</b></label>
    <input type="text" placeholder="Enter Year" name="Year_" required>
    <label for="Date_"><b>Enter Date</b></label>
    <input type="text" placeholder="Enter Date" name="Date_" required>
    <label for="Console"><b>Enter Console</b></label>
    <input type="text" placeholder="Enter Console" name="Console" required>
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
    