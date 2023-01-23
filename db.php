<?php
function OpenConnection()
 {
 $dbhost = "localhost:3306";
 $dbuser = "xxxxxx";
 $dbpass = "xxxxxx";
 $db = "TabNotebook";

 $con = mysql_connect($dbhost,$dbuser,$dbpass);

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db($db, $con) or die( 'Unable to select database');
  mysql_query("SET NAMES 'utf8'");
 }
?>
