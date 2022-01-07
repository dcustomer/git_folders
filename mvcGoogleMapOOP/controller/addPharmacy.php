<?php
 if(!empty($_SESSION['userLogin'])) {
     $pharmacyCityInfo[] = "city_id";
     $pharmacyCityInfo[] = "city_name";
     $tableName = "cities";
     $pharmacyCityRes = $cont->select($pharmacyCityInfo, $tableName);

     include("view/addPharmacyView.php");
 }
?>