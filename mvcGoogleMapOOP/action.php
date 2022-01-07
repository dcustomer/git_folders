<?php
 include("controller/controller.php");
 session_start();

 if(isset($_GET['cityId'])) {
     $cityId = $_GET['cityId'];

     $actionCont = new controller;

     $cityInfo = "*";
     $cityTableName = "cities";
     $cityWhere = "city_id = $cityId";

     $cityData = $actionCont->select($cityInfo, $cityTableName, $cityWhere);

     $pharmacyInfo = "*";
     $tableName = "city_pharmacies";
     $where = "city_id = $cityId";

     $pharmacyData = $actionCont->select($pharmacyInfo, $tableName, $where);

     if($pharmacyData) {
         echo "Selected...";
     } else {
         echo "No record was executed";
     }

     $cityData = json_encode($cityData);
     $_SESSION['cityAllData'] = $cityData;

     $pharmacyData = json_encode($pharmacyData);
     $_SESSION['pharmacyAllData'] = $pharmacyData;

     header("Location: index.php");
     

 }
?>