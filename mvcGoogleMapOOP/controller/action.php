<?php
 include("controller.php");
 session_start();

 if(isset($_GET['cityId'])) {
     $cityId = $_GET['cityId'];

     $actionCont = new controller;

     $pharmacyInfo = "*";

     $tableName = "city_pharmacies";

     $where = "city_id = $cityId";

     $pharmacyData = $actionCont->select($pharmacyInfo, $tableName, $where);

     if($pharmacyData) {
         echo "Selected...";
     } else {
         echo "No record was executed";
     }
     

 }
?>