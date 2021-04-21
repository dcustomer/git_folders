<?php
header("Location: index.php");
 include("functions2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Item</title>
</head>

<body>
 <?php
  if(delItem("list.txt", $_GET['del'], $_GET['id']))
  {
   echo "The record was deleted";
  }
  else
  {
   echo "Something went wrong";
  }
 ?>
</body>
</html>
