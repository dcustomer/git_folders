<?php
header("Location: index.php");
 include("functions2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php
  echo $_POST['taskName'];
  echo "<br><br>";
  echo $_POST['add'];
  echo "<br><br>";
  
  if(addList($_POST['taskName'], $_POST['add']))
  {
   echo "The records had been inserted";
  }
  else
  {
   echo "No records had been inserted";
  }
 ?>
</body>
</html>
