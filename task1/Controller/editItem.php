<?php

 $editList = "*";
 $where = "id=$_GET[id]";

 $editRow = $cont->selectList($editList, $where);
 include("Views/editForm.php");

 
?>
