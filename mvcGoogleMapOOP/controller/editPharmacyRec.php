<?php
 if(!empty($_SESSION['userLogin'])) {
     $pharmacyEditRec = "*";
     $tableName = "city_pharmacies";
     $pId = $_GET['pId'];
     $where = "pharmacy_id = $pId";

     $pharmacyEditRecords = $cont->select($pharmacyEditRec, $tableName, $where);

     $pharmacyLocInfo[] = "city_id";
     $pharmacyLocInfo[] = "city_name";

     $cityTableName = "cities";

     $pharmacyLocRec = $cont->select($pharmacyLocInfo, $cityTableName);
     
     include("view/pharmacyEditView.php");
 }
?>