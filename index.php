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


<?php
include("footer.php");
?>
