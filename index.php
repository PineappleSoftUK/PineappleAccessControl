<?php
/*
* Pineapple Access Control
*/
//Security for includes
$includes = TRUE;

//Include file to open database
$includeOpendbOk = include("open_db.php");
if (!$includeOpendbOk) {
  echo "An important file is missing or cannot be accessed: open_db.php";
  exit();
}
?>

<?php
include("header.php");
?>

<h1>Pineapple Access Control</h1>
<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
  echo '<p>Welcome to Pineapple Access Control the system is now running, please <a href="login.php">log in</a> to manage the system.</p>';
} else {
?>


<p>Welcome to the Pineapple Access Control management page.</p>

<a href="add_user.php">Add a new user</a>
<br>
<a href="users.php">View/Amend users</a>
<br>
<a href="change_password.php">Change your password</a>

<?php
}
include("footer.php");
?>
