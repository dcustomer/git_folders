<?php
 if(!empty($_SESSION['userLogin'])) {
     $delCityId = $_GET['cId'];

     $tableName = "cities";
     $where = "city_id = $delCityId";

     $delCityInfo = $cont->delete($tableName, $where);

     if($delCityInfo) {
         echo "city record was deleted";
     } else {
         echo "city record was not deleted";
     }
 }
?>