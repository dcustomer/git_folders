<?php
 include("functions2.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="megafon_task2.css" />
<title>Megafon task</title>
</head>

<body>
 <div id="listItem">
  <form action="addItem.php" method="post">
   <input type="text" name="taskName" />
   <input type="submit" name="add" value="Add" />
  </form>
 </div>
 <?php
 
   $listArr[] = getList("list.txt");

  
  for($i = 0; $i < count($listArr); $i++)
  {
   for($j = 0; $j < count($listArr[$i]); $j++)
   {
    if($listArr[$i][$j] == "")
	{
	 unset($listArr[$i][$j]);
	}
	else
	{
     echo "<div id=\"listDiv\"><span class='span1'>".$listArr[$i][$j]."</span><span class='span2'><a href=\"deleteItem.php?del=delete&id=$j\">X</a><span></div>";
	}
   }
  }
  
 
 ?>
</body>
</html>
