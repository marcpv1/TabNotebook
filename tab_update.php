<html>
<head></head>
<body>
<?php
   include 'db.php';

   OpenConnection();

   $text=htmlentities($_POST['enganxa_text'], ENT_QUOTES, "UTF-8");
   $ntab=$_POST['num_tab'];
   $sql="UPDATE Paste SET Text='" . $text . "' WHERE Id=" . (int)$ntab;
   $result = mysql_query($sql);
   echo "text:" . $text;
   echo "<br>ntab:" . $ntab;
   echo "<br>QUERY:" . $sql;

   // Redirect page
   header("Location: tabnotebook.php"); 
   exit();

?>

</body>
</html>
