<?php
 if(!empty($_SESSION['userLogin'])) {
     $cityEditRec = "*";
     $tableName = "cities";
     $cId = $_GET['cId'];
     $where = "city_id = $cId";

     $cityEditRecords = $cont->select($cityEditRec, $tableName, $where);

     include("view/cityEditView.php");
 }
?>