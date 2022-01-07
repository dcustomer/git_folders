<?php
 if(!empty($_SESSION['userLogin'])) {
    $pharmacyAllRecords = "*";

    $tableName = "city_pharmacies";
   
    $pharmacyAllResults = $cont->select($pharmacyAllRecords, $tableName);
   
    include("view/allPharmaciesView.php");
 }
?>