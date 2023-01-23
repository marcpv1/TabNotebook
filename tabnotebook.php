<?php
   include 'db.php';

   if (isset($_GET['tab'])) {
    $tab=$_GET['tab'];
   } else {
    $tab=1;
   }

   OpenConnection();

   $sql="SELECT Text FROM Paste WHERE Id=".$tab;
   $result = mysql_query($sql);
   $row = mysql_fetch_array($result);
   $ret=$row['Text'];
?>
<html>
<head>
<h1>Tab Notebook</h1>
<link rel="stylesheet" href="tabnotebook.css">
<script src="tabnotebook.js"></script>
</head>
<body onload="startup()">

<!-- Tab links -->
<div class="tab">
  <button id="bt1" class="tablinks" onclick="open_tab(1)">Tab 1</button>
  <button id="bt2" class="tablinks" onclick="open_tab(2)">Tab 2</button>
  <button id="bt3" class="tablinks" onclick="open_tab(3)">Tab 3</button>
  <button id="bt4" class="tablinks" onclick="open_tab(4)">Tab 4</button>
  <button id="bt5" class="tablinks" onclick="open_tab(5)">Tab 5</button>
</div>

<!-- Tab content -->
<div id="Tab1" class="tabcontent">
  <h3>Tab1</h3>
  <p>1</p>
</div>

<div id="Tab2" class="tabcontent">
  <h3>Tab2</h3>
  <p>2</p>
</div>

<div id="Tab3" class="tabcontent">
  <h3>Tab3</h3>
  <p>3</p>
</div>

<form id="myform" method="post" action="tab_update.php" accept-charset="UTF-8">

<textarea name="enganxa_text" id="enganxa_text" style="margin: 0px; width: 797px; height: 205px;">
<?php echo $ret;?>
</textarea>
<input style="display:none" type="text" id="num_tab" name="num_tab" value=<?php echo $tab?>>
<p></p>
<input name="submit" type="submit" value="Guarda" id="submit">
</form>
</body>
</html>
